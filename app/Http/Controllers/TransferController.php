<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Twilio\Rest\Client;

class TransferController extends Controller
{
    function formatPhoneNumber($phoneNumber)
    {
        // Menghapus karakter non-digit
        $phoneNumber = preg_replace('/\D/', '', $phoneNumber);

        // Memeriksa apakah nomor dimulai dengan 0 dan menggantinya dengan +62
        if (substr($phoneNumber, 0, 1) == '0') {
            $phoneNumber = '+62' . substr($phoneNumber, 1);
        }

        return $phoneNumber;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.transfer');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bukti_transfer' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'sumber_informasi' => 'required|string|max:255',
        ]);
        $pendaftaran = auth()->user()->pendaftaran->first();
        // Mengunggah dan menyimpan bukti transfer
        if ($request->hasFile('bukti_transfer')) {
            $file = $request->file('bukti_transfer');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('images', $imageName, 'public');
        } else {
            return back()->with('error', 'Bukti transfer tidak ditemukan');
        }

        // Buat instance Transfer baru dan simpan data
        $transfer = [
            'id_pendaftaran' => $pendaftaran->id,
            'tanggal_transfer' => now(),
            'nomor_transfer' => Str::random(10),
            'bukti_transfer' => $imageName,
            'sumber_informasi' => $request->input('sumber_informasi'),
            'accepts_whatsapp' => $request->input('accepts_whatsapp') ? true : false,
        ];
        $biodata = Biodata::where('id_pendaftaran', $pendaftaran->id)->first();
        $formatPhoneNumber = $this->formatPhoneNumber($biodata->telephone);
        $model = Transfer::create($transfer);

        //KIRIM WHATSAPP
        $sid    = env("WHATSAPP_ID_TWILIO");
        $token  = env("WHATSAPP_TOKEN_TWILIO");
        $twilio = new Client($sid, $token);

        // try {
        //     $twilio->messages
        //         ->create(
        //             "whatsapp:$formatPhoneNumber", // to
        //             array(
        //                 "from" => "whatsapp:+14155238886",
        //                 "body" => "Pendaftaran anda telah dilakukan. Terima kasih."
        //             )
        //         );
        //     $model->update(['is_sent' => true]);
        // } catch (\Throwable $th) {
        //     return back()->with('error', 'Whatsapp gagal dikirim');
        // }


        return redirect()->route('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

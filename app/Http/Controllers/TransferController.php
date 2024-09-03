<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Twilio\Rest\Client;

class TransferController extends Controller
{
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
        Transfer::create($transfer);

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
    public function edit(Transfer $transfer)
    {
        return view('transfer.edit', compact('transfer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bukti_transfer' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'sumber_informasi' => 'required|string|max:255',
        ]);

        $pendaftaran = auth()->user()->pendaftaran->first();
        $transfer = Transfer::findOrFail($id);

        // Mengunggah dan memperbarui bukti transfer jika ada file baru
        if ($request->hasFile('bukti_transfer')) {
            $file = $request->file('bukti_transfer');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('images', $imageName, 'public');

            // Hapus bukti transfer lama jika ada
            if ($transfer->bukti_transfer) {
                Storage::disk('public')->delete('images/' . $transfer->bukti_transfer);
            }

            // Perbarui nama file bukti transfer
            $transfer->bukti_transfer = $imageName;
        }

        // Perbarui data transfer lainnya
        $transfer->sumber_informasi = $request->input('sumber_informasi');
        $transfer->accepts_whatsapp = $request->input('accepts_whatsapp') ? true : false;
        $transfer->status = 'pending';

        // Simpan perubahan
        $transfer->save();

        // Redirect atau kembali dengan pesan sukses
        return redirect()->route('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

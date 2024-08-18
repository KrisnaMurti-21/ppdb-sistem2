<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Kesehatan;
use App\Models\ParentBioAyah;
use App\Models\Pendaftaran;
use App\Models\Rapot;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = auth()->user()->pendaftaran->first();
        $bio = Biodata::where('id_pendaftaran', $data->id)->first();
        if ($bio) {
            return redirect()->route('transfer.index');
        }
        return view('user.biodata', compact('data'));
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
        $user = Auth::user();
        $dataUser = $user->pendaftaran->first();
        $request->validate([
            'name' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'nisn' => 'required|string|size:10|unique:biodatas',
            'gender' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
        ]);
        $data = [
            'id_pendaftaran' => $dataUser->id,
            'nama_lengkap' => $request->get('name'),
            'asal_sekolah' => $request->get('asal_sekolah'),
            'nisn' => $request->get('nisn'),
            'jenis_kelamin' => $request->get('gender'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tgl_lahir'),
            'alamat' => $request->get('alamat'),
            'kota' => $request->get('kabupaten'),
            'provinsi' => $request->get('provinsi'),
            'telephone' => $request->get('telepon'),
        ];
        Biodata::create($data);
        return redirect()->route('rapot.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if ($id != auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        $data = Pendaftaran::where('user_id', $id)->first();
        $biodata = Biodata::where('id_pendaftaran', $data->id)->first();
        $rapot = Rapot::where('id_pendaftaran', $data->id)->first();
        $kesehatan = Kesehatan::where('id_pendaftaran', $data->id)->first();
        $wali = ParentBioAyah::where('id_bio', $biodata->id)->first();
        $transfer = Transfer::where('id_pendaftaran', $data->id)->first();
        if ($data == null) {
            return redirect()->route('pendaftaran.index');
        } elseif ($biodata == null) {
            return redirect()->route('biodata.index');
        } elseif ($rapot == null) {
            return redirect()->route('rapot.index');
        } elseif ($kesehatan == null) {
            return redirect()->route('kesehatan.index');
        } elseif ($wali == null) {
            return redirect()->route('datawali.index');
        } elseif ($transfer == null) {
            return redirect()->route('transfer.index');
        }
        return view('biodata.show', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Biodata::find($id);
        if ($data->id_pendaftaran != auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('biodata.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $biodata = Biodata::find($id);
        $dataValidate = request()->validate([
            'nama_lengkap' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'nisn' => 'required|string|size:10',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string',
            'kota' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
        ]);

        $biodata->update($dataValidate);
        $dataUser = Auth::user();
        $dataUser->name = $request->get('nama_lengkap');
        $dataUser->save();
        return redirect()->route('biodata.show', $biodata->id_pendaftaran);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

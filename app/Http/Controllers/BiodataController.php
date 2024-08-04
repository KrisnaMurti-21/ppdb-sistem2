<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = auth()->user()->pendaftaran->first();
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
            'id_pendaftaran' => $request->get('id_pendaftaran'),
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
        $data = Pendaftaran::where('user_id', $id)->first();
        $biodata = Biodata::where('id_pendaftaran', $data->id)->first();
        if ($data == null) {
            return redirect()->route('pendaftaran.index');
        } elseif ($biodata == null) {
            return redirect()->route('biodata.index');
        }
        return view('user.profile', compact('biodata'));
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

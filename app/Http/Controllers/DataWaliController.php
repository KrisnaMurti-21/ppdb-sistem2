<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\ParentBioAyah;
use App\Models\ParentBioIbu;
use App\Models\ParentBioWali;
use Illuminate\Http\Request;

class DataWaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.datawali');
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
            'nama_ayah' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'telepon_ayah' => 'required|string|max:20',
            'alamat_ayah' => 'required|string|max:255',
            'kota_ayah' => 'required|string|max:255',
            'provinsi_ayah' => 'required|string|max:255',

            'nama_ibu' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'telepon_ibu' => 'required|string|max:20',
            'alamat_ibu' => 'required|string|max:255',
            'kota_ibu' => 'required|string|max:255',
            'provinsi_ibu' => 'required|string|max:255',

            'nama_wali' => 'nullable|string|max:255',
            'pekerjaan_wali' => 'nullable|string|max:255',
            'telepon_wali' => 'nullable|string|max:20',
            'alamat_wali' => 'nullable|string|max:255',
            'kota_wali' => 'nullable|string|max:255',
            'provinsi_wali' => 'nullable|string|max:255',
        ]);
        $id = auth()->user()->pendaftaran->first();
        $data = Biodata::where('id_pendaftaran', $id->id)->first();
        $data_ayah = [
            'id_bio' => $data->id,
            'nama' => $request->get('nama_ayah'),
            'pekerjaan' => $request->get('pekerjaan_ayah'),
            'telephone' => $request->get('telepon_ayah'),
            'alamat' => $request->get('alamat_ayah'),
            'kota' => $request->get('kota_ayah'),
            'provinsi' => $request->get('provinsi_ayah'),
        ];

        ParentBioAyah::create($data_ayah);

        $data_ibu = [
            'id_bio' => $data->id,
            'nama' => $request->get('nama_ibu'),
            'pekerjaan' => $request->get('pekerjaan_ibu'),
            'telephone' => $request->get('telepon_ibu'),
            'alamat' => $request->get('alamat_ibu'),
            'kota' => $request->get('kota_ibu'),
            'provinsi' => $request->get('provinsi_ibu'),
        ];

        ParentBioIbu::create($data_ibu);

        // Check if wali data is provided
        if ($request->filled('nama_wali')) {
            $data_wali = [
                'id_bio' => $data->id,
                'nama' => $request->get('nama_wali'),
                'pekerjaan' => $request->get('pekerjaan_wali'),
                'telephone' => $request->get('telepon_wali'),
                'alamat' => $request->get('alamat_wali'),
                'kota' => $request->get('kota_wali'),
                'provinsi' => $request->get('provinsi_wali'),
            ];

            ParentBioWali::create($data_wali);
        }

        return redirect()->route('transfer.index');
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

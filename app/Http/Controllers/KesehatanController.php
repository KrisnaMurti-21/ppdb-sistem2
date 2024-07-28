<?php

namespace App\Http\Controllers;

use App\Models\Kesehatan;
use Illuminate\Http\Request;

class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.kesehatan');
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
            'gol_darah' => 'required|in:A,B,AB,O',
            'tinggi_badan' => 'required|numeric|min:1',
            'berat_badan' => 'required|numeric|min:1',
            'alergi' => 'required|in:Ya,Tidak',
            'ket_alergi' => 'required_if:alergi,Ya',
            'kronis' => 'required|in:Ya,Tidak',
            'ket_kronis' => 'required_if:kronis,Ya',
            'medis' => 'required|in:Ya,Tidak',
            'ket_medis' => 'required_if:medis,Ya',
            'operasi' => 'required|in:Ya,Tidak',
            'ket_operasi' => 'required_if:operasi,Ya',
            'obat' => 'required|in:Ya,Tidak',
            'ket_obat' => 'required_if:obat,Ya',
            'khusus' => 'required|in:Ya,Tidak',
            'ket_khusus' => 'required_if:khusus,Ya',
            'tambahan' => 'required|string',
        ]);
        $id_pendaftaran = auth()->user()->pendaftaran->first();
        $data = [
            'id_pendaftaran' => $id_pendaftaran->id,
            'gol_darah' => $request->gol_darah,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'alergi' => $request->alergi === 'Ya' ? 1 : 0,
            'ket_alergi' => $request->ket_alergi,
            'kronis' => $request->kronis === 'Ya' ? 1 : 0,
            'ket_kronis' => $request->ket_kronis,
            'medis' => $request->medis === 'Ya' ? 1 : 0,
            'ket_medis' => $request->ket_medis,
            'operasi' => $request->operasi === 'Ya' ? 1 : 0,
            'ket_operasi' => $request->ket_operasi,
            'obat' => $request->obat === 'Ya' ? 1 : 0,
            'ket_obat' => $request->ket_obat,
            'khusus' => $request->khusus === 'Ya' ? 1 : 0,
            'ket_khusus' => $request->ket_khusus,
            'tambahan' => $request->tambahan,
        ];
        Kesehatan::create($data);
        return redirect()->route('datawali.index');
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

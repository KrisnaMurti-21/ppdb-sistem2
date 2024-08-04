<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Rapot;
use Illuminate\Http\Request;

class RapotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = auth()->user()->pendaftaran->first();
        $jalur = $data->jalur_pendaftaran;
        $cekRapot = Rapot::where('id_pendaftaran', $data->id)->exists();
        if ($cekRapot) {
            return redirect()->route('kesehatan.index');
        }
        return view('user.rapot', compact('jalur'));
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
        $id_pendaftaran = auth()->user()->pendaftaran->first()->id;

        $request->validate([
            'mtk_7s1' => 'required|numeric',
            'inggris_7s1' => 'required|numeric',
            'ipa_7s1' => 'required|numeric',
            'mtk_7s2' => 'required|numeric',
            'inggris_7s2' => 'required|numeric',
            'ipa_7s2' => 'required|numeric',
            'mtk_8s1' => 'required|numeric',
            'inggris_8s1' => 'required|numeric',
            'ipa_8s1' => 'required|numeric',
            'mtk_8s2' => 'required|numeric',
            'inggris_8s2' => 'required|numeric',
            'ipa_8s2' => 'required|numeric',
            'prestasis' => 'nullable|array',
            'prestasis.*.tingkat' => 'nullable|string',
            'prestasis.*.juara' => 'nullable|string',
            'prestasis.*.bidang' => 'nullable|string',
            'prestasis.*.penyelenggara' => 'nullable|string',
        ]);

        $rapotData = $request->only([
            'mtk_7s1', 'inggris_7s1', 'ipa_7s1',
            'mtk_7s2', 'inggris_7s2', 'ipa_7s2',
            'mtk_8s1', 'inggris_8s1', 'ipa_8s1',
            'mtk_8s2', 'inggris_8s2', 'ipa_8s2',
        ]);

        $rapotData['id_pendaftaran'] = $id_pendaftaran;

        $rapot = Rapot::create($rapotData);

        if ($request->has('prestasis')) {
            foreach ($request->prestasis as $prestasiData) {
                if (!empty($prestasiData['tingkat']) && !empty($prestasiData['juara']) && !empty($prestasiData['bidang']) && !empty($prestasiData['penyelenggara'])) {
                    $prestasiData['id_rapot'] = $rapot->id;
                    Prestasi::create($prestasiData);
                }
            }
        }

        return redirect()->route('kesehatan.index');
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

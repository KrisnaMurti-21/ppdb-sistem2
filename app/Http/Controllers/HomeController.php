<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function dashboard()
    {
        $data = auth()->user()->pendaftaran->first();
        if ($data === null || $data->jalur_pendaftaran === null) {
            return redirect()->route('pendaftaran.index');
        }
        $combinedData = DB::table('users')
            ->join('pendaftarans', 'users.id', '=', 'pendaftarans.user_id')
            ->leftJoin('transfers', 'pendaftarans.id', '=', 'transfers.id_pendaftaran')
            ->select(
                'users.id as user_id',
                'users.name',
                'users.email',
                'pendaftarans.id as pendaftaran_id',
                'pendaftarans.tanggal_daftar',
                'pendaftarans.jalur_pendaftaran',
                'transfers.id as transfer_id',
                'transfers.tanggal_transfer',
                'transfers.nomor_transfer',
                'transfers.bukti_transfer',
                'transfers.sumber_informasi'
            )
            ->groupBy('users.id', 'pendaftarans.id', 'transfers.id')
            ->orderBy('users.id')
            ->orderBy('pendaftarans.id')
            ->orderBy('transfers.id')
            ->get();
        return view('dashboard', compact('combinedData'));
    }

    public function success()
    {
        return view('user.success');
    }
}

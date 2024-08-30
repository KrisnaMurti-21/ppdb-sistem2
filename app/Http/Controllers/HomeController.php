<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $data = auth()->user()->pendaftaran->first();
            if ($data === null || $data->jalur_pendaftaran === null) {
                return redirect()->route('pendaftaran.index');
            }
        }
        return view('home');
    }
    public function dashboard()
    {
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
            ->groupBy(
                'users.id',
                'users.name',
                'users.email',
                'pendaftarans.id',
                'pendaftarans.tanggal_daftar',
                'pendaftarans.jalur_pendaftaran',
                'transfers.id',
                'transfers.tanggal_transfer',
                'transfers.nomor_transfer',
                'transfers.bukti_transfer',
                'transfers.sumber_informasi'
            )
            ->orderBy('users.id')
            ->orderBy('pendaftarans.id')
            ->orderBy('transfers.id')
            ->get();
        return view('dashboard', compact('combinedData'));
    }

    public function pengumuman()
    {
        $data = Auth::user()->pendaftaran;
        $datatransfer = Transfer::where('id_pendaftaran', $data->first()->id)->first();
        if ($datatransfer->status == 'pending') {
            $message = 'Mohon menunggu konfirmasi dari admin';
        } elseif ($datatransfer->status == 'reject') {
            $message = 'Pendaftaran anda ditolak, mohon periksa kembali data anda';
        } else {
            $message = 'Selamat anda telah terdaftar';
        }
        return view('user.pengumuman', compact('message'));
    }


    public function success()
    {
        $email = auth()->user()->email;
        Mail::to($email)->send(new SendMail());
        return view('user.success');
    }
}

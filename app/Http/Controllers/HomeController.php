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
        if ($datatransfer != null) {
            $idDataTf = $datatransfer->id;

            if ($datatransfer->status == 'pending') {
                return view('user.pending');
            } elseif ($datatransfer->status == 'reject') {
                return view('user.reject', compact('idDataTf'));
            } else {
                return view('user.approve');
            }
        }
        return view('user.transfer');
    }

    public function success()
    {
        $email = auth()->user()->email;
        // Mail::to($email)->send(new SendMail());
        return view('user.success');
    }

    public function programunggulan()
    {
        return view('user.programunggulan');
    }
}

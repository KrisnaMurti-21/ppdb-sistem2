<?php

namespace App\Http\Controllers;

use App\Mail\ApproveMail;
use App\Mail\RejectMail;
use App\Models\Pendaftaran;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function detail($id)
    {
        $data = Pendaftaran::find($id);
        $datauser = User::find($data->user_id);
        $datatransfer = Transfer::where('id_pendaftaran', $id)->first();

        return view('admin.detailtransfer', compact('data', 'datatransfer', 'datauser'));
    }

    public function approve(Transfer $id)
    {
        $id_pendfataran = $id->id_pendaftaran;
        $pendaftaran = Pendaftaran::find($id_pendfataran);
        $user = User::find($pendaftaran->user_id);
        Mail::to($user->email)->send(new ApproveMail());
        $id->update([
            'status' => 'approve'
        ]);
        return redirect()->route('dashboard');
    }

    public function reject(Transfer $id)
    {
        $id_pendfataran = $id->id_pendaftaran;
        $pendaftaran = Pendaftaran::find($id_pendfataran);
        $user = User::find($pendaftaran->user_id);
        Mail::to($user->email)->send(new RejectMail());
        $id->update([
            'status' => 'reject'
        ]);
        return redirect()->route('dashboard');
    }
}

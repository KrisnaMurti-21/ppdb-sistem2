<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;

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
        $id->update([
            'status' => 'approve'
        ]);
        return redirect()->route('dashboard');
    }

    public function reject(Transfer $id)
    {
        $id->update([
            'status' => 'reject'
        ]);
        return redirect()->route('dashboard');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesehatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pendaftaran',
        'gol_darah',
        'tinggi_badan',
        'berat_badan',
        'alergi',
        'ket_alergi',
        'kronis',
        'ket_kronis',
        'medis',
        'operasi',
        'ket_operasi',
        'obat',
        'ket_obat',
        'khusus',
        'ket_khusus',
        'tambahan',
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran');
    }
}

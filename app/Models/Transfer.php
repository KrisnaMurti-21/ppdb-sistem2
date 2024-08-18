<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pendaftaran',
        'tanggal_transfer',
        'nomor_transfer',
        'bukti_transfer',
        'sumber_informasi',
        'status',
        'is_sent',
        'accepts_whatsapp',
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran');
    }
}

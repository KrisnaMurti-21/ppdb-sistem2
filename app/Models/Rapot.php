<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapot extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pendaftaran',
        'mtk_7s1', 'inggris_7s1', 'ipa_7s1',
        'mtk_7s2', 'inggris_7s2', 'ipa_7s2',
        'mtk_8s1', 'inggris_8s1', 'ipa_8s1',
        'mtk_8s2', 'inggris_8s2', 'ipa_8s2',
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_rapot',
        'tingkat',
        'juara',
        'bidang',
        'penyelenggara',
    ];

    public function rapot()
    {
        return $this->belongsTo(Rapot::class, 'id_rapot');
    }
}

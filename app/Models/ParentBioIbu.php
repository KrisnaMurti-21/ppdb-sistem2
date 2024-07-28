<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentBioIbu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_bio',
        'nama',
        'pekerjaan',
        'telephone',
        'alamat',
        'kota',
        'provinsi',
    ];

    // Menentukan relasi dengan model lain jika ada
    public function bio()
    {
        return $this->belongsTo(Biodata::class, 'id_bio');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nim',
        'nama',
        'prodi',
        'angkatan',
        'email',
        'alamat',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
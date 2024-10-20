<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKamar extends Model
{
    protected $fillable = [
        'Jenis_Kamar',
        'Fasilitas',
        'Harga',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $fillable = [
        'No_Kamar',
        'Jenis_Kamar',
        'Lantai',
        'Status_Kamar',
    ];
}

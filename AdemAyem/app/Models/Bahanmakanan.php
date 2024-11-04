<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahanmakanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'status',
        'kategori',
        'stockmin',
        'stockmax',
        'satuanmin',
        'satuanmax',
    ];
}

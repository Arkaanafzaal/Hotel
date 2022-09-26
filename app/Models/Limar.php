<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Limar extends Model
{
    protected $table="fasilitaskamar";

    protected $fillable = [
        'nama_fasilitas','tipekamar'
    ];
}

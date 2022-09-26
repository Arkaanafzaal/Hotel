<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class litel extends Model
{
    use HasFactory;

    protected $table="fasilitashotel";

    protected $fillable = [
        'nama_fasilitas','keterangan','image'
    ];
}

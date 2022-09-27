<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fastel extends Model
{
    protected $table="fasilitashotel";

    protected $fillable = [
        'namafasilitas','foto','keterangan'
    ];
}

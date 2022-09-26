<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemesan', 'email', 'nama_tamu', 'no_hp', 'tanggal_cekin', 'tanggal_cekout', 'tipe_kamar'
    ];
}

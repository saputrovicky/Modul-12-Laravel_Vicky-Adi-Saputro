<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    protected $fillable = [
        'judul',
        'nomor_katalog',
        'tanggal_rilis',
        'frekuensi_terbit',
        'bahasa',
        'ukuran_file',
        'sampul',
    ];
}

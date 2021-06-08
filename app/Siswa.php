<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa'; 
    // nama tabel yang ada di dalam database

    protected $fillable = ['nama', 'nis_nisn', 'tp', 'tl', 'alamat', 'ortu_w', 'p_ow'];
    // mengisikan fild2 dari table di dalam database
}

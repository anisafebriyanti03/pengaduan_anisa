<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduans';
    protected $fillable = ['tgl_pengaduan', 'masyarakat_nik', 'isi_laporan', 'foto', 'status'];
    protected $primaryKey = 'id';
}

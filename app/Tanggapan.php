<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapan';
    protected $fillable = ['pengaduan_id', 'tgl_tanggapan', 'tanggapan'];
    protected $primaryKey = 'id_tanggapan';
}

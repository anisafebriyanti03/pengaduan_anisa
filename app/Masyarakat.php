<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Masyarakat extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nik',
        'name',
        'email',
        'password',
        'telp',
        'jenkel',
        'level',
        'alamat',
        'rt',
        'rw',
        'kode_pos',
        'province_id',
        'regency_id',
        'district_id',
        'village_id',
    ];

    protected $hidden =[
        'password',
        'remember_token',
    ];
}

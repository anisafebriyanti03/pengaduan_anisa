<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Masyarakat;

class RegisterController extends Controller
{
    public function RegisterFormMasyarakat()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        return view('auth.register', compact('provinces','regencies','districts','villages'));
    }

    public function RegisterMasyarakat()
    {
        $data_masyarakat = new Masyarakat();
        $data_masyarakat->nik = request()->get('nik');
        $data_masyarakat->name = request()->get('name');
        $data_masyarakat->email = request()->get('email');
        $data_masyarakat->password = bcrypt(request()->get('password'));
        $data_masyarakat->telp = request()->get('telp');
        $data_masyarakat->jenkel = request()->get('jenkel');
        $data_masyarakat->alamat = request()->get('alamat');
        $data_masyarakat->rt = request()->get('rt');
        $data_masyarakat->rw = request()->get('rw');
        $data_masyarakat->kode_pos = request()->get('kode_pos');
        $data_masyarakat->province_id = request()->get('province_id');
        $data_masyarakat->regency_id = request()->get('regency_id');
        $data_masyarakat->district_id = request()->get('district_id');
        $data_masyarakat->village_id = request()->get('village_id');
        $data_masyarakat->save();
        return redirect()->to('/register')->with('success','Data masyarakat sukses ditambahkan !');
    }
}

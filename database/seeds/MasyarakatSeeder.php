<?php

use App\Masyarakat;
use Illuminate\Database\Seeder;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Masyarakat::create([
            'nik' => '666',
            'name' => 'Petugas',
            'email' => 'petugas123@gmail.com',
            'password' => bcrypt('123'),
            'telp' => '0867',
            'jenkel' => 'laki-laki',
            'level' => 'petugas',
            'alamat' => 'cinere',
            'rt' => '08',
            'rw' => '05',
            'kode_pos' =>'1456',
            'province_id' => '1',
            'regency_id' => '2',
            'district_id' => '3',
            'village_id' => '2'
        ]);

        Masyarakat::create([
            'nik' => '777',
            'name' => 'reyhan',
            'email' => 'reyhan15@gmail.com',
            'password' => bcrypt('123'),
            'telp' => '0867',
            'jenkel' => 'laki-laki',
            'level' => 'masyarakat',
            'alamat' => 'cinere',
            'rt' => '08',
            'rw' => '05',
            'kode_pos' =>'1456',
            'province_id' => '1',
            'regency_id' => '2',
            'district_id' => '3',
            'village_id' => '2'
            
        ]);

        Masyarakat::create([
            'nik' => '555',
            'name' => 'Admin',
            'email' => 'Admin123@gmail.com',
            'password' => bcrypt('123'),
            'telp' => '0867',
            'jenkel' => 'laki-laki',
            'level' => 'admin',
            'alamat' => 'cinere',
            'rt' => '08',
            'rw' => '05',
            'kode_pos' =>'1456',
            'province_id' => '1',
            'regency_id' => '2',
            'district_id' => '3',
            'village_id' => '2'
        ]);
    }
}

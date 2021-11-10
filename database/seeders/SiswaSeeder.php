<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert([
            [
                "nis" => "2021010001",
                "nama" => "Sugeng",
                "jk" => "L",
                "alamat" => "Jalan Depan",
                "tmp_lahir" => "Bandung",
                "tgl_lahir" => date_create(strtotime("2000-02-28")),
                "telepon" => "08123456789",
                "id_jurusan" => 1,
                "nilai" => 80,
            ]
            ]);
    }
}
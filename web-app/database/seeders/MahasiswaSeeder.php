<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Anton',
                'nim' => '1001',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama' => 'Budi',
                'nim' => '1002',
                'jurusan' => 'Informatika',
            ],
            [
                'nama' => 'Ani',
                'nim' => '1003',
                'jurusan' => 'Manajemen Informatika',
            ],
        ]);
    }
}

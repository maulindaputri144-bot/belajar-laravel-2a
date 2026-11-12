<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MahasiswaController extends Controller
{
    public function index(): View
    {
        $mahasiswa = [
            [
                'nama' => 'Anton',
                'kota' => 'Surabaya',
                'jenis_kelamin' => 'L',
            ],
            [
                'nama' => 'Budi',
                'kota' => 'Kediri',
                'jenis_kelamin' => 'L',
            ],
            [
                'nama' => 'Ani',
                'kota' => 'Malang',
                'jenis_kelamin' => 'P',
            ],
            [
                'nama' => 'Sinta',
                'kota' => 'Surabaya',
                'jenis_kelamin' => 'P',
            ],
        ];

        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }
}

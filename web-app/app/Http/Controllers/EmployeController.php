<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        $employes = Employe::all();

        return view('tampil_data', compact('employes'));
    }

    public function create()
    {
        $data['judul'] = 'Tambah data Pegawai';

        return view('tambah_data', $data);
    }

    public function store(Request $request)
    {
        $employe = new Employe();
        $employe->id = $request->id;
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();

        return redirect('/employe');
    }
}
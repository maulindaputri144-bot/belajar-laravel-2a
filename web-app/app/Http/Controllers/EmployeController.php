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

    public function show(Employe $employe)
    {
        $data['employe'] = $employe;

        return view('ubah_data', $data);
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

    public function update(Request $request, Employe $employe)
    {
        if (! $employe->exists) {
            $employe = Employe::findOrFail($request->id);
        }

        $employe->id = $request->id;
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();

        return redirect('/employe');
    }

    public function destroy(Employe $employe)
    {
        $employe->delete();

        return redirect('/employe');
    }
}

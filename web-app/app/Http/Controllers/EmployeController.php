<?php

namespace App\Http\Controllers;

use App\Models\Employe;

class EmployeController extends Controller
{
    public function index()
    {
        $employes = Employe::all();

        return view('tampil_data', compact('employes'));
    }
}
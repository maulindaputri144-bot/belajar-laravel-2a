<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function home()
    {
        return "Selamat Datang di Dashboard";
    }
}
<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function home()
    {
        $data['judul'] = 'Laman Home';
        $data['isi'] = 'Lorem ipsum dolor sit amet';

        return view('home', $data);
    }

    public function gallery()
    {
        $data['judul'] = 'Laman Gallery';

        return view('gallery', $data);
    }

    public function product()
    {
        $data['judul'] = 'Laman Product';

        return view('product', $data);
    }

    public function service()
    {
        $data['judul'] = 'Laman Service';

        return view('service', $data);
    }

    public function contact()
    {
        $data['judul'] = 'Laman Contact';

        return view('contact', $data);
    }

    public function about()
    {
        $data['judul'] = 'Laman About';

        return view('about', $data);
    }
}
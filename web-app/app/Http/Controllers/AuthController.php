<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function cek(Request $request)
    {
        $data = User::where('email', $request->email)->firstOrFail();

        if (Hash::check($request->password, $data->password)) {
            $request->session()->put('email', $data->email);
            $request->session()->put('logged_in', true);

            return redirect('/templating');
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/');
    }
}

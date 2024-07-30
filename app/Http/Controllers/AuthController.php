<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('Admin.Login.index');
    }

    public function loginProcess(Request $request)
    {
        $userid = request('userid');
        if (Str::contains($userid, '@')) {
            $field = 'email';
        } else {
           
            $field = 'username';
        }

        $credential = [
            $field => request('userid'),
            'password' => request('password')
        ];

        if (auth()->attempt($credential)) {
            $user = auth()->user();
            if ($user->type == 'ADMIN') {
                return redirect('/Dashboard')->with('success', 'Login Berhasil');
            } else {
                return redirect('Kepdes/beranda')->with('success', 'Login Berhasil');
            }
        } else {
            return redirect()->back()->with('error', 'Login Gagal, Silahkan Cek Email/Username dan Password');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }
}
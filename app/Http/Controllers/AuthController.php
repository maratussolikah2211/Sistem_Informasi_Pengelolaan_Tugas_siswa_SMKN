<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('login');
    }

    public function proses_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {

            $hakAkses = Auth::user()->role;
            if ($hakAkses == "guru") {
                return redirect('/admin/home')->with('success', 'Login berhasil');
            } elseif ($hakAkses == "admin") {
                return redirect('/admin/user')->with('success', 'Login berhasil');
            } else {
                return redirect('/login')->with('error', 'Akses tidak valid');
            }
        } 
        
        if (Auth::guard('siswa')->attempt($credentials)) {

            return redirect('/siswa/tugas')->with('success', 'Login berhasil');
        }

        return back()->with('danger', 'Login gagal, silahkan cek username dan password anda');
    }

}

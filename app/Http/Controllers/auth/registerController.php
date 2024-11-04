<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;

class registerController extends Controller
{
    public function index()
    {
        return view('auth.admin.register.index');
    }

    public function indexUser()
    {
        return view('auth.pegawai.register.index');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        $data = [
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ];

        // Simpan ke tabel users
        User::create($data);

        $login = [
            'email'    => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($login)) {
            return redirect()->route('login_user');
        } else {
            return redirect()->route('login_user')->with('failed', 'Email atau Password Salah');
        }
    }

    public function registerAdmin(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:admin,email',
            'password' => 'required'
        ]);

        $data = [
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ];

        // Simpan ke tabel admin
        Admin::create($data);

        $login = [
            'email'    => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($login)) {
            return redirect()->route('login_admin');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }
}

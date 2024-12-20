<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.admin.login.index');
    }

    public function indexUser()
    {
        return view('auth.pegawai.login.index');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'nip'       => 'required',
            'password'  => 'required',
        ]);
    
        $credentials = [
            'nip'       => $request->nip,
            'password'  => $request->password
        ];
    
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('monitoring');
        }
    
        return redirect()->route('login_user')->with('error', 'NIP atau Password Salah');
    }
    
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'nip'       => 'required',
            'password'  => 'required',
        ]);
    
        $credentials = [
            'nip'       => $request->nip,
            'password'  => $request->password
        ];
    
        if (Auth::guard('admin')->attempt($credentials)) {
            // Arahkan ke halaman dashboard admin
            return redirect()->route('dashboard_admin');
        }
    
        return redirect()->route('login_admin')->with('error', 'NIP atau Password Salah');
    }
    

    public function logout()
        {
            Auth::logout();
            return redirect()->route('home')->with('success', 'Kamu berhasil logout');
        }
}

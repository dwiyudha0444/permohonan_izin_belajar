<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class AkunController extends Controller
{
    public function indexAdmin()
    {
        $admin = Admin::all();
        return view('dashboard.admin.akun.admin.index', compact('admin'));
    }

    public function indexUser()
    {
        $user = User::all();
        return view('dashboard.admin.akun.user.index', compact('user'));
    }

    public function destroyAdmin($id)
    {
        // Cari data admin berdasarkan ID
        $admin = Admin::findOrFail($id);

        // Hapus data admin
        $admin->delete();

        // Redirect atau response
        return redirect()->route('akun_admin')->with('success', 'Data admin berhasil dihapus.');
    }

    public function destroyUser($id)
    {
        // Cari data admin berdasarkan ID
        $user = User::findOrFail($id);

        // Hapus data admin
        $user->delete();

        // Redirect atau response
        return redirect()->route('akun_pegawai')->with('success', 'Data user berhasil dihapus.');
    }

    public function showAdmin($id)
    {
        $admin = Admin::findOrFail($id);

        return view('dashboard.admin.akun.admin.show', compact('admin'));
    }

    public function showPegawai($id)
    {
        $user = User::findOrFail($id);

        return view('dashboard.admin.akun.user.show', compact('user'));
    }
}

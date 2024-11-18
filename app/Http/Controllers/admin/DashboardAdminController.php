<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Berkas;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardAdminController extends Controller
{
    public function index()
    {
        // Hitung total user
        $totalUsers = User::count();
        // Hitung total berkas dengan status 'terverifikasi'
        $totalBerkasTerverifikasi = Berkas::where('status', 'terverifikasi')->count();
        $totalBerkasProses = Berkas::where('status', 'proses')->count();
        $totalBerkasRevisi = Berkas::where('status', 'revisi')->count();
        // Kirim data total user ke view
        return view('dashboard.admin.index', compact('totalUsers', 'totalBerkasTerverifikasi','totalBerkasProses','totalBerkasRevisi'));
    }
}

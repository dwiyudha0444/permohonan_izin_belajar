<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berkas;

class PermohonanController extends Controller
{
    public function index()
    {
        $admin = Berkas::all();
        return view('dashboard.admin.akun.index', compact('admin'));
    }
}

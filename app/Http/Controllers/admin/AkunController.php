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
        return view('dashboard.admin.akun.index', compact('admin'));
    }
}

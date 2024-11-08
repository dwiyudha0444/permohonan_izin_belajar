<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Berkas;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index()
    {
        $berkas = Berkas::all();
        return view('dashboard.user.berkas.index', compact('berkas'));
    }
}

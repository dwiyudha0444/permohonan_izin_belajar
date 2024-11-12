<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('dashboard.user.profil.index', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('dashboard.user.profil.form_edit', compact('user'));
    }

    public function update($id)
    {
    }

}

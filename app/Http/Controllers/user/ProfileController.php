<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function update(Request $request, $id)
    {
        // Validasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'nip' => 'required|string|unique:users,nip,' . $id,
            'tgl_lahir' => 'nullable|date',
            'pangkat' => 'nullable|string|max:255',
            'tmt' => 'nullable|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'lokasi_bekerja' => 'nullable|string|max:255',
            'jejang_pendidikan' => 'nullable|string|max:255',
            'lulus_pendidikan' => 'nullable|string|max:255',
            'tugas_pekerjaan' => 'nullable|string|max:255',
        ]);
    
        // Cari data user dengan model Eloquent
        $user = User::findOrFail($id);
    
        // Update data
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'nip' => $request->nip,
            'tgl_lahir' => $request->tgl_lahir,
            'pangkat' => $request->pangkat,
            'tmt' => $request->tmt,
            'jabatan' => $request->jabatan,
            'lokasi_bekerja' => $request->lokasi_bekerja,
            'jejang_pendidikan' => $request->jejang_pendidikan,
            'lulus_pendidikan' => $request->lulus_pendidikan,
            'tugas_pekerjaan' => $request->tugas_pekerjaan,
            'updated_at' => now(),
        ]);
    
        return redirect()->route('upload_berkas')
            ->with('success', 'Data Berhasil Diperbarui');
    }
    
    

}

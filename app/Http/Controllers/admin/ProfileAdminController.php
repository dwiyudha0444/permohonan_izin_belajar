<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileAdminController extends Controller
{
    public function index()
    {
        $Admin = Admin::all();
        return view('dashboard.admin.profil.index', compact('Admin'));
    }

    public function edit($id)
    {
        $Admin = Admin::findOrFail($id);

        return view('dashboard.admin.profil.edit', compact('Admin'));
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
    
        // Cari data Admin dengan model Eloquent
        $Admin = Admin::findOrFail($id);
    
        // Update data
        $Admin->update([
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
    
        return redirect()->route('profile_admin')
            ->with('success', 'Data Berhasil Diperbarui');
    }
    
}

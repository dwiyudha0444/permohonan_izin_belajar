<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berkas;
use Illuminate\Support\Facades\DB;

class PermohonanController extends Controller
{
    public function index()
    {
        $berkas = Berkas::all();
        return view('dashboard.admin.permohonan_izin_belajar.index', compact('berkas'));
    }

    public function edit($id)
    {
        $berkas = Berkas::findOrFail($id);
    
        return view('dashboard.admin.permohonan_izin_belajar.form_edit', compact('berkas'));
    }

    public function show($id)
    {
        $berkas = Berkas::findOrFail($id);

        return view('dashboard.admin.permohonan_izin_belajar.show', compact('berkas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_users' => 'required',
            'jadwal_pendidikan' => 'required',
            'status' => 'required',
            'keterangan' => 'nullable',
        ]);
    
        // Temukan data yang akan diupdate
        $berkas = DB::table('berkas')->where('id', $id)->first();
    
        // Variabel untuk menyimpan nama file baru, tapi tetap mempertahankan yang lama
        $ijazahFile = $berkas->ijazah;
        $transkipFile = $berkas->transkip_nilai;
        $prestasiFile = $berkas->penilaian_prestasi_kerja;
    
        // Update data ke tabel 'berkas' tanpa mengubah file
        DB::table('berkas')->where('id', $id)->update([
            'id_users' => $request->id_users,
            'ijazah' => $ijazahFile,
            'transkip_nilai' => $transkipFile,
            'penilaian_prestasi_kerja' => $prestasiFile,
            'jadwal_pendidikan' => $request->jadwal_pendidikan,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'updated_at' => now(),
        ]);
    
        return redirect()->route('permohonan_izin_belajar')
            ->with('success', 'Data Berhasil Diperbarui');
    }
    

}

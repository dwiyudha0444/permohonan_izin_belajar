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

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_users' => 'required',
            'ijazah' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'transkip_nilai' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'penilaian_prestasi_kerja' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'jadwal_pendidikan' => 'required',
            'status' => 'required',
        ]);

        // Temukan data yang akan diupdate
        $berkas = DB::table('berkas')->where('id', $id)->first();

        // Variabel untuk menyimpan nama file baru
        $ijazahFile = $berkas->ijazah;
        $transkipFile = $berkas->transkip_nilai;
        $prestasiFile = $berkas->penilaian_prestasi_kerja;

        // Proses update file ijazah jika ada
        if ($request->hasFile('ijazah')) {
            if ($ijazahFile && file_exists(public_path('berkas/assets/ijazah/' . $ijazahFile))) {
                unlink(public_path('berkas/assets/ijazah/' . $ijazahFile));
            }
            $ijazahFile = 'ijazah_' . time() . '.' . $request->ijazah->extension();
            $request->ijazah->move(public_path('berkas/assets/ijazah'), $ijazahFile);
        }

        // Proses update file transkip nilai jika ada
        if ($request->hasFile('transkip_nilai')) {
            if ($transkipFile && file_exists(public_path('berkas/assets/transkip_nilai/' . $transkipFile))) {
                unlink(public_path('berkas/assets/transkip_nilai/' . $transkipFile));
            }
            $transkipFile = 'transkip_nilai_' . time() . '.' . $request->transkip_nilai->extension();
            $request->transkip_nilai->move(public_path('berkas/assets/transkip_nilai'), $transkipFile);
        }

        // Proses update file penilaian prestasi kerja jika ada
        if ($request->hasFile('penilaian_prestasi_kerja')) {
            if ($prestasiFile && file_exists(public_path('berkas/assets/penilaian_prestasi_kerja/' . $prestasiFile))) {
                unlink(public_path('berkas/assets/penilaian_prestasi_kerja/' . $prestasiFile));
            }
            $prestasiFile = 'penilaian_prestasi_kerja_' . time() . '.' . $request->penilaian_prestasi_kerja->extension();
            $request->penilaian_prestasi_kerja->move(public_path('berkas/assets/penilaian_prestasi_kerja'), $prestasiFile);
        }

        // Update data ke tabel 'berkas'
        DB::table('berkas')->where('id', $id)->update([
            'id_users' => $request->id_users,
            'ijazah' => $ijazahFile,
            'transkip_nilai' => $transkipFile,
            'penilaian_prestasi_kerja' => $prestasiFile,
            'jadwal_pendidikan' => $request->jadwal_pendidikan,
            'status' => $request->status,
            'updated_at' => now(),
        ]);

        return redirect()->route('permohonan_izin_belajar')
            ->with('success', 'Data Berhasil Diperbarui');
    }

}

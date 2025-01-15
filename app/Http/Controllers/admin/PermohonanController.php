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
        $berkas = Berkas::orderBy('created_at', 'desc')->get();
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
            'status' => 'required',
            'keterangan' => 'nullable',
        ]);

        // Temukan data yang akan diupdate
        $berkas = DB::table('berkas')->where('id', $id)->first();

        // Cek apakah data ditemukan
        if (!$berkas) {
            return redirect()->route('permohonan_izin_belajar')
                ->with('error', 'Data tidak ditemukan.');
        }

        // Variabel untuk menyimpan nama file baru atau mempertahankan yang lama
        $ijazahFile = $berkas->ijazah;
        $transkipFile = $berkas->transkip_nilai;
        $prestasiFile = $berkas->penilaian_prestasi_kerja;
        $jdwlFile = $berkas->jadwal_pendidikan;
        $suratPersetujuanFile = $berkas->surat_persetujuan;

        // Proses file surat persetujuan
        if ($request->hasFile('surat_persetujuan')) {
            // Hapus file lama jika ada
            if ($suratPersetujuanFile && file_exists(public_path('berkas/assets/surat_persetujuan/' . $suratPersetujuanFile))) {
                unlink(public_path('berkas/assets/surat_persetujuan/' . $suratPersetujuanFile));
            }

            // Simpan file baru
            $suratPersetujuanFile = 'surat_persetujuan_' . time() . '.' . $request->surat_persetujuan->extension();
            $request->surat_persetujuan->move(public_path('berkas/assets/surat_persetujuan'), $suratPersetujuanFile);
        }

        // Update data ke tabel 'berkas'
        DB::table('berkas')->where('id', $id)->update([
            'id_users' => $request->id_users,
            'ijazah' => $ijazahFile,
            'transkip_nilai' => $transkipFile,
            'penilaian_prestasi_kerja' => $prestasiFile,
            'jadwal_pendidikan' => $jdwlFile,
            'surat_persetujuan' => $suratPersetujuanFile,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'updated_at' => now(),
        ]);

        return redirect()->route('permohonan_izin_belajar')
            ->with('success', 'Data Berhasil Diperbarui');
    }
}

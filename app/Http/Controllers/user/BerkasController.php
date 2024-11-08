<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Berkas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerkasController extends Controller
{
    public function index()
    {
        $berkas = Berkas::all();
        return view('dashboard.user.berkas.index', compact('berkas'));
    }

    public function edit()
    {
        return view('dashboard.user.berkas.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_users' => 'required',
            'ijazah' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'transkip_nilai' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'penilaian_prestasi_kerja' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'jadwal_pendidikan' => 'required',
        ]);

        // Variabel untuk menyimpan nama file
        $ijazahFile = '';
        $transkipFile = '';
        $prestasiFile = '';

        // Proses upload file ijazah jika ada
        if (!empty($request->ijazah)) {
            $ijazahFile = 'ijazah_' . time() . '.' . $request->ijazah->extension();
            $request->ijazah->move(public_path('berkas/assets/ijazah'), $ijazahFile);
        }

        // Proses upload file transkip nilai jika ada
        if (!empty($request->transkip_nilai)) {
            $transkipFile = 'transkip_nilai_' . time() . '.' . $request->transkip_nilai->extension();
            $request->transkip_nilai->move(public_path('berkas/assets/transkip_nilai'), $transkipFile);
        }

        // Proses upload file penilaian prestasi kerja jika ada
        if (!empty($request->penilaian_prestasi_kerja)) {
            $prestasiFile = 'penilaian_prestasi_' . time() . '.' . $request->penilaian_prestasi_kerja->extension();
            $request->penilaian_prestasi_kerja->move(public_path('berkas/assets/penilaian_prestasi_kerja'), $prestasiFile);
        }

        // Insert data ke tabel 'berkas'
        DB::table('berkas')->insert([
            'id_users' => $request->id_users,
            'ijazah' => $ijazahFile,
            'transkip_nilai' => $transkipFile,
            'penilaian_prestasi_kerja' => $prestasiFile,
            'jadwal_pendidikan' => $request->jadwal_pendidikan,
            'created_at' => now(),
        ]);

        return redirect()->route('upload_berkas')
            ->with('success', 'Data Berhasil Disimpan');
    }
}

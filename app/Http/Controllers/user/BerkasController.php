<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Berkas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BerkasController extends Controller
{
    public function index()
    {
        // Ambil ID pengguna yang sedang login
        $userId = Auth::id();

        // Ambil data 'Berkas' yang sesuai dengan ID pengguna
        $berkas = Berkas::where('id_users', $userId)->get();

        // Kirim data ke view
        return view('dashboard.user.berkas.index', compact('berkas'));
    }

    public function create()
    {
        return view('dashboard.user.berkas.form');
    }

    public function edit($id)
    {
        $berkas = Berkas::findOrFail($id);

        return view('dashboard.user.berkas.form_edit', compact('berkas'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_users' => 'required',
            'ijazah' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'transkip_nilai' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'penilaian_prestasi_kerja' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'jadwal_pendidikan' => 'required',
            'peguruan_tinggi' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'status' => 'required',
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
            'peguruan_tinggi' => $request->peguruan_tinggi,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'created_at' => now(),
        ]);

        return redirect()->route('upload_berkas')
            ->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_users' => 'required',
            'ijazah' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'transkip_nilai' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'penilaian_prestasi_kerja' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'jadwal_pendidikan' => 'required',
            'peguruan_tinggi' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
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
            'peguruan_tinggi' => $request->peguruan_tinggi,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'updated_at' => now(),
        ]);

        return redirect()->route('upload_berkas')
            ->with('success', 'Data Berhasil Diperbarui');
    }


    public function destroy($id)
    {
        // Cari data berkas berdasarkan ID
        $berkas = Berkas::findOrFail($id);

        // Hapus file dari direktori publik jika file ada
        if ($berkas->ijazah && file_exists(public_path('berkas/assets/ijazah/' . $berkas->ijazah))) {
            unlink(public_path('berkas/assets/ijazah/' . $berkas->ijazah));
        }

        if ($berkas->transkip_nilai && file_exists(public_path('berkas/assets/transkip_nilai/' . $berkas->transkip_nilai))) {
            unlink(public_path('berkas/assets/transkip_nilai/' . $berkas->transkip_nilai));
        }

        if ($berkas->penilaian_prestasi_kerja && file_exists(public_path('berkas/assets/penilaian_prestasi_kerja/' . $berkas->penilaian_prestasi_kerja))) {
            unlink(public_path('berkas/assets/penilaian_prestasi_kerja/' . $berkas->penilaian_prestasi_kerja));
        }

        // Hapus data dari database
        $berkas->delete();

        // Redirect atau response
        return redirect()->route('upload_berkas')->with('success', 'Data berkas berhasil dihapus.');
    }
}

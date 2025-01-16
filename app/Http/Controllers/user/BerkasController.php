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

    public function show($id)
    {
        $berkas = Berkas::findOrFail($id);

        return view('dashboard.user.berkas.show', compact('berkas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_users' => 'required',
            'ijazah' => 'required|mimes:pdf,jpg,jpeg,png,gif,svg|max:2048',
            'transkip_nilai' => 'required|mimes:pdf,jpg,jpeg,png,gif,svg|max:2048',
            'penilaian_prestasi_kerja' => 'required|mimes:pdf,jpg,jpeg,png,gif,svg|max:2048',
            'jadwal_pendidikan' => 'required|mimes:pdf,jpg,jpeg,png,gif,svg|max:2048',
            'peguruan_tinggi' => 'required',
            'tgl_ajuan' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ]);

        // Variabel untuk menyimpan nama file
        $ijazahFile = '';
        $transkipFile = '';
        $prestasiFile = '';
        $jdwlFile = '';

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

        // Proses upload file jadwal jika ada
        if (!empty($request->jadwal_pendidikan)) {
            $jdwlFile = 'jadwal_' . time() . '.' . $request->jadwal_pendidikan->extension();
            $request->jadwal_pendidikan->move(public_path('berkas/assets/jadwal_pendidikan'), $jdwlFile);
        }

        // Insert data ke tabel 'berkas'
        DB::table('berkas')->insert([
            'id_users' => $request->id_users,
            'ijazah' => $ijazahFile,
            'transkip_nilai' => $transkipFile,
            'penilaian_prestasi_kerja' => $prestasiFile,
            'jadwal_pendidikan' => $jdwlFile,
            'peguruan_tinggi' => $request->peguruan_tinggi,
            'jurusan' => $request->jurusan,
            'tgl_ajuan' => $request->tgl_ajuan,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'created_at' => now(),
        ]);

        return redirect()->route('upload_berkas')
            ->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'id_users' => 'required',
            'ijazah' => 'mimes:pdf,jpg,jpeg,png,gif,svg|max:2048',
            'transkip_nilai' => 'mimes:pdf,jpg,jpeg,png,gif,svg|max:2048',
            'penilaian_prestasi_kerja' => 'mimes:pdf,jpg,jpeg,png,gif,svg|max:2048',
            'jadwal_pendidikan' => 'mimes:pdf,jpg,jpeg,png,gif,svg|max:2048',
            'peguruan_tinggi' => 'required',
            'tgl_ajuan' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ]);
    
        // Ambil data berkas lama
        $berkas = DB::table('berkas')->where('id', $id)->first();
    
        // Fungsi untuk menangani file upload
        $processFile = function ($request, $field, $oldFilePath, $folder) {
            if ($request->hasFile($field)) {
                if ($oldFilePath && file_exists(public_path("berkas/assets/$folder/" . $oldFilePath))) {
                    unlink(public_path("berkas/assets/$folder/" . $oldFilePath));
                }
                $newFileName = $field . '_' . time() . '.' . $request->file($field)->extension();
                $request->file($field)->move(public_path("berkas/assets/$folder"), $newFileName);
                return $newFileName;
            }
            return $oldFilePath; // Gunakan file lama jika tidak ada file baru
        };
    
        // Proses masing-masing file
        $ijazahFile = $processFile($request, 'ijazah', $berkas->ijazah, 'ijazah');
        $transkipFile = $processFile($request, 'transkip_nilai', $berkas->transkip_nilai, 'transkip_nilai');
        $prestasiFile = $processFile($request, 'penilaian_prestasi_kerja', $berkas->penilaian_prestasi_kerja, 'penilaian_prestasi_kerja');
        $jadwalFile = $processFile($request, 'jadwal_pendidikan', $berkas->jadwal_pendidikan, 'jadwal_pendidikan');
    
        // Update data ke tabel 'berkas'
        DB::table('berkas')->where('id', $id)->update([
            'id_users' => $request->id_users,
            'ijazah' => $ijazahFile,
            'transkip_nilai' => $transkipFile,
            'penilaian_prestasi_kerja' => $prestasiFile,
            'jadwal_pendidikan' => $jadwalFile,
            'peguruan_tinggi' => $request->peguruan_tinggi,
            'jurusan' => $request->jurusan,
            'tgl_ajuan' => $request->tgl_ajuan,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'updated_at' => now(),
        ]);
    
        return redirect()->route('upload_berkas')->with('success', 'Data Berhasil Diperbarui');
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

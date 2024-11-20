<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OPD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OPDController extends Controller
{
    public function index()
    {
        $opd = OPD::all();
        return view('dashboard.admin.opd.opd', compact('opd'));
    }

    public function create()
    {
        return view('dashboard.admin.opd.form');
    }

    public function destroy($id)
    {
        // Cari data opd berdasarkan ID
        $opd = OPD::findOrFail($id);

        // Hapus data dari database
        $opd->delete();

        // Redirect atau response
        return redirect()->route('opd_admin')->with('success', 'Data opd berhasil dihapus.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'opd' => 'required',
        ]);

        // Insert data ke tabel 'berkas'
        DB::table('tbopd')->insert([
            'opd' => $request->opd,
            'created_at' => now(),
        ]);

        return redirect()->route('opd_admin')
            ->with('success', 'Data Berhasil Disimpan');
    }
}

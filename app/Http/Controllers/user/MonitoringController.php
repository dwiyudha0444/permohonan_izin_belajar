<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Monitoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonitoringController extends Controller
{
    public function index()
    {
        $monitoring = Monitoring::all();
        return view('dashboard.user.monitoring.index', compact('monitoring'));
    }

    public function create()
    {
        return view('dashboard.user.monitoring.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_users' => 'required',
            'transkip_nilai_1' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'transkip_nilai_2' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'transkip_nilai_3' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'transkip_nilai_4' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'ptn' => 'required',
        ]);

        // Variabel untuk menyimpan nama file
        $transkipFile1 = '';
        $transkipFile2 = '';
        $transkipFile3 = '';
        $transkipFile4 = '';

        // Proses upload file transkip_nilai_1 jika ada
        if (!empty($request->transkip_nilai_1)) {
            $transkipFile1 = 'transkip_nilai_1_' . time() . '.' . $request->transkip_nilai_1->extension();
            $request->transkip_nilai_1->move(public_path('berkas/assets/transkip_nilai_1'), $transkipFile1);
        }

        // Proses upload file transkip_nilai_2 jika ada
        if (!empty($request->transkip_nilai_2)) {
            $transkipFile2 = 'transkip_nilai_2_' . time() . '.' . $request->transkip_nilai_2->extension();
            $request->transkip_nilai_2->move(public_path('berkas/assets/transkip_nilai_2'), $transkipFile2);
        }

        // Proses upload file transkip_nilai_3 jika ada
        if (!empty($request->transkip_nilai_3)) {
            $transkipFile3 = 'transkip_nilai_3_' . time() . '.' . $request->transkip_nilai_3->extension();
            $request->transkip_nilai_3->move(public_path('berkas/assets/transkip_nilai_3'), $transkipFile3);
        }

        // Proses upload file transkip_nilai_4 jika ada
        if (!empty($request->transkip_nilai_4)) {
            $transkipFile4 = 'transkip_nilai_4_' . time() . '.' . $request->transkip_nilai_4->extension();
            $request->transkip_nilai_4->move(public_path('berkas/assets/transkip_nilai_4'), $transkipFile4);
        }

        // Insert data ke tabel 'berkas'
        DB::table('monitoring')->insert([
            'id_users' => $request->id_users,
            'transkip_nilai_1' => $transkipFile1,
            'transkip_nilai_2' => $transkipFile2,
            'transkip_nilai_3' => $transkipFile3,
            'transkip_nilai_4' => $transkipFile4,
            'ptn' => $request->ptn,
            'created_at' => now(),
        ]);

        return redirect()->route('monitoring')
            ->with('success', 'Data Berhasil Disimpan');
    }
}

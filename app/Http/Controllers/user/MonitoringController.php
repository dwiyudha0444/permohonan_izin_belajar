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

    public function edit($id)
    {
        $monitoring = Monitoring::findOrFail($id);

        return view('dashboard.user.monitoring.form_edit', compact('monitoring'));
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
            $request->transkip_nilai_1->move(public_path('monitoring/assets/transkip_nilai_1'), $transkipFile1);
        }

        // Proses upload file transkip_nilai_2 jika ada
        if (!empty($request->transkip_nilai_2)) {
            $transkipFile2 = 'transkip_nilai_2_' . time() . '.' . $request->transkip_nilai_2->extension();
            $request->transkip_nilai_2->move(public_path('monitoring/assets/transkip_nilai_2'), $transkipFile2);
        }

        // Proses upload file transkip_nilai_3 jika ada
        if (!empty($request->transkip_nilai_3)) {
            $transkipFile3 = 'transkip_nilai_3_' . time() . '.' . $request->transkip_nilai_3->extension();
            $request->transkip_nilai_3->move(public_path('monitoring/assets/transkip_nilai_3'), $transkipFile3);
        }

        // Proses upload file transkip_nilai_4 jika ada
        if (!empty($request->transkip_nilai_4)) {
            $transkipFile4 = 'transkip_nilai_4_' . time() . '.' . $request->transkip_nilai_4->extension();
            $request->transkip_nilai_4->move(public_path('monitoring/assets/transkip_nilai_4'), $transkipFile4);
        }

        // Insert data ke tabel 'monitoring'
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_users' => 'required',
            'transkip_nilai_1' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'transkip_nilai_2' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'transkip_nilai_3' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'transkip_nilai_4' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
            'ptn' => 'required',
        ]);

        // Ambil data lama dari database
        $monitoring = DB::table('monitoring')->where('id', $id)->first();

        // Variabel untuk menyimpan nama file (gunakan data lama jika tidak ada file baru)
        $transkipFile1 = $monitoring->transkip_nilai_1;
        $transkipFile2 = $monitoring->transkip_nilai_2;
        $transkipFile3 = $monitoring->transkip_nilai_3;
        $transkipFile4 = $monitoring->transkip_nilai_4;

        // Proses upload file transkip_nilai_1 jika ada file baru
        if (!empty($request->transkip_nilai_1)) {
            $transkipFile1 = 'transkip_nilai_1_' . time() . '.' . $request->transkip_nilai_1->extension();
            $request->transkip_nilai_1->move(public_path('monitoring/assets/transkip_nilai_1'), $transkipFile1);
        }

        // Proses upload file transkip_nilai_2 jika ada file baru
        if (!empty($request->transkip_nilai_2)) {
            $transkipFile2 = 'transkip_nilai_2_' . time() . '.' . $request->transkip_nilai_2->extension();
            $request->transkip_nilai_2->move(public_path('monitoring/assets/transkip_nilai_2'), $transkipFile2);
        }

        // Proses upload file transkip_nilai_3 jika ada file baru
        if (!empty($request->transkip_nilai_3)) {
            $transkipFile3 = 'transkip_nilai_3_' . time() . '.' . $request->transkip_nilai_3->extension();
            $request->transkip_nilai_3->move(public_path('monitoring/assets/transkip_nilai_3'), $transkipFile3);
        }

        // Proses upload file transkip_nilai_4 jika ada file baru
        if (!empty($request->transkip_nilai_4)) {
            $transkipFile4 = 'transkip_nilai_4_' . time() . '.' . $request->transkip_nilai_4->extension();
            $request->transkip_nilai_4->move(public_path('monitoring/assets/transkip_nilai_4'), $transkipFile4);
        }

        // Update data ke tabel 'monitoring'
        DB::table('monitoring')->where('id', $id)->update([
            'id_users' => $request->id_users,
            'transkip_nilai_1' => $transkipFile1,
            'transkip_nilai_2' => $transkipFile2,
            'transkip_nilai_3' => $transkipFile3,
            'transkip_nilai_4' => $transkipFile4,
            'ptn' => $request->ptn,
            'updated_at' => now(),
        ]);

        return redirect()->route('monitoring')
            ->with('success', 'Data Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        // Find the monitoring data by ID
        $monitoring = Monitoring::findOrFail($id);
    
        // Delete file for transkip_nilai_1 if it exists
        if ($monitoring->transkip_nilai_1 && file_exists(public_path('monitoring/assets/transkip_nilai_1/' . $monitoring->transkip_nilai_1))) {
            unlink(public_path('monitoring/assets/transkip_nilai_1/' . $monitoring->transkip_nilai_1));
        }
    
        // Delete file for transkip_nilai_2 if it exists
        if ($monitoring->transkip_nilai_2 && file_exists(public_path('monitoring/assets/transkip_nilai_2/' . $monitoring->transkip_nilai_2))) {
            unlink(public_path('monitoring/assets/transkip_nilai_2/' . $monitoring->transkip_nilai_2));
        }
    
        // Delete file for transkip_nilai_3 if it exists
        if ($monitoring->transkip_nilai_3 && file_exists(public_path('monitoring/assets/transkip_nilai_3/' . $monitoring->transkip_nilai_3))) {
            unlink(public_path('monitoring/assets/transkip_nilai_3/' . $monitoring->transkip_nilai_3));
        }
    
        // Delete file for transkip_nilai_4 if it exists
        if ($monitoring->transkip_nilai_4 && file_exists(public_path('monitoring/assets/transkip_nilai_4/' . $monitoring->transkip_nilai_4))) {
            unlink(public_path('monitoring/assets/transkip_nilai_4/' . $monitoring->transkip_nilai_4));
        }
    
        // Delete data from database
        $monitoring->delete();
    
        // Redirect or response
        return redirect()->route('monitoring')->with('success', 'Data monitoring berhasil dihapus.');
    }
    
}

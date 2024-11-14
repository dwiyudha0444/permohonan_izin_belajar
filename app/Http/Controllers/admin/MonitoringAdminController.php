<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Monitoring;
use Illuminate\Http\Request;

class MonitoringAdminController extends Controller
{
    public function index()
    {
        $monitoring = Monitoring::all();
        return view('dashboard.admin.monitoring.index', compact('monitoring'));
    }

    public function edit($id)
    {
        $monitoring = Monitoring::findOrFail($id);

        return view('dashboard.admin.monitoring.show', compact('monitoring'));
    }
}

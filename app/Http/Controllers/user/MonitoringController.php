<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Monitoring;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        $monitoring = Monitoring::all();
        return view('dashboard.user.monitoring.index', compact('monitoring'));
    }
}

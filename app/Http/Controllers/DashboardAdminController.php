<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function dashboard()
    {
        $total_laporan = Laporan::count();
        $pending = Laporan::where('status', 'pending')->count();
        $proses = Laporan::where('status', 'diproses')->count();
        $ditolak = Laporan::where('status', 'ditolak')->count();
        return view('dashboard', compact('total_laporan', 'pending', 'proses', 'ditolak'));
    }
}

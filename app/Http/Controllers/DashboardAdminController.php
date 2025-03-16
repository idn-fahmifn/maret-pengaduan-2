<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function dashboard()
    {
        $total_laporan = Laporan::count();
        return view('dashboard', compact('total_laporan'));
    }
}

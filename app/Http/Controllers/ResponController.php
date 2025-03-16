<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class ResponController extends Controller
{
    public function index()
    {
        $data = Laporan::all();
        return view('respon.index', compact('data'));
    }

    public function detail($id)
    {
        $data = Laporan::findOrFail($id);
        return view('respon.detail', compact('data'));
    }

    public function respon($id)
    {
        $data = Laporan::findOrFail($id);
        return view('respon.respon', compact('data'));
    }
}

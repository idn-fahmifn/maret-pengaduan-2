<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Respon;
use Carbon\Carbon;
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
    public function store(Request $request, $id)
    {
        $request->validate([
            'judul_respon' => ['required', 'string', 'min:5', 'max:50'],
            'isi_respon' => ['required'],
        ]);
        $data = Laporan::findOrFail($id);
        Respon::create([
            'id_laporan' => $id,
            'judul_respon' => $request->judul_respon,
            'isi_respon' => $request->isi_respon,
            'tanggal_respon' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $data->status = $request->status;
        $data->save();
        return redirect()->route('respon.detail', $id)->with('success','Respon berhasil ditambahkan.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Respon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function index()
    {
        $data = Laporan::where('id_user', Auth::user()->id)->get()->all();
        return view('user.laporan.index', compact('data'));
    }
    public function create()
    {
        return view('user.laporan.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'judul_laporan' => ['required', 'string', 'min:5', 'max:50'],
            'jenis' => ['required'],
            'dokumentasi' => ['required', 'file', 'max:10240'],
            'detail_laporan' => ['required'],
        ]);

        if( $request->hasFile('dokumentasi'))
        {
            $img = $request->file('dokumentasi');
            $path = 'public/images/laporan/';
            $ext = $img->getClientOriginalExtension();
            $name = 'dokumentasi_laporan_'.Carbon::now()->format('YmdHis').'.'.$ext;
            $img->storeAs($path, $name);
            $input['dokumentasi'] = $name;
        }

        $input['tanggal_laporan'] = Carbon::now()->format('Y-m-d H:i:s');
        $input['id_user'] = Auth::user()->id;
        Laporan::create($input);
        return redirect()->route('laporan.index')->with('success','Laporan berhasil dibuat');
    }

    public function detail($id)
    {
        $data = Laporan::findOrFail($id);
        $respon = Respon::where('id_laporan', $id)->get()->all();
        return view('user.laporan.detail', compact('data', 'respon'));
    }
    public function edit($id)
    {
        $data = Laporan::findOrFail($id);
        return view('user.laporan.edit', compact('data'));
    }
    public function update(Request $request,$id)
    {
        $data = Laporan::findOrFail($id);
        $input = $request->all();

        $request->validate([
            'judul_laporan' => ['required', 'string', 'min:5', 'max:50'],
            'jenis' => ['required'],
            'dokumentasi' => ['file', 'max:10240'],
            'detail_laporan' => ['required'],
        ]);

        if( $request->hasFile('dokumentasi'))
        {
            $img = $request->file('dokumentasi');
            $path = 'public/images/laporan/';
            $ext = $img->getClientOriginalExtension();
            $name = 'dokumentasi_laporan_'.Carbon::now()->format('YmdHis').'.'.$ext;
            $img->storeAs($path, $name);
            $input['dokumentasi'] = $name;
            Storage::delete('public/images/laporan/'. $data->dokumentasi);
        }
        $data->update($input);
        return redirect()->route('laporan.detail',$id)->with('success','Data laporan berhasil diubah.');
    }
    public function delete($id)
    {
        $data = Laporan::findOrFail($id);
        Storage::delete('public/images/laporan/'. $data->dokumentasi);
        $data->delete();
        return redirect()->route('laporan.index')->with('success', 'Data berhasil dihapus');
    }
}

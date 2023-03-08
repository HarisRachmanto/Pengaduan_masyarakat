<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanggapanDashboardController extends Controller
{
    public function index($id_pengaduan)
    {
        
        $data = Pengaduan::findOrFail($id_pengaduan);
        return view('petugasdashboard.pengaduan.tanggapan', compact('data'));
    }

    public function store(Request $request, $id_pengaduan)
    {
        $data = Pengaduan::findOrFail($id_pengaduan);
        $validate = $request->all();
        $validate = $request->validate([
           'tgl_tanggapan' => 'required',
           'tanggapan' => 'required'

        ]);
        Tanggapan::create([
            'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'id_pengaduan' => $request->id_pengaduan,
            'id_petugas' => Auth::guard('petugas')->user()->id_petugas
        ]);
        $data = Pengaduan::findOrFail($id_pengaduan);
        $pengaduan['status'] = 'selesai';
        $data->update($pengaduan);
        return redirect()->route('DashboardPengaduan')->with('sukses','Data berhasil di kirim');
    }
}
?>
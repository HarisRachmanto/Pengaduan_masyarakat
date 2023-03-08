<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    public function index()
    {
        // dd(Auth::check());
        return view('masyarakat.form_masyarakat');
    }

    public function store(Request $request)
    {
        $validate = $request->all();
        $validate = $request->validate([
        'tgl_pengaduan' => 'required',
        'nik' => 'required',
        'isi_laporan' => 'required',
        'foto' => 'required'
        ]);
        if ($request->file('foto')){
            $validate['foto'] = $request->file('foto')->store('pengaduan-img');
        }
        Pengaduan::create($validate);
        return redirect()->route('aduanmasyarakat')->with('sukses','Data berhasil di kirim');
    }

    public function update($id)
    {
        $data = Pengaduan::findOrFail($id);
        if ($data->status == 0) {
            $status = 'proses';
        } else {
            $status = 'proses';
        }

        $data = Pengaduan::where('id_pengaduan', $id)->update(['status' => $status]);
        return redirect()->route('DashboardPengaduan');
    } 

    public function destroy($id)
    {
        $validate = Pengaduan::findOrFail($id);
        $validate->delete();

        return redirect()->route('DashboardPengaduan');
    }

    
}

?>

<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DashboardPengaduanController extends Controller
{
    public function index(){
        $data = Pengaduan::latest()->get();
        return view ('petugasdashboard.pengaduan.index', compact('data'));
    }

    public function destroy($id)
    {
        $validate = Pengaduan::findOrFail($id);
        $validate->delete();

        return redirect()->route('DashboardPengaduan');
    }

    public function cetak($id_pengaduan)
    {
        $data = Pengaduan::with('tanggapan')->where('id_pengaduan', $id_pengaduan)->get();
 
    	$pdf = pdf::loadview('petugasdashboard.pengaduan.cetak', compact('data'))->setOptions(['enable_php', true, 'dpi' => 150, 'defaultFont' => 'sans-serif']);
    	return $pdf->download('');
    }
}
?>

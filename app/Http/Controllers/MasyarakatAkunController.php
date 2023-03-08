<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatAkunController extends Controller
{
    public function index(){
        $data = Masyarakat::latest()->get();
        return view('petugasdashboard.Masyarakat.index', compact('data'));
    }

    public function destroy($id)
    {
        $validate = Masyarakat::findOrFail($id);
        $validate->delete();

        return redirect()->route('akunmasyarakat');
    }
}

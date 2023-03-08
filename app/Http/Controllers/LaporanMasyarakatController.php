<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanMasyarakatController extends Controller
{
    public function index()
    {
        $data = Pengaduan::where('nik', Auth::user()->nik)->latest()->get();
        return view('masyarakat.history', compact('data'));
    }
}

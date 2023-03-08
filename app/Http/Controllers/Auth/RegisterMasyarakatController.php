<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterMasyarakatController extends Controller
{
    public function index(){
        return view('auth.registerMasyarakat');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'telp' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $validate['password'] = Hash::make($validate['password']);

        Masyarakat::create($validate);
        return redirect()->route('loginmasyarakat')->with('sukses registrasi','Berhasil Daftar akun');
    }
}

?>

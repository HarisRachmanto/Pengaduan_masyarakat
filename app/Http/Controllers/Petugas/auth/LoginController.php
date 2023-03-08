<?php

namespace App\Http\Controllers\Petugas\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::guard('petugas')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return back()->with('error','username atau password salah');
    }

    public function logout(Request $request){
        Auth::guard('petugas')->logout();
        $request->session()->invalidate();
        return redirect()->route('petugas.login');
    }
}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginMasyarakatController extends Controller
{
    public function index(){
        return view('auth/loginMasyarakat');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('aduanmasyarakat');
        }
        return back()->with('error','username atau password salah');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('loginmasyarakat');
    }
}

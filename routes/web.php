<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Petugas\auth\LoginController as AuthLoginController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Auth\LoginMasyarakatController;
use App\Http\Controllers\Auth\RegisterMasyarakatController;
use App\Http\Controllers\DashboardPengaduanController;
use App\Http\Controllers\LaporanMasyarakatController;
use App\Http\Controllers\MasyarakatAkunController;
use App\Http\Controllers\TanggapanDashboardController;
use App\Http\Controllers\DashController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/loginMasyarakat', function () {
    return view('auth.loginMasyarakat');
});
// Route::get('/registerMasyarakat', function () {
//     return view('auth.registerMasyarakat');
// });

Route::prefix('petugas')->group(function (){
    Route::get('/login', function () {
        return view('auth.login');
    })->middleware('guest:petugas')->name('petugas.login');
    Route::post('authenticate',[AuthLoginController::class, 'authenticate'])->name('petugas.authenticate');
    Route::get('logout',[AuthLoginController::class, 'logout'])->name('petugas.logout');
});


Route::get('auth/loginmasyarakat', [LoginMasyarakatController::class, 'index'])->name('loginmasyarakat');
Route::post('auth/loginmasyarakat', [LoginMasyarakatController::class, 'store'])->name('loginmasyarakat.store');
Route::get('logout',[LoginMasyarakatController::class, 'logout'])->name('users.logout');

Route::get('auth/registerMasyarakat', [RegisterMasyarakatController::class, 'index'])->name('register');
Route::post('auth/registerMasyarakat', [RegisterMasyarakatController::class, 'store'])->name('register.store');


Route::get('aduanmasyarakat', [PengaduanController::class,'index'])->name('aduanmasyarakat');
Route::post('aduanmasyarakat', [PengaduanController::class,'store'])->name('pengaduan');
Route::get('aduanmasyarakat/update/{id_pengaduan}', [PengaduanController::class,'update'])->name('status');

// Route::get('aduanmasyarakat/get/{id}', [PengaduanController::class,'getById']);
// Route::delete('aduanmasyarakat/destroy/{id}', [PengaduanController::class,'destroy']);

Route::get('DashboardPengaduan', [DashboardPengaduanController::class, 'index'])->name('DashboardPengaduan');
Route::delete('DashboardPengaduan/destroy/{id}', [DashboardPengaduanController::class, 'destroy'])->name('DashboardPengaduanDestroy');
ROute::get('DashboardPengaduan/cetak/{id}', [DashboardPengaduanController::class, 'cetak'])->name('cetak');


Route::get('history', [LaporanMasyarakatController::class, 'index'])->name('history');

Route::get('akunmasyarakat',[MasyarakatAkunController::class, 'index'])->name('akunmasyarakat');
Route::delete('akunmasyarakat/destroy/{id}', [MasyarakatAkunController::class, 'destroy'])->name('akunmasyarakatdestroy');

Route::get('tanggapandashboard/{id_pengaduan}', [TanggapanDashboardController::class, 'index'])->name('tanggapandash');
Route::post('tanggapandashboard/{id_pengaduan}', [TanggapanDashboardController::class, 'store'])->name('tanggapan');
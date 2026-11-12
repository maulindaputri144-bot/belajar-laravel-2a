<?php 
use Illuminate\Support\Facades\Route; 
//import Controller
use App\Http\Controllers\Web;
use App\Http\Controllers\Dashboard; 
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
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
//return view('welcome'); 
return "Hallo namaku adalah Laravel, Salam Kenal"; 
}); 
//route baru 
Route::get('/about', function () { 
//return view('welcome'); 
return "<h2>Ini adalah laman About</h2>"; 
}); 
//route ke controller Web ke fungsi home 
Route::get('/web',[Web::class, 'home']); 
//route ke controller Web ke fungsi profil 
Route::get('/profil/{nama}',[Web::class, 'profil']);
//route ke controller Dashboard ke fungsi home 
Route::get('/dashboard',[Dashboard::class, 'home']);

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index'])
    ->name('daftar.mahasiswa');
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'index'])
    ->name('kalkulator.segitiga');

Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitung'])
    ->name('kalkulator.segitiga.hitung');
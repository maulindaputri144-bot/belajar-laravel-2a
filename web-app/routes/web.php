<?php 
use Illuminate\Support\Facades\Route; 
//import Controller
use App\Http\Controllers\Web;
use App\Http\Controllers\Dashboard; 
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AdminController;
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

// Praktik Sistem Templating
Route::get('/templating', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/service', [DashboardController::class, 'service']);
Route::get('/contact', [DashboardController::class, 'contact']);
Route::get('/sb-admin/about', [DashboardController::class, 'about']);
Route::get('/gallery', [DashboardController::class, 'gallery']);
Route::get('/employe/create', [EmployeController::class, 'create']);
Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);
Route::post('/employe/store', [EmployeController::class, 'store']);
Route::put('/employe/{employe}', [EmployeController::class, 'update']);
Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);
Route::get('/employe', [EmployeController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin/store', [AdminController::class, 'store']);
Route::get('/admin/{admin}/edit', [AdminController::class, 'show']);
Route::put('/admin/{admin}', [AdminController::class, 'update']);
Route::delete('/admin/{admin}', [AdminController::class, 'destroy']);
Route::get('/admin', [AdminController::class, 'index']);
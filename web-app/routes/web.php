<?php

use Illuminate\Support\Facades\Route;

// Import Controller
use App\Http\Controllers\Web;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Login
Route::get('/', function () {
    return view('login');
});

// Proses Login
Route::post('/login', [AuthController::class, 'cek']);

// Route latihan sebelumnya (tetap bisa diakses)
Route::get('/about', function () {
    return "<h2>Ini adalah laman About</h2>";
});

Route::get('/web', [Web::class, 'home']);
Route::get('/profil/{nama}', [Web::class, 'profil']);

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index'])
    ->name('daftar.mahasiswa');

Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'index'])
    ->name('kalkulator.segitiga');

Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitung'])
    ->name('kalkulator.segitiga.hitung');

// Route yang membutuhkan login
Route::middleware('islogin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [Dashboard::class, 'home']);
    Route::get('/templating', [DashboardController::class, 'home']);

    // Halaman Templating
    Route::get('/product', [DashboardController::class, 'product']);
    Route::get('/service', [DashboardController::class, 'service']);
    Route::get('/contact', [DashboardController::class, 'contact']);
    Route::get('/sb-admin/about', [DashboardController::class, 'about']);
    Route::get('/gallery', [DashboardController::class, 'gallery']);

    // CRUD Employe
    Route::get('/employe/create', [EmployeController::class, 'create']);
    Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);
    Route::post('/employe/store', [EmployeController::class, 'store']);
    Route::put('/employe/{employe}', [EmployeController::class, 'update']);
    Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);
    Route::get('/employe', [EmployeController::class, 'index']);

    // CRUD Admin
    Route::get('/admin/create', [AdminController::class, 'create']);
    Route::post('/admin/store', [AdminController::class, 'store']);
    Route::get('/admin/{admin}/edit', [AdminController::class, 'show']);
    Route::put('/admin/{admin}', [AdminController::class, 'update']);
    Route::delete('/admin/{admin}', [AdminController::class, 'destroy']);
    Route::get('/admin', [AdminController::class, 'index']);

    // Logout
    Route::get('/logout', [AuthController::class, 'logout']);
});

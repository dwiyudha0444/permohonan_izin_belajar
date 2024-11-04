<?php

use App\Http\Controllers\admin\AkunController;
use Illuminate\Support\Facades\Route;

//auth
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

//admin
use App\Http\Controllers\admin\DashboardAdminController;

//user
use App\Http\Controllers\user\DashboardUserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage.index');
})->name('home');


//auth
Route::get('/login_admin', [LoginController::class, 'index'])->name('login_admin');
Route::post('/login_proses_admin', [LoginController::class, 'loginAdmin'])->name('login_proses_admin');
Route::get('/register_admin', [RegisterController::class, 'index'])->name('register_admin');
Route::post('/register_proses_admin', [RegisterController::class, 'registerAdmin'])->name('register_proses_admin');

Route::get('/login_user', [LoginController::class, 'indexUser'])->name('login_user');
Route::post('/login_proses_user', [LoginController::class, 'loginUser'])->name('login_proses_user');
Route::get('/register_user', [RegisterController::class, 'indexUser'])->name('register_user');
Route::post('/register_proses_user', [RegisterController::class, 'registerUser'])->name('register_proses_user');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard_admin', [DashboardAdminController::class, 'index'])->name('dashboard_admin');
Route::get('/dashboard_user', [DashboardUserController::class, 'index'])->name('dashboard_user');

Route::get('/akun_admin', [AkunController::class, 'indexAdmin'])->name('akun_admin');
Route::get('/akun_pegawai', [AkunController::class, 'indexAdmin'])->name('akun_pegawai');



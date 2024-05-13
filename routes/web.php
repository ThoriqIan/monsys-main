<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataForestController;
use App\Models\DataForest;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataSampleController;
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
    return view('Dashboard');
});

Route::get('/dashboard', function () {
    return view('pages.Dashboard.Dashboard');
})->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard.Dashboard');


Route::get('/DataForest', function () {
    return view('Forest');
});

Route::get('/DataForest', [DataForestController::class, 'Forest']);
Route::get('/DataForest/create', [DataForestController::class, 'create'])->name('DataForest.create');
Route::post('/DataForest', [DataForestController::class, 'store'])->name('DataForest.store');
Route::get('/DataForest/Forest', [DataForestController::class, 'Forest'])->name('DataForest.Forest');
Route::get('/DataForest/edit/{id}', [DataForestController::class, 'edit'])->name('DataForest.edit');
Route::post('/DataForest/update/{id}', [DataForestController::class, 'update'])->name('DataForest.update');
Route::get('/DataForest/DHT', [DataForestController::class,'DHT'])->name('DataForest.DHT');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Rute untuk proses login
Route::post('/login', [AuthController::class, 'login']);

// Rute untuk menampilkan form register
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Rute untuk proses register
Route::post('/register', [AuthController::class, 'register']);

// Rute untuk proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::post('/DataSample', [DataSampleController::class, 'store'])->name('DataSample.store');
Route::get('/DataSample/Sample', [DataSampleController::class, 'sample'])->name('DataSample.Sample');
Route::get('/DataSample/SoilMoist', [DataSampleController::class, 'soilMoist'])->name('DataSample.SoilMoist');
Route::get('/DataSample/DHT', [DataSampleController::class, 'dht'])->name('DataSample.DHT');
Route::get('/DataSample/GasSensor', [DataSampleController::class, 'gasSensor'])->name('DataSample.GasSensor');



















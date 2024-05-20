<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MuzzakiController;
use App\Http\Controllers\MustahiqController;
use App\Http\Controllers\BayarZakatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MustahiqLainnyaController;
use App\Http\Controllers\KategoriMustahiqController;
use App\Models\Mustahiq;

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



Route::get('/', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/r', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
Route::get('/home', [DashboardController::class,'index']);
Route::get('/muzzakis', [MuzzakiController::class, 'index'])->name('muzzakis.index');
Route::get('/muzzakis-create', [MuzzakiController::class, 'create'])->name('muzzakis.create');
Route::post('/muzzakis', [MuzzakiController::class, 'store'])->name('muzzakis.store');
Route::get('/muzzakis-{muzzaki}', [MuzzakiController::class, 'show'])->name('muzzakis.show');
Route::get('/edit-{muzzaki}', [MuzzakiController::class, 'edit'])->name('muzzakis.edit');
Route::put('/muzzakis-{muzzaki}', [MuzzakiController::class, 'update'])->name('muzzakis.update');
Route::delete('/muzzakis-{muzzaki}', [MuzzakiController::class, 'destroy'])->name('muzzakis.destroy');
Route::get('/kategori-mustahiqs', [KategoriMustahiqController::class, 'index'])->name('kategori-mustahiqs.index');
Route::get('/kategori-mustahiqs-create', [KategoriMustahiqController::class, 'create'])->name('kategori-mustahiqs.create');
Route::post('/kategori-mustahiqs', [KategoriMustahiqController::class, 'store'])->name('kategori-mustahiqs.store');
Route::get('/kategori-mustahiqs-{kategoriMustahiq}', [KategoriMustahiqController::class, 'show'])->name('kategori-mustahiqs.show');
Route::get('/edit_{kategoriMustahiq}', [KategoriMustahiqController::class, 'edit'])->name('kategori-mustahiqs.edit');
Route::put('/kategori-mustahiqs-{kategoriMustahiq}', [KategoriMustahiqController::class, 'update'])->name('kategori-mustahiqs.update');
Route::delete('/kategori-mustahiqs-{kategoriMustahiq}', [KategoriMustahiqController::class, 'destroy'])->name('kategori-mustahiqs.destroy');
Route::get('/mustahiqs', [MustahiqController::class, 'index'])->name('mustahiqs.index');
Route::get('/mustahiqs-create', [MustahiqController::class, 'create'])->name('mustahiqs.create');
Route::post('/mustahiqs', [MustahiqController::class, 'store'])->name('mustahiqs.store');
Route::get('/mustahiqs-{mustahiq}', [MustahiqController::class, 'show'])->name('mustahiqs.show');
Route::get('/mustahiqsedit-{mustahiq}', [MustahiqController::class, 'edit'])->name('mustahiqs.edit');
Route::put('/mustahiqs-{mustahiq}', [MustahiqController::class, 'update'])->name('mustahiqs.update');
Route::delete('/mustahiqs-{mustahiq}', [MustahiqController::class, 'destroy'])->name('mustahiqs.destroy');
Route::get('/laporan-pdf', [MustahiqController::class, 'downloadPDF'])->name('download.pdf');

Route::get('/mustahiqlainnya', [MustahiqLainnyaController::class, 'index'])->name('mustahiqlainnya.index');
Route::get('/mustahiqlainnya-create', [MustahiqLainnyaController::class, 'create'])->name('mustahiqlainnya.create');
Route::post('/mustahiqlainnya', [MustahiqLainnyaController::class, 'store'])->name('mustahiqlainnya.store');
Route::get('/mustahiqlainnya-{mustahiq}', [MustahiqLainnyaController::class, 'show'])->name('mustahiqlainnya.show');
Route::get('/mustahiqeditlainnya-{mustahiq}', [MustahiqLainnyaController::class, 'edit'])->name('mustahiqlainnya.edit');
Route::put('/mustahiqlainnya-{mustahiq}', [MustahiqLainnyaController::class, 'update'])->name('mustahiqlainnya.update');
Route::delete('/mustahiqlainnya-{mustahiq}', [MustahiqLainnyaController::class, 'destroy'])->name('mustahiqlainnya.destroy');
Route::get('/mustahiqlain-laporan', [MustahiqLainnyaController::class, 'laporan'])->name('mustahiqlainnya.laporan');

Route::get('/bayar-zakats', [BayarZakatController::class, 'index'])->name('bayarzakats.index');
Route::get('/bayar-zakats-create', [BayarZakatController::class, 'create'])->name('bayarzakats.create');
Route::post('/bayar-zakats', [BayarZakatController::class, 'store'])->name('bayarzakats.store');
Route::get('/bayar-zakats-{bayarZakat}', [BayarZakatController::class, 'show'])->name('bayarzakats.show');
Route::get('/edits-{bayarZakat}', [BayarZakatController::class, 'edit'])->name('bayarzakats.edit');
Route::put('/bayar-zakats-{bayarZakat}', [BayarZakatController::class, 'update'])->name('bayarzakats.update');
Route::delete('/bayar-zakats-{bayarZakat}', [BayarZakatController::class, 'destroy'])->name('bayarzakats.destroy');

});

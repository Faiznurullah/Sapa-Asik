<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RelogController;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\TipeController;

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
    return view('welcome');
});




Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

    // RelogController
    Route::get('/login', [RelogController::class, 'login'])->name('login');
    Route::get('/registrasi', [RelogController::class, 'registrasi'])->name('registrasi');
    Route::get('/profile', [RelogController::class, 'profile'])->name('profile');
    Route::get('/reset', [RelogController::class, 'reset']);
    Route::get('/logout', [RelogController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['verified', 'checkRole:admin']], function(){
 
    // Tipe 
    Route::get('/tambahtipe', [TipeController::class, 'tambah'])->name('tambah');
    Route::post('/inserttipe', [TipeController::class, 'insert'])->name('insert');
    Route::get('/datatipe', [TipeController::class, 'data'])->name('data');
    Route::get('/edittipe/{id}', [TipeController::class, 'edit'])->name('edit');
    Route::post('/updatetipe/{id}', [TipeController::class, 'update'])->name('update');
    Route::get('/hapustipe/{id}', [TipeController::class, 'hapus'])->name('hapus');
    Route::get('/downloadtipepdf', [TipeController::class, 'downloadpdf'])->name('downloadpdf');
    
    
    // Aspirasi
    Route::get('/tambahaspirasi', [AspirasiController::class, 'tambah'])->name('tambah');
    Route::post('/insertaspirasi', [AspirasiController::class, 'insert'])->name('insert');
    Route::get('/dataaspirasi', [AspirasiController::class, 'data'])->name('data');
    Route::get('/detailaspirasi/{id}', [AspirasiController::class, 'detail'])->name('detail');
    Route::get('/editaspirasi/{id}', [AspirasiController::class, 'edit'])->name('edit');
    Route::post('/updateaspirasi/{id}', [AspirasiController::class, 'update'])->name('update');
    Route::get('/hapusaspirasi/{id}', [AspirasiController::class, 'hapus'])->name('hapus');
    Route::get('/aspirasipdf', [AspirasiController::class, 'downloadpdf'])->name('downloadpdf');
    Route::get('/aspirasipdf/{id}', [AspirasiController::class, 'downloadpdfid'])->name('downloadpdfid');
    Route::post('/verifikasiaspirasi/{id}', [AspirasiController::class, 'verifikasiaspirasi'])->name('verifikasiaspirasi');
    
    // Charts
    Route::get('/chart', [ChartController::class, 'chart'])->name('chart');
    
    // Charts
    Route::get('/tabel', [TabelController::class, 'tabel'])->name('tabel');

});

Route::group(['middleware' => ['verified', 'checkRole:admin,user']], function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home');

// Aspirasi
    Route::get('/tambahaspirasi', [AspirasiController::class, 'tambah'])->name('tambah');
    Route::post('/insertaspirasi', [AspirasiController::class, 'insert'])->name('insert');
    Route::get('/dataaspirasi', [AspirasiController::class, 'data'])->name('data');
    Route::get('/detailaspirasi/{id}', [AspirasiController::class, 'detail'])->name('detail');
    Route::get('/editaspirasi/{id}', [AspirasiController::class, 'edit'])->name('edit');
    Route::post('/updateaspirasi/{id}', [AspirasiController::class, 'update'])->name('update');
    Route::get('/hapusaspirasi/{id}', [AspirasiController::class, 'hapus'])->name('hapus');
    Route::get('/aspirasipdf', [AspirasiController::class, 'downloadpdf'])->name('downloadpdf');
    Route::get('/aspirasipdf/{id}', [AspirasiController::class, 'downloadpdfid'])->name('downloadpdfid');
    Route::post('/verifikasiaspirasi/{id}', [AspirasiController::class, 'verifikasiaspirasi'])->name('verifikasiaspirasi');
    
     // Charts
     Route::get('/chart', [ChartController::class, 'chart'])->name('chart');

});



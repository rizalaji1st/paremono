<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    ManajemenUserController,
    ManajemenWilayahController,
    ManajemenCurahHujanController,
    PublikController,
    ManajemenKonfigController,
    KonfigGaleriHomeController,
    ManajemenKategoriController,
    ManajemenArtikelController,
    ManajemenGaleriController,
    HomeController
};

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

Route::name('home.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/artikel', [HomeController::class, 'artikel'])->name('artikel');
    Route::get('/artikel-kategori/{kategori}', [HomeController::class, 'artikelKategori'])->name('artikel-kategori');
    Route::get('/artikel/{slug}', [HomeController::class, 'artikelDetail'])->name('artikel-detail');
});

Route::middleware('can:administrator')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::middleware('can:are-superAdmin')->group(function(){
        Route::prefix('manajemen-user')->name('manajemen-user.')->group(function(){
            Route::get('/',[ManajemenUserController::class,'index'])->name('index');
            Route::post('/store',[ManajemenUserController::class,'store'])->name('store');
            Route::post('/update',[ManajemenUserController::class,'update'])->name('update');
            Route::post('/destroy/{user}',[ManajemenUserController::class,'destroy'])->name('destroy');
        });
    });
    Route::prefix('manajemen-konfig')->name('manajemen-konfig.')->group(function(){
        Route::get('/',[ManajemenKonfigController::class,'index'])->name('index');
        Route::post('/store',[ManajemenKonfigController::class,'store'])->name('store');
        Route::post('/update',[ManajemenKonfigController::class,'update'])->name('update');
        Route::post('/destroy/{konfig}',[ManajemenKonfigController::class,'destroy'])->name('destroy');
    });
    Route::prefix('konfig-galeri-home')->name('konfig-galeri-home.')->group(function(){
        Route::get('/',[KonfigGaleriHomeController::class,'index'])->name('index');
        Route::post('/store',[KonfigGaleriHomeController::class,'store'])->name('store');
        Route::post('/update',[KonfigGaleriHomeController::class,'update'])->name('update');
        Route::post('/destroy/{konfig}',[KonfigGaleriHomeController::class,'destroy'])->name('destroy');
    });
    Route::prefix('manajemen-kategori')->name('manajemen-kategori.')->group(function(){
        Route::get('/',[ManajemenKategoriController::class,'index'])->name('index');
        Route::post('/store',[ManajemenKategoriController::class,'store'])->name('store');
        Route::post('/update',[ManajemenKategoriController::class,'update'])->name('update');
        Route::post('/destroy/{kategori}',[ManajemenKategoriController::class,'destroy'])->name('destroy');
    });
    Route::prefix('manajemen-artikel')->name('manajemen-artikel.')->group(function(){
        Route::get('/',[ManajemenArtikelController::class,'index'])->name('index');
        Route::get('/create',[ManajemenArtikelController::class,'create'])->name('create');
        Route::post('/store',[ManajemenArtikelController::class,'store'])->name('store');
        Route::get('/edit/{blog}',[ManajemenArtikelController::class,'edit'])->name('edit');
        Route::post('/update/{blog}',[ManajemenArtikelController::class,'update'])->name('update');
        Route::post('/destroy/{blog}',[ManajemenArtikelController::class,'destroy'])->name('destroy');
    });
    Route::prefix('manajemen-galeri')->name('manajemen-galeri.')->group(function(){
        Route::get('/',[ManajemenGaleriController::class,'index'])->name('index');
        Route::post('/store',[ManajemenGaleriController::class,'store'])->name('store');
        Route::post('/update',[ManajemenGaleriController::class,'update'])->name('update');
        Route::post('/destroy/{galeri}',[ManajemenGaleriController::class,'destroy'])->name('destroy');
    });
    Route::prefix('manajemen-curah-hujan')->name('manajemen-curah-hujan.')->group(function(){
        Route::get('/',[ManajemenCurahHujanController::class,'index'])->name('index');
        Route::post('/update',[ManajemenCurahHujanController::class,'update'])->name('update');
        Route::post('/get-data',[ManajemenCurahHujanController::class,'getData'])->name('get-data');
    });
});

Auth::routes();


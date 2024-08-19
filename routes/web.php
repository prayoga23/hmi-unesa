<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPublikasiController;
use App\Http\Controllers\AdminKategoriPublikasiController;
use App\Http\Controllers\KategoriGaleriController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminGaleriController;
use App\Http\Controllers\TentangKamiController;
use App\KategoriPublikasi;
use App\KategoriBerita;
use App\KategoriGaleri;

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

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('portal', 'HomeController@index')->name('home');
    Route::get('portal/profile', 'ProfileController@index')->name('profile');
    Route::put('portal/profile', 'ProfileController@update')->name('profile.update');
    Route::resource('portal/publikasi', 'AdminPublikasiController', [
        'as' => 'portal'
    ]);
    Route::resource('portal/berita', 'AdminBeritaController', [
        'as' => 'portal'
    ])->parameters([
        'berita' => 'berita'
    ]);
    Route::resource('portal/galeri', 'AdminGaleriController', [
        'as' => 'portal'
    ]);

    Route::resource('portal/mypublikasi', 'AdminMyPublikasiController', [
        'as' => 'portal'
    ]);
    Route::resource('portal/myberita', 'AdminMyBeritaController', [
        'as' => 'portal'
    ])->parameters([
        'berita' => 'berita'
    ]);
    Route::resource('portal/mygaleri', 'AdminMyGaleriController', [
        'as' => 'portal'
    ]);


    Route::resource('portal/kategori-publikasi', 'AdminKategoriPublikasiController', [
        'as' => 'portal'
    ]);
    Route::resource('portal/kategori-berita', 'AdminKategoriBeritaController', [
        'as' => 'portal'
    ]);
    Route::resource('portal/kategori-galeri', 'KategoriGaleriController', [
        'as' => 'portal'
    ]);
    Route::resource('portal/profil','UserProfilController',[
        'as'=>'portal'
    ]);
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('admin', 'HomeController@adminHome')->name('admin.home');
    Route::resource('admin/management', 'AdminUserController', [
        'as' => 'admin'
    ]);
    Route::resource('admin/kepengurusan','AdminKepengurusanController',[
        'as' => 'admin'
    ]);
});



Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

// Tampilan Home
Route::get('/', 'IndexController@index')->name('index');
Route::get('tentangkami', 'TentangkamiController@index')->name('tentang kami');
Route::get('detail', 'DetailBlogController@index')->name('detail');
Route::get('publikasi', 'PublikasiController@index')->name('publikasi');
Route::get('publikasi/{slug}', 'PublikasiController@detail')->name('publikasi.detail');
Route::get('berita', 'BeritaController@index')->name('berita');
Route::get('berita/{slug}', 'BeritaController@detail')->name('berita.detail');
Route::get('galeri', 'GaleriController@index')->name('galeri');
Route::get('struktur-kepengurusan','TentangkamiController@struktur')->name('struktur-kepengurusan');
Route::post('komentar/publikasi/{id}/upload','KomentarPublikasiController@upload')->name('komentar.publikasi.upload');
Route::post('komentar/berita/{id}/upload','KomentarBeritaController@upload')->name('komentar.berita.upload');
Route::post('upload_foto_publikasi','AdminPublikasiController@uploadImage')->name('upload.foto.publikasi');
Route::post('upload_foto_berita','AdminBeritaController@uploadImage')->name('upload.foto.berita');

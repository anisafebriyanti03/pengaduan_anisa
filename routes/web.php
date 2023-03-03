<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MasyarakatController@landing')->name('masyarakat.landing');
Route::get('/register','RegisterController@RegisterFormMasyarakat');

Route::group([
    'prefix' => config('masyarakat.prefix'),
    // 'namespace' => 'App\Http\Controllers',
], function(){
   
    Route::post('register/store','RegisterController@RegisterMasyarakat')->name('masyarakat.register');
    Route::get('login', 'LoginMasyarakatController@formlogin')->name('masyarakat.login');
    Route::post('login', 'LoginMasyarakatController@login');

    Route::middleware(['auth:masyarakat'])->group(function(){
        Route::post('logout','LoginMasyarakatController@logout')->name('masyarakat.logout');
        Route::view('/','dashboard')->name('dashboard');
        Route::get('/laporanku/show/{id}','PengaduanController@show')->name('laporanku');
        // Route::view('/','beranda')->name('beranda');
        Route::view('/post','data-post')->name('post')->middleware('can:level, "masyarakat","petugas"');
        Route::view('/masyarakat','data-masyarakat')->name('masyarakat')->middleware('can:level, "masyarakat"'); // hanya bisa di akses oleh masyarakat
        Route::get('/pengaduan','PengaduanController@index')->name('masyarakat.index');
        Route::post('/pengaduan/create','PengaduanController@create')->name('masyarakat.pengaduan');
        Route::get('/pengaduan/show/{id}', 'PengaduanController@show');
    });
});

// Route::get('/petugas','PetugasController@index');
Route::resource('petugas', 'PetugasController');

<?php

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

Route::get('/master/inputbuku', 'create_controller@inputbukutab');

Route::get('/master/pinjam', 'create_controller@pinjam');

Route::get('/master/member', 'create_controller@member');

Route::get('/master/table', 'create_controller@table');

Route::get('/master/tablebuku', 'create_controller@tablebuku');

Route::get('/master/tablebuku/export', 'create_controller@bukuexport');

Route::get('/master/tablebuku/cetak', 'create_controller@cetakBuku');

Route::get('/master/tablemember', 'create_controller@tablemember');

Route::get('/master/{id_peminjaman}/pengembalian', 'create_controller@pengembalian');

Route::put('/master/pengembalian/{id_peminjaman}', 'create_controller@update');

Route::DELETE('/master/{id_peminjaman}', 'create_controller@destroy');

Route::get('/test', function(){
    return "Halo";
});


Route::get('/halo', function(){
    return "Halo";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/master', function () {
    return view('adminbsb.master');
});

Route::get('/items', function(){
    return view('items.index');
});


Route::POST('/insertsemua', 'create_controller@buku');

Route::POST('/member', 'create_controller@peminjambuku');

Route::POST('/pinjam', 'create_controller@peminjaman');

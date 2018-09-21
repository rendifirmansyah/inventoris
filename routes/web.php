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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/databarang','HomeController@databarang');

Route::get('/tambahbarang','HomeController@tambahbarang');

Route::post('/postbarang','HomeController@postbarang');

Route::post('/updatebarang','HomeController@updatebarang');

Route::get('/editbarang/{id}', 'HomeController@editbarang');

Route::get('/hapusbarang/{id}', 'HomeController@hapusbarang');

Route::get('/pinjam_barang', 'BarangController@pinjambarang');

Route::get('/data_peminjam', 'BarangController@data');

Route::get('/pinjambarang/{id}', 'BarangController@pinjam');

Route::get('/detail_pinjam/{id}', 'BarangController@detail');

Route::get('/mutasi/menu/{id}', 'BarangController@mutasi_menu');

Route::get('/mutasi/home', 'BarangController@mutasi_home');

Route::post('/pinjam', 'BarangController@post');

Route::post('/barang_kembali', 'BarangController@kembali');

Route::post('/mutasi/post', 'BarangController@mutasi_post');

Route::get('/download/pdf', 'BarangController@pdf');

Route::get('/download/pdf/mutasi', 'BarangController@pdfmutasi');

Route::get('/download/pdf/pinjam', 'BarangController@pdfpinjam');

Route::get('/download/excel','BarangController@excelbarang')->name('contact.export');

Route::post('/import/excel','BarangController@importbarang');

Route::get('/import/excel/home','BarangController@importbaranghome');





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

// data masuk
Route::group(['prefix' => 'data/masuk'], function(){
    Route::get('pemasukan', 'IncomeController@index')->name('data.pemasukan');
    Route::get('penambahan', 'IncomeController@create')->name('data.penambahan');
    Route::post('simpan', 'IncomeController@store')->name('data.simpan');
});

// data keluar
Route::group(['prefix' => 'data'], function(){
    Route::get('keluar', 'ExpenditureController@index')->name('data.pengeluaran');
    Route::get('pengeluaran', 'ExpenditureController@create')->name('data.keluar');
    Route::post('proses.data-pengeluaran', 'ExpenditureController@store')->name('proses.data-keluar');
});


// stock data barang

Route::group(['prefix'=>'inventory'], function(){
    Route::get('tampilan.data-stock', 'InventoryController@index')->name('data.stock');
    Route::get('isi.data-stock', 'InventoryController@create')->name('isi.data-stock');
    Route::post('simpan.data-stock', 'InventoryController@store')->name('simpan.data-stock');
    Route::get('ubah.isi-data-stock/{inventory}', 'InventoryController@edit')->name('edit.data-stock');
    Route::patch('update.data-stock/{inventory}', 'InventoryController@update')->name('update.data-stock');
    Route::delete('hapus.data-stock/{inventory}', 'InventoryController@destroy')->name('delete.data-stock');
});

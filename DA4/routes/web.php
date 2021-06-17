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
Route::get('/index','HomeController@getHome')->name('tc');
Route::get('/admin','HomeController@getAdmin')->name('qt');
Route::get('cac_khoa_hoc','HomeController@getcackhoahoc')->name('kh');
Route::get('giao_vien','HomeController@getgiaovien')->name('gv');
Route::get('events','HomeController@getevents')->name('sk');
Route::get('about','HomeController@getabout')->name('ab');
Route::get('contact','HomeController@getcontact')->name('ct');
Route::get('chitiet/{id}','HomeController@getchitiet1')->name('ct1');
Route::get('tintheoloai/{id}','HomeController@tintheoloai')->name('tttl');


Route::get('danhsachtaikhoan','HomeController@getdanhsachtaikhoan')->name('dstk');
Route::get('themtaikhoan','HomeController@getthemtaikhoan')->name('ttk');
Route::get('suataikhoan','HomeController@getsuataikhoan')->name('stk');
Route::get('login','HomeController@getlogin')->name('login');


Route::prefix('admin')->namespace('admin')->group(function () {
    Route::get('danhsachloaitin','LoaitinController@index')->name('dslt');
    Route::get('themloaitin','LoaitinController@create')->name('tlt');
    Route::post('storeloaitin','LoaitinController@store')->name('stlt');
    Route::get('sualoaitin/{id}','LoaitinController@edit')->name('slt');
    Route::post('updateloaitin/{id}','LoaitinController@update')->name('udlt');
    Route::delete('deleteloaitin/{id}', 'LoaitinController@destroy')->name('dllt');
    Route::get('danhsachtintuc','TintucController@index')->name('dstt');
    Route::get('themtintuc','TintucController@create')->name('ttt');
    Route::post('storetintuc','TintucController@store')->name('sttt');
    Route::get('suatintuc/{id}','TintucController@edit')->name('stt');
    Route::post('updateloaitin/{id}','TintucController@update')->name('udtt');
    Route::delete('deletetintuc/{id}', 'TintucController@destroy')->name('dltt');
});


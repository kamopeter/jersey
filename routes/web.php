<?php

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

//Front-----------------------
Route::get('/', 'IndexController@index')->name('index');
Route::get('/jersey', function(){
    return view('jersey');
})->name('jersey');
Route::get('nyitvatartas', 'OpenpageController@index')->name('open');
Route::get('termekek', function(){
    return view('productpage');
})->name('product');
Route::get('arlista','PricepageController@index')->name('pricelist');
Route::get('pricelist/pdf','PricepageController@createPDF');
Route::get('pricelistPDF', 'PricepageController@createPDF');
Route::get('references','RefpageController@index')->name('references');
Route::get('galeria','FileUploadController@show')->name('gallery');
Route::get('kapcsolat','ContactController@index')->name('contact');
Route::post('contact', function(Request $request){
    Mail::send(new ContactMail($request));
    return back();
});
Route::get('adatvedelmi-nyilatkozat', function(){
    return view('adatkezeles');
})->name('adatk');
Auth::routes(['register' => false]);

//Back-------------------------
Route::get('admin', 'HomeController@index')->name('admin');
//Nyitvatartás
Route::resource('admin/opening', 'OpenController')->middleware('auth');
//Árlista
Route::resource('admin/pricedit', 'PriceListController')->middleware('auth');
// Képfeltöltés
Route::get('admin/upload','FileUploadController@lister')->name('uploadlist')->middleware('auth');
Route::get('admin/upload/create', 'FileUploadController@index')->name('uploadcreate')->middleware('auth');
Route::post('admin/upload', 'FileUploadController@upload')->name('upload')->middleware('auth');
Route::delete('admin/upload/{id}','FileUploadController@destroy')->name('uploadestroy')->middleware('auth');
//Referenciák
Route::resource('admin/referencies', 'ReferenciesController')->middleware('auth');



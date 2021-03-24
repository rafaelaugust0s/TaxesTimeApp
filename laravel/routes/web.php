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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

//Route::get('/myform',function(){
//    return view('myform');
//});

Route::get('/payment',function(){
    return view('payment');
});

Route::post('/payment',function(){
//    return view('payment');
});

//Route::get('/show',function(){
//    return view('show');
//});
//Route::post('products/{id}/purchase', 'ProductController@purchase')->name('products.purchase');


Route::post('/create_new_taxform',[App\Http\Controllers\TaxformController::class, 'store']);

Route::get('/myform',[\App\Http\Controllers\TaxformController::class,'myform']);

Route::get('/delete',[\App\Http\Controllers\TaxformController::class,'delete']);
Route::get('/update/{taxform}',[\App\Http\Controllers\TaxformController::class,'update']);
Route::post('/update/{taxform}',[\App\Http\Controllers\TaxformController::class,'edit']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();



});

Route::get("/taxform",function(){
    return view('taxform');
});



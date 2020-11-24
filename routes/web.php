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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/mould','App\Http\Controllers\ButtonMouldController');
Route::resource('/companydetails','App\Http\Controllers\CompanyDetailsController');
Route::resource('/items','App\Http\Controllers\ItemsController');
Route::post('/mould/search', [App\Http\Controllers\ButtonMouldController::class, 'search'])->name('mould.search');


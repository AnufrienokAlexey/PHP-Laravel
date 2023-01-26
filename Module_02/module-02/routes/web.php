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

Route::get('/userform', [\App\Http\Controllers\FormProcessorController::class, 'showForm'])->name('showForm');
Route::post('/store_form', [\App\Http\Controllers\FormProcessorController::class, 'store'])->name('store');
Route::get('/hello', [\App\Http\Controllers\FormProcessorController::class, 'store'])->name('hello');

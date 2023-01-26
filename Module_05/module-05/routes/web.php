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

Route::get('/get-employee-data', [\App\Http\Controllers\EmployeeController::class, 'index']);
Route::post('/store-form', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('store-form');
Route::put('/user/{id}', [\App\Http\Controllers\EmployeeController::class, 'update']);
Route::delete('/delete/{id}', [\App\Http\Controllers\EmployeeController::class, 'delete']);

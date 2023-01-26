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
    return view('home', ['name' => 'Иван', 'age' => 30, 'position' => 'Junior', 'address' => 'Petrozavodsk']);
});

Route::get('/contacts', function () {
    return view('contacts', ['address' => 'Petrozavodsk', 'post_code' => 185000, 'email' => 'ivan@gmail.com', 'phone' => +79111231234]);
});

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('javascript', ['usersCount' => \App\Models\User::count()]);
})->name('javascript');

Route::get('/jquery', function () {
    return view('jquery', ['usersCount' => \App\Models\User::count()]);
})->name('jquery');

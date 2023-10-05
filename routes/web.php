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
    return '<a href="about">hello world</a>';
});
Route::get('about', function () {
    $tags = ['обучение', 'программирование', 'php', 'oop выше гор'];
    return view('about', ['tags' => $tags]);
});
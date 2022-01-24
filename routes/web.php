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


// Return hanya akan menampilkan sebuah tulisan

// Route::get('/', function () {
//     return "Halaman Home";
// });

// Route::get('/about', function () {
//     return "Halaman About";
// });

// Route::get('/gallery', function () {
//     return "Halaman Gallery";
// });

// ReturnView akan menampilkan sebuah halaman yang ada pada folder views

Route::get('/', function () {
    return view ('home');
});

Route::get('/about', function () {
    return view ('about', [
        "name" => "Kaedehara Kazuha",
        "description" => "Genshin Impact Character - Anemo",
        "image" => "kazuha.png"
    ]);
});

Route::get('/gallery', function () {
    return view ('gallery');
});
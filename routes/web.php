<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view ('index', [
        "title" => "Home",
        "image" => "kazuha jpg.jpg')}}",
        "description" => "Kazuha is a polite and well spoken individual. Compared to other noble Inazuman clan members, Kazuha prefers going out and travelling rather than staying put indoors, something that the seizure of his clan home let him do due to a lack of wealth and duty. He roamed Inazuma peacefully as a modest wanderer for a good portion of his life, teaching himself bladework and picking up other skills, never seeking luxury. "
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Kaedehara Kazuha",
        "description" => "Genshin Impact Character - Anemo",
        "image" => "kazuha.png')}}"
    ]);
});

Route::get('/gallery', function () {
    return view ('gallery', [
        "title" => "Gallery"
    ]);
});

Route::resource('/contact', ContactController::class);
Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

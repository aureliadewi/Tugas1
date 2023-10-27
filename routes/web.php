<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\artikelcontroller;

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
    return view('layouts/index');
});
Route::get('/about', function () {
    return view('about',[
        "title" => "about"
    ]);
// });
// Route::get('/nim', function () {
//     return('21.31.0008');
});
Route::get('/home', function () {
    return view('home',[
        "title" => "blog"
    ]);
});


Route::get('/about2', function () {
    return view('about2');
});

// Route::get('/blog', function () {
//     return view('blog', [
//     "nama" => "Aurelia Dewi",
//     "email" => "Aurelia Dewi@gmail.com",
//     "gambar" => "me.jpg"
// ]);
// });



Route::get('/blog', [artikelcontroller::class, 'index'])->name('artikel.index');
Route::get('/detail/{id}', [artikelcontroller::class, 'detail'])->name('artikel.detail');

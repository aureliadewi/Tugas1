<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\artikelcontroller;
use App\Models\Blog;

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

Route::get('/blog', function () {
    return view('blog2', [
        "title" => "Post",
        "posts" => Blog::all()
    ]);
});

Route::get('/blog{slug}', function ($slug){
    return view('post', [
        "title" => "single post",
        "post" =>Blog::getBySlack($slug)
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "about"
    ]);
// });
// Route::get('/nim', function () {
//     return('21.31.0008');
});
Route::get('/', function () {
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



//Route::get('/blog', [artikelcontroller::class, 'index'])->name('artikel.index');
//Route::get('/detail/{id}', [artikelcontroller::class, 'detail'])->name('artikel.detail');

//Route::get('/blog', function () {
    
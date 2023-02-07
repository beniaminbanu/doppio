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
    return view ('pages.homepage.homepage');
});
Route::get('/about-us', function () {
    return view ('pages.about_us');
});
Route::get('/contact', function () {
    return view ('pages.contact');
});
Route::get('/menu', function () {
    return view ('pages.menu');
});
Route::get('/blog', function () {
    return view ('pages.blog');
});
Route::get('/article', function () {
    return view ('pages.article');
});

// Route::get('/homepage', function () {
//     return view ('pages.homepage.homepage');
// })->name('homepage');

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
    $data = [
        'linguaggi' => ['html', 'css'],
        'programmazione' => ['Javascript', 'PHP'],
        'frameworks' => ['VueJs', 'Laravel'],
    ];
    return view('home', $data);
})->name('homepage');

Route::get('/about', function () {

    return view('about');
})->name('about');

Route::get('/contact', function () {

    return view('contact');
})->name('contact');

Route::get('/blog', function () {

    return view('blog');
})->name('blog');
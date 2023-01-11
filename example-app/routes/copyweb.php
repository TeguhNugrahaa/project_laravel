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


// membuat nama route index
Route::get('/', function () {
    //return 'Hello World!';
    return view('index');
});

// membuat nama route about
Route::get('/about', function () {
    //membuat variabel nama di route
    $nama = 'Teguh Nugraha';

    // mengembalikan about di variabel namanya
    return view('about', ['nama' => $nama]);
});


//membuat route yang nanti diarahkan ke controller lalu methodnya apa
//Route::get('/', 'PagesController@home');
//membuat route about yang nanti diarahkan ke controller lalu methodnya apa
//Route::get('/about', 'PagesController@about');

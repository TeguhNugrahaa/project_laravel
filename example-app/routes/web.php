<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentsController;



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

// Route get untuk home dan about
Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

// Route get untuk index
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route get untuk students
Route::get('/students', [StudentsController::class, 'index']);

// Route get untuk create student, methodnya create
Route::get('/students/create', [StudentsController::class, 'create']);

// Route get untuk students 1
Route::get('/students/{student}', [StudentsController::class, 'show']);

// Route post untuk students controller yang methodnya store
Route::post('/students', [StudentsController::class, 'store']);

// Route menerima method delete dengan menggunakan destroy
Route::delete('/students/{student}', [StudentsController::class, 'destroy']);

// Route menerima method get dengan menggunakan edit
Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);

// Route menerima method post dengan menggunakan edit
Route::post('/students/{student}', [StudentsController::class, 'update']);

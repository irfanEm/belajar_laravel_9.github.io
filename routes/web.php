<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\StudentController;
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

Route::get('/', [ExampleController::class, 'index'])->name('index');
Route::get('/guru',[ExampleController::class, 'guru']);
Route::get('/filter2',[ExampleController::class, 'filter2']);
Route::get('/detail/{id}',[ExampleController::class, 'showg'])->name('detail');
Route::get('/filter', [ExampleController::class, 'filter']);
Route::get('/greeting', function(){
    return view('example');
});

Route::get('/greeting/{id}', [ExampleController::class, 'show'])->name("greeting_name");
Route::get('/create', [ExampleController::class, 'create'])->name('hal_tambah');
Route::post('/create', [ExampleController::class, 'simpan'])->name('simpan_data');
Route::get('/tambah', [StudentController::class, 'tambah'])->name('tambah_siswa');
Route::post('/tambah', [StudentController::class, 'simpan'])->name('simpan_siswa');

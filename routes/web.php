<?php

use App\Http\Controllers\ExampleController;
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

Route::get('/', [ExampleController::class, 'index']);
Route::get('/filter', [ExampleController::class, 'filter']);
Route::get('/greeting', function(){
    return view('example');
});

Route::get('greeting/{id}', [ExampleController::class, 'show'])->name("greeting_name");

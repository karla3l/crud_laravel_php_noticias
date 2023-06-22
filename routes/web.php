<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;


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

Route::get('/welcome', [NoticiaController::class, 'getLoglista'])->name('welcome');

/* Route::get('/noticia', function () {
    return view('NoticiaController@lista');
}); */
Route::resource('/noticia', NoticiaController::class);


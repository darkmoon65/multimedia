<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenController;
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
    return view('welcome');
});

Route::get('/upload', function() {
    return view('upload');
});

Route::post('/subir-imagen', [ImagenController::class, 'subir'] )->name('subir-imagen');;
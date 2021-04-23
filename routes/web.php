<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use models\Usuarios;
use models\Post;
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

Route::get('/coneusuario', function () {
    $resultados = DB::select('select * from usuario');
    dd($resultados);
});

Route::get('/conepost', function () {
    $resultados = DB::select('select * from post');
    dd($resultados);
});

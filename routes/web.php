<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreguntaController;

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

Route::get('/realizada', function () {
    return view('realizada');
});

Route::get('/cgmedio', [PreguntaController::class, 'showMedio'] );
Route::get('/cgsuperior', [PreguntaController::class, 'showSuperior'] );

Route::post('/rellenarCuestionario', [PreguntaController::class, 'createRespuestas'] );

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RespuestaController;

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
    return view('home');
});


Route::get('/politica', function () {
    return view('politica');
});

Route::get('/cgmedio', [PreguntaController::class, 'showMedio'] );
Route::get('/cgsuperior', [PreguntaController::class, 'showSuperior'] );

Route::post('/rellenarCuestionario', [PreguntaController::class, 'createRespuestas'] );


Route::get('/realizada', function () {
    return view('realizada');
});

Route::get('/contacta', function () {
    return view('contacta');
});

Route::prefix('admin')->group(function () {
    Route::post('/calcularInteresados', [RespuestaController::class, 'interesadosPorCiclo'] );
    Route::get('/', function () {
        return view('formInteresados');
    });
    Route::post('/atras', function () {
        return redirect('/admin');
    });
});
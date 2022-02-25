<?php

use App\Jobs\SumarizarRelatoriosJob;
use App\Mail\UsuarioBoasVindasMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
    return view('welcome');
});

/* Enviando nossos emails para a fila de processameanto do Redis, gerenciada pelo Horizon */
Route::post('/cadastrar-usuario', function () {
    Mail::to('patrickmaciel.info@gmail.com')->queue(new UsuarioBoasVindasMail());
});

/* Processando tarefas/job utilizando a filla de processameanto do Redis, gerenciada pelo Horizon */
Route::post('/sumarizar-relatorios', function (Request $request) {
    SumarizarRelatoriosJob::dispatch($request->get('nome'));
});

<?php

use App\Http\Controllers\TesteController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/verificaMaioridade', [TesteController::class, 'index'])->name('VerificaMaioridade');
Route::get('/formulario', [TesteController::class, 'form'])->name('VerificaMaioridadeFormulario');

/*
Route::get('/teste', function() {
    return view('teste', [
        'variavelUm' => 'teste',
        'variavelDois' => 'alura',
        'variavelTres' => 'comex'
    ]);
});
*/

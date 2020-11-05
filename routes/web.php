<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;

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


Route::get('/', [FornecedorController::class, 'show']);

Route::get('/', [ClienteController::class, 'show']);



Route::post('/criar-fornecedor', [FornecedorController::class, 'store'])->name('create-fornecedor');

Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('home.fornecedor');


Route::post('/criar-cliente',[ClienteController::class,'store'])->name('create-cliente');

Route::get('/clientes', [ClienteController::class, 'index'])->name('home.cliente');

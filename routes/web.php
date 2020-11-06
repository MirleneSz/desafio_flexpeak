<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CustoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\ReceitaController;


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

//Route::get('/', function () {
 //  return view('home');
//});


Route::get('/', [FornecedorController::class, 'show']);

Route::get('/', [ClienteController::class, 'show']);

Route::get('/', [PlanoController::class, 'show']);

Route::get('/', [ReceitaController::class, 'show']);

Route::get('/', [CustoController::class, 'show']);


Route::post('/criar-fornecedor', [FornecedorController::class, 'store'])->name('create-fornecedor');
Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('home.fornecedor');


Route::post('/criar-cliente',[ClienteController::class,'store'])->name('create-cliente');
Route::get('/clientes', [ClienteController::class, 'index'])->name('home.cliente');


Route::post('/criar-plano', [PlanoController::class,'store'])->name('create-plano');
Route::get('/planos', [PlanoController::class,'index'])->name('home.plano');

Route::post('/criar-receita', [ReceitaController::class, 'store'])->name('create-receita');
Route::get('/receitas', [ReceitaController::class, 'index'])->name('home.receita');

Route::post('/criar-custo', [CustoController::class, 'store'])->name('create-custo');
Route::get('/custos', [CustoController::class, 'index'])->name('home.custo');



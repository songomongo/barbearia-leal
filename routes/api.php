<?php

use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

route::post('servico',[ServicoController::class,'servicoCreate']);

route::get('servico/{nome}',[ServicoController::class,'pesquisarPorNome']);

route::get('all',[ServicoController::class,'ExibirTodosServico']);

route::post('editar',[ServicoController::class,'editar']);

Route::delete('excluir/{id}',[ServicoController::class, 'excluir']);
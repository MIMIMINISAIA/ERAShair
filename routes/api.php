<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\agendaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FormaDePagamentoController;
use App\Http\Controllers\ProfissionalController;
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


//servico
Route::post('servico/store', [ServicoController::class, 'store']);
Route::get('servico/retornarTodos', [ServicoController::class, 'retornarTodos']);
Route::post('servico/procurarNome', [ServicoController::class, 'pesquisarPorNome']);
Route::post('servico/procurarDescricao', [ServicoController::class, 'pesquisarPorDescricao']);
Route::delete('servuico/delete/{id}', [ServicoController::class, 'excluir']);
Route::put('servico/update', [ServicoController::class, 'update']);
Route::get('servico/pesquisarPor/{id}', [ServicoController::class, 'pesquisarPorId']);
Route::get('servico/exportar/csv', [ServicoController::class, 'exportarCsv']);

//cliente
Route::post('cliente/cadastro', [ClienteController::class, 'store']);
Route::get('cliente/retornarTodos', [ClienteController::class, 'retornarTodos']);
Route::post('cliente/procurarNome', [ClienteController::class, 'pesquisarPorNome']);
Route::post('cliente/procurarCpf', [ClienteController::class, 'pesquisarPorCpf']);
Route::post('cliente/procurarCelular', [ClienteController::class, 'pesquisarPorCelular']);
Route::post('cliente/procurarEmail', [ClienteController::class, 'pesquisarPorEmail']);
Route::delete('excluir/cliente/{id}', [ClienteController::class, 'excluir']);
Route::put('cliente/atualizar', [ClienteController::class, 'update']);
Route::post('cliente/esqueciSenha', [ClienteController::class, 'esqueciSenha']);
Route::get('cliente/pesquisarPor/{id}', [ClienteController::class, 'pesquisarPorId']);
Route::get('cliente/Exportar/csv', [ClienteController::class, 'exportarCsv']);
Route::post('cliente/esqueciSenha', [ClienteController::class, 'esqueciSenhaCliente']);

//profissional
Route::post('profissional/cadastro', [ProfissionalController::class, 'store']);
Route::get('profissional/retornarTodos', [ProfissionalController::class, 'retornarTodos']);
Route::post('profissional/procurarNome', [ProfissionalController::class, 'pesquisarPorNome']);
Route::post('profissional/procurarCpf', [ProfissionalController::class, 'pesquisarPorCpf']);
Route::post('profissional/procurarCelular', [ProfissionalController::class, 'pesquisarPorCelular']);
Route::post('profissional/procurarEmail', [ProfissionalController::class, 'pesquisarPorEmail']);
Route::delete('excluirProfissional/{id}', [ProfissionalController::class, 'excluir']);
Route::put('profissional/atualizar', [ProfissionalController::class, 'update']);
Route::get('profissional/pesquisarPor/{id}', [ProfissionalController::class, 'pesquisarPorId']);
Route::get('profissional/Exportar/csv', [ProfissionalController::class, 'exportarCsv']);
Route::post('profissional/esqueciSenha', [ProfissionalController::class, 'esqueciSenha']);

//agenda
Route::post('cadastroAgenda', [agendaController::class, 'store']);
Route::post('procurarAgenda', [agendaController::class, 'pesquisarPorAgenda']);
Route::delete('excluirAgenda/{id}', [agendaController::class, 'excluir']);
Route::put('atualizarAgenda', [agendaController::class, 'update']);
Route::get('retornarTodosAgenda', [agendaController::class, 'retornarTodos']);

//adm
Route::post('adm/servico/store', [ServicoController::class, 'store']);
Route::put('adm/servico/update', [ServicoController::class, 'update']);
Route::delete('adm/servuico/delete/{id}', [ServicoController::class, 'excluir']);

Route::post('adm/cliente/cadastro', [ClienteController::class, 'store']);
Route::delete('adm/excluir/cliente/{id}', [ClienteController::class, 'excluir']);
Route::put('adm/cliente/atualizar', [ClienteController::class, 'update']);
Route::post('adm/cliente/esqueciSenha', [ClienteController::class, 'esqueciSenhaCliente']);

Route::post('adm/profissional/cadastro', [ProfissionalController::class, 'store']);
Route::delete('adm/excluir/Profissional/{id}', [ProfissionalController::class, 'excluir']);
Route::put('adm/profissional/atualizar', [ProfissionalController::class, 'update']);
Route::post('adm/profissional/esqueciSenha', [ProfissionalController::class, 'esqueciSenha']);


//adm 2
Route::post('adm/Cadastro',[AdmController::class, 'CadastroAdm']);
Route::get('adm/retornarTodos', [AdmController::class, 'retornarTodos']);
Route::get('adm/pesquisarPor/{id}', [AdmController::class, 'pesquisarPorId']);
Route::put('adm/atualizar', [AdmController::class, 'update']);
Route::delete('adm/excluir/{id}', [AdmController::class, 'excluir']);
Route::post('adm/esqueciSenha', [AdmController::class, 'esqueciSenha']);

//pagamento
Route::post('adm/pagamento/cadastro',[FormaDePagamentoController::class, 'store']);
Route::delete('adm/pagamento/excluir',[FormaDePagamentoController::class,'excluir']);




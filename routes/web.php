<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CotacaoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\FornecedorCotacaoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemOrdemCompraController;
use App\Http\Controllers\LocalizacaoController;
use App\Http\Controllers\MovimentoController;
use App\Http\Controllers\OrdemCompraController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutoLocalizacaoController;
use App\Http\Controllers\SaidaController;
use App\Http\Controllers\SolicitacaoController;
use App\Http\Controllers\SolicitacaoCotacaoController;
use App\Http\Controllers\TipoMovimentoController;
use App\Http\Controllers\UnidadeController;
use App\OrdemCompra;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::resource('/categoria', CategoriaController::class);
Route::resource('/unidade', UnidadeController::class);
Route::get('/produto/pesquisa', [ProdutoController::class,'pesquisa']);
Route::resource('/produto', ProdutoController::class);
Route::resource('/contato', ContatoController::class);
Route::resource('/tipomovimento', TipoMovimentoController::class);
Route::resource('/localizacao', LocalizacaoController::class);
Route::get('/produtolocalizacao/listaPorProduto/{id}', [ProdutoLocalizacaoController::class, 'listaPorProduto']);
Route::resource('/produtolocalizacao', ProdutoLocalizacaoController::class);
Route::resource('/entrada', EntradaController::class);
Route::resource('/saida', SaidaController::class);
Route::resource('/movimento', MovimentoController::class);
Route::resource('/solicitacaocotacao', SolicitacaoCotacaoController::class);
Route::get('/solicitacaocotacao/excluir/{id}/{idSolicitacao}', [SolicitacaoCotacaoController::class,'excluir'])->name('solicitacaocotacao.excluir');
Route::resource('/solicitacao', SolicitacaoController::class);
Route::resource('/cotacao', CotacaoController::class);
Route::get('/cotacao/finalizar/{id}', [CotacaoController::class,'finalizar'])->name('cotacao.finalizar');
Route::resource('/fornecedorcotacao', FornecedorCotacaoController::class);
Route::get('/fornecedorcotacao/excluir/{id}', [FornecedorCotacaoController::class,'excluir'])->name('fornecedorcotacao.excluir');
Route::resource('/ordemcompra', OrdemCompraController::class);
Route::resource('/itemordemcompra', ItemOrdemCompraController::class);
Route::get('/ordemcompra/finalizar/{id}', [OrdemCompra::class,'finalizar'])->name('ordemcompra.finalizar');
Route::get('/ordemcompra/aprovar/{id}', [OrdemCompra::class,'aprovar'])->name('ordemcompra.aprovar');



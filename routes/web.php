<?php




Route::get('/', 'HomeController@index')->name('home');
Route::resource('/categoria', 'CategoriaController');
Route::resource('/unidade', 'UnidadeController');
Route::get('/produto/pesquisa', 'ProdutoController@pesquisa');
Route::resource('/produto', 'ProdutoController');
Route::resource('/contato', 'ContatoController');
Route::resource('/tipomovimento', 'TipoMovimentoController');
Route::resource('/localizacao', 'LocalizacaoController');
Route::get('/produtolocalizacao/listaPorProduto/{id}', 'ProdutoLocalizacaoController@listaPorProduto');
Route::resource('/produtolocalizacao', 'ProdutoLocalizacaoController');
Route::resource('/entrada', 'EntradaController');
Route::resource('/saida', 'SaidaController');
Route::resource('/movimento', 'MovimentoController');
Route::resource('/solicitacaocotacao', 'SolicitacaoCotacaoController');
Route::get('/solicitacaocotacao/excluir/{id}/{idSolicitacao}', 'SolicitacaoCotacaoController@excluir')->name('solicitacaocotacao.excluir');
Route::resource('/solicitacao', 'SolicitacaoController');
Route::resource('/cotacao', 'CotacaoController');
Route::get('/cotacao/finalizar/{id}', 'CotacaoController@finalizar')->name('cotacao.finalizar');
Route::resource('/fornecedorcotacao', 'FornecedorCotacaoController');
Route::get('/fornecedorcotacao/excluir/{id}', 'FornecedorCotacaoController@excluir')->name('fornecedorcotacao.excluir');
Route::resource('/ordemcompra', 'OrdemCompraController');
Route::resource('/itemordemcompra', 'ItemOrdemCompraController');



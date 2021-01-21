<?php




Route::get('/', 'HomeController@index')->name('home');
Route::resource('/categoria', 'CategoriaController');
Route::resource('/unidade', 'UnidadeController');
Route::get('/produto/pesquisa', 'ProdutoController@pesquisa');
Route::resource('/produto', 'ProdutoController');
Route::resource('/contato', 'ContatoController');
Route::resource('/tipomovimento', 'TipoMovimentoController');
Route::resource('/localizacao', 'LocalizacaoController');
Route::resource('/produtolocalizacao', 'ProdutoLocalizacaoController');
Route::resource('/entrada', 'EntradaController');


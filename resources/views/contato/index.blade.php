@extends('template')

@section('conteudo')

<div class="col-9 central mb-3">
    <div class="rows">
                <div class="col-12">
               <div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
                    <span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Lista de contato </span>
                    <div>
                        <a href="{{ route('contato.create') }}" class="btn btn-verde mx-1 d-inline-block"><i class="fas fa-plus-circle"></i> Adicionar novo</a>
                        <a href="" class="btn btn-laranja filtro mx-1 d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>
                    </div>
                </div>

                    <div class="px-2 pt-2">
                        <form name="busca" action="" method="GET">
                        <div class="mostraFiltro bg-padrao mt-2 p-2 radius-4">
                             <div class="rows p-3">
                                <div class="col-4 mb-3">
                                        <span class="text-label text-branco">Nome</span>
                                        <input type="text" name="produto" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                        <span class="text-label text-branco">Email</span>
                                        <input type="text" name="produto" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-4 mb-3">
                                        <span class="text-label text-branco">CPF</span>
                                        <input type="text" name="produto" value="" placeholder="Digite aqui..." class="form-campo">
                                </div>
                                <div class="col-3 mb-3 check">
                                        <span class="text-label text-branco mb-1">Selecionar</span>
                                        <input type="checkbox" name="" value="" id="cliente"><label for="cliente"> </label>
                                        <span class="text-branco d-inline-block"> Cliente</span>
                                </div>
                                <div class="col-3 mb-3 check">
                                        <span class="text-label text-branco mb-1">Selecionar</span>
                                        <input type="checkbox" name="" value="" id="fornecedor"><label for="fornecedor"> </label>
                                        <span class="text-branco d-inline-block"> Fornecedor</span>
                                </div>
                                <div class="col-3 mb-3 check">
                                        <span class="text-label text-branco mb-1">Selecionar</span>
                                        <input type="checkbox" name="" value="" id="transportador"><label for="transportador"></label>
                                        <span class="text-branco d-inline-block"> Trasportador</span>
                                </div>
                                 <div class="col-2 pt-1 mt-1">
                                      <input type="submit" value="Pesquisar" class="btn btn-laranja text-uppercase">
                                  </div>
                            </div>
                        </div>
                         </form>
                    </div>
                </div>
        <div class="col-12">
            <div class="px-2 pb-4">
                <table cellpadding="0" cellspacing="0" id="dataTable" width="100%">
                        <thead>
                                <tr>
                                        <th align="center">Id</th>
                                        <th align="center">Nome</th>
                                        <th align="center">Email</th>
                                        <th align="center">Telefone</th>
                                        <th align="center">Ação</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($contatos as $contato)
                            <tr>
                                <td align="center">{{ $contato->id }}</td>
                                <td align="left">{{ $contato->nome }}</td>
                                 <td align="left">{{ $contato->email }}</td>
                                 <td align="left">{{ $contato->celular }}</td>
                                <td align="center">
                                     <a href="index.php?link=9" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
                                 </td>
                             </tr>
                            @endforeach

                        </tbody>
                </table>
        </div>

                                    <!-- qunado não hover pedido

                                    <div class="caixa p-2">
                                        <div class="msg msg-verde">
                                        <p><b><i class="fas fa-check"></i> Mensagem de boas vindas</b> Parabéns seu produto foi inserido com sucesso</p>
                                        </div>
                                        <div class="msg msg-vermelho">
                                        <p><b><i class="fas fa-times"></i> Mensagem de Erro</b> Houve um erro</p>
                                        </div>
                                        <div class="msg msg-amarelo">
                                        <p><b><i class="fas fa-exclamation-triangle"></i> Mensagem de aviso</b> Tem um aviso pra você</p>
                                        </div>
                                    </div>
                                    -->
                                </div>

            </div>
        </div>
@endsection

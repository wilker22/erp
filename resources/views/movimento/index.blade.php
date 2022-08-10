@extends('template')

@section('conteudo')
    <div class="col-9 central mb-3">
        <div class="rows">
            <div class="col-12">
                <div class="caixa">
                    <div
                        class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
                        <span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Historico de movimentação
                        </span>
                        <div>
                            <a href="" class="btn btn-laranja filtro mx-1 d-inline-block"><i class="fas fa-filter"></i>
                                Filtrar</a>
                        </div>
                    </div>

                    <form name="busca" action="" method="GET">

                        <div class="px-2 pt-2">
                            <div class="mostraFiltro bg-padrao mt-2 p-2 radius-4">
                                <div class="rows">
                                    <div class="col-4 mb-2">
                                        <label class="text-label d-block text-branco">Data 1 </label>
                                        <input type="date" name="categoria" value="" class="form-campo">
                                    </div>
                                    <div class="col-4 mb-2">
                                        <label class="text-label d-block text-branco">Data 2 </label>
                                        <input type="date" name="categoria" value="" class="form-campo">
                                    </div>
                                    <div class="col-4 mb-2">
                                        <label class="text-label d-block text-branco">Produto </label>
                                        <select class="form-campo">
                                            <option>opção</option>
                                            <option>opção</option>
                                        </select>
                                    </div>
                                    <div class="col-4 mb-2">
                                        <label class="text-label d-block text-branco">Tipo de movimentação </label>
                                        <select class="form-campo">
                                            <option>opção</option>
                                            <option>opção</option>
                                        </select>
                                    </div>
                                    <div class="col-4 mb-2">
                                        <label class="text-label d-block text-branco">Entrada e saída </label>
                                        <select class="form-campo">
                                            <option>opção</option>
                                            <option>opção</option>
                                        </select>
                                    </div>
                                    <div class="col-2 mt-1 pt-1">
                                        <input type="submit" value="Pesquisar" class="btn btn-roxo text-uppercase">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12">
                <div class="px-2">
                    <div class="tabela-responsiva pb-4">
                        <table cellpadding="0" cellspacing="0" id="dataTable" width="100%">
                            <thead>
                                <tr>
                                    <th align="center">Id</th>
                                    <th align="center">Data</th>
                                    <th align="left">Produto</th>
                                    <th align="center">Valor</th>
                                    <th align="center">qtde</th>
                                    <th align="center">Subtotal</th>
                                    <th align="center">Tipo</th>
                                    <th align="center">Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center">1</td>
                                    <td align="center">15/09/2019</td>
                                    <td align="center">Panela</td>
                                    <td align="center">100,00</td>
                                    <td align="center">2</td>
                                    <td align="center">100,0</td>
                                    <td align="center">100,0</td>
                                    <td align="center">werrtr</td>
                                </tr>
                                <tr>
                                    <td align="center">1</td>
                                    <td align="center">15/09/2019</td>
                                    <td align="center">Panela</td>
                                    <td align="center">100,00</td>
                                    <td align="center">2</td>
                                    <td align="center">100,0</td>
                                    <td align="center">100,0</td>
                                    <td align="center">werrtr</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>


                <!--
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

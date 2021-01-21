@extends('template')

@section('conteudo')

<div class="col-9 central mb-3">
    <div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
      <span class="d-flex center-middle"><i class="fas fa-arrow-right mr-1"></i>  FILTRAR ENTRADA AVULSA </span>
       <div>
          <a href="" class="btn btn-laranja filtro mx-1 d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>
      </div>
  </div>
  <form action="" method="Post">
      <div class="rows">

          <div class="col-12 mb-3">
              <form name="busca" action="" method="post">
              <div class="px-3">
                    <div class="mostraFiltro bg-padrao mt-2 p-2 radius-4">
                    <div class="rows">
                              <div class="col-3">
                                  <label class="text-label d-block text-branco">Data 1</label>
                                  <input type="date" name="categoria" value="" class="form-campo">
                              </div>
                              <div class="col-3">
                                  <label class="text-label d-block text-branco">Data 2</label>
                                  <input type="date" name="categoria" value="" class="form-campo">
                              </div>
                              <div class="col-4">
                                  <label class="text-label d-block text-branco">Produto</label>
                                  <select class="form-campo">
                                      <option>Opção</option>
                                      <option>Opção</option>
                                      <option>Opção</option>
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


          <div class="col-12">
              <div class="caixa mb-3 border mt-3">
                  <div class="h5 bg-title2 d-inline-block width-100 py-1 px-3 text-branco text-uppercase">
                      <span class="d-inline-block"><i class="fas fa-arrow-right"></i> Itens do pedido </span>
                  </div>
                  <div class="col-12 mb-3">
                  <div class="border p-3 radius-4 pb-4">
                      <div class="rows">
                          <div class="col-6 position-relative">
                              <label class="text-label">Produto</label>
                              <input type="text" name="produto" id="produto" value="" class="form-campo">

                          </div>
                          <div class="col-2">
                              <label class="text-label">Valor</label>
                              <input type="text" name="" value="" class="form-campo">
                          </div>
                          <div class="col-2">
                              <label class="text-label">Qtde</label>
                              <input type="text" name="" value="" class="form-campo">
                          </div>

                          <div class="col-2 mt-1 pt-1">
                             <input type="submit" value="Inserir" class="btn btn-verde width-100">
                          </div>
                      </div>
                      </div>

                  </div>
                  <div class="col-12 mb-3">
                      <div class="border p-1 radius-4 pb-4">
                          <div class="tabela-responsiva sm tborder tborder pb-3">
                                  <table cellpadding="0" cellspacing="0" class="mb-0 table-bordered">
                                      <thead>
                                         <tr>
                                            <th align="center">ID</th>
                                            <th align="center">Data</th>
                                            <th align="left" width="290">Produto</th>
                                            <th align="center">Qtde</th>
                                            <th align="center">Valor</th>
                                            <th align="center">Subtotal</th>
                                          </tr>
                                      </thead>
                                      <tbody id="lista_solicitacao">

                                          @foreach ($lista as $entrada)
                                            <tr>
                                                <td align="center">{{ $entrada->id }}</td>
                                                <td align="center">{{ $entrada->data_entrada }}</td>
                                                <td align="center">{{ $entrada->produto }}</td>
                                                <td align="center">{{ $entrada->qtde_entrada }}</td>
                                                <td align="center">{{ $entrada->valor_entrada }}</td>
                                                <td align="center">{{ $entrada->subtotal_entrada }}</td>
                                            </tr>
                                          @endforeach

                                           <tr>
                                               <td align="right" colspan="6"><b>Total:</b> <span class="text-verde minimo-font" id="total_entrada">R$ {{ $soma }}</span></td>
                                          </tr>
                                      </tbody>
                                  </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</form>
</div>

@endsection

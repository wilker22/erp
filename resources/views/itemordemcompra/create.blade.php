@extends("template")
@section("conteudo")
<div class="col-9 central mb-3">
<div class="rows">
	<div class="col-12">

    <div class="rows">
        <div class="col-12">
            <div class="caixa">
				<div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
					<span class="d-flex center-middle" id="id_ordem"><i class="fas fa-search mr-1"></i> Ordem de Compra: {{$ordem->id}} </span>
                    <a href="{{route('ordemcompra.index')}}" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                </div>
                </div>
                    <div class="py-4 px-4">
                        <div class="rows text-escuro">
										<div class="col-3 px-1 d-flex">
												<div class="px-3 py-4 border radius-4 width-100">
														<i class="fas fa-users pequeno-font float-left mr-1 text-padrao"></i>
														<small>Nome do Fornecedor</small>
														<h4 style="line-height:1rem">{{ $ordem->nome }}</h4>
												</div>
										</div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
                                                    <i class="fas fa-calendar-alt pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Data Emissão</small>
                                                    <h4>{{ $ordem->data_emissao }}</h4>
                                            </div>
                                       </div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
                                                    <i class="far fa-clock pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Data Aprovação</small>
                                                    <h4>{{ $ordem->data_aprovacao }}</h4>
                                            </div>
                                       </div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
                                                    <i class="fab fa-bitcoin pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Total</small>
                                                    <h4>R$ <span id="total_ordem">{{ $ordem->valor_total }}</span> </h4>
                                            </div>
                                       </div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
													<i class="fas fa-map-marker-alt  pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Status</small>
                                                    <h4>{{ $ordem->status_ordem_compra }}</h4>
                                            </div>
                                       </div>
						</div>
                    </div>
            </div>
        </div>

        <div class="col-12 mb-4">
            <div class="caixa border radius-4">
            <span class="p-2 bg-title text-light text-uppercase h4 mb-0 text-branco"><i class="far fa-list-alt"></i> Dados do Pagamento</span>

            <div class="caixa">
					<div class="col-12 mb-3">
                            <div class="border p-3 radius-4 pb-4">
                                <div class="rows">
                                    <div class="col-4 position-relative">
										<label class="text-label">Produto</label>
										<input type="text" id="produto" value="" class="form-campo">

                                    </div>
                                    <div class="col-2">
										<label class="text-label">Preço</label>
										<input type="text" id="preco" value="" class="form-campo">
                                    </div>
                                    <div class="col-1">
										<label class="text-label">Qtde</label>
										<input type="text" value="1" id="qtde" class="form-campo">
                                    </div>


                                    <div class="col-2 mt-1 pt-1">
                                    	<input type="hidden" id="id_produto" name="id_produto">
										<input type="button" name="Submit" class="btn btn-verde width-100" value="Inserir" id="btnInserirItemOrdemCompra">
                                    </div>
                                </div>
                                </div>

                            </div>

			</div>
        </div>
	</div>


            <div class="col-12">
                    <div class="caixa border radius-4">
                    <span class="p-2 bg-title text-light text-uppercase h4 mb-0 text-branco"><i class="far fa-list-alt"></i> Itens do Pedido</span>
                    <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0" class="table-bordered">
                                    <thead>
                                            <tr>
    											  <th align="center">Item</th>
    											  <th align="left" width="290">Produto</th>
    											  <th align="center">Qtde</th>
    											  <th align="center">Valor</th>
    											  <th align="center">Subtotal</th>
    											  <th align="center" width="70">Excluir</th>
    											</tr>
                                    </thead>
                                    <tbody id="lista_item_ordem_compras">
                                    @foreach ($itens as $item)
                                    <tr>
                                        <td align="center">{{ $item->id }}</td>
                                        <td align="left" width="290">{{ $item->produto }}</td>
                                        <td align="center">{{ $item->qtde }}</td>
                                        <td align="center">{{ $item->valor }}</td>
                                        <td align="center">{{ $item->subtotal }}</td>
                                        <td align="center"><a href="javascript:;" onclick="excluir_item_ordem_compra(this)" data-id="{{$item->id}}" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i></a>                                </td>
                                        </tr>

                                       <tr>
                                           <td align="right" colspan="6"><b>Total:</b> <span class="text-verde minimo-font" id="total_entrada">R$ {{ $ordem->valor_total }}</span></td>
                                      </tr>
                                    @endforeach

                                    </tbody>
                            </table>

                    </div>

                     <div class="caixa p-2">
                        <div class="caixa-rodape">
							<a href="" class="btn btn-vermelho btn-medio d-inline-block">Excluir</a>
							<input type="hidden" value="" name="id_ordem" />
							<a href="{{ route('ordemcompra.finalizar', $ordem->id)}}" class="btn btn-verde btn-medio d-inline-block">Finalizar</a>
						</div>
                    </div>


            </div>

    </div>



    </div>

</div>
</div>
<script>
    var id_ordem = {{ $ordem->id }}
</script>


  @endsection

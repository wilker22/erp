<div class="col-9 central mb-3">
<div class="rows">
	<div class="col-12">
            <div class="rows">
            <div class="col-12">
				<div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
                <span class="d-flex center-middle">	<i class="fas fa-search mr-1"></i> Dados do Pedido: 10	</span>
				<a href="<?php echo "pedido" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
				</div>
                    <div class="py-4 px-4">
                        <div class="rows text-escuro">										
										<div class="col-3 px-1 d-flex">
												<div class="px-3 py-4 border radius-4 width-100">
                                                <i class="fas fa-users pequeno-font float-left mr-1 text-padrao"></i>
                                                <small>Nome do Cliente</small>
                                                <h4 style="line-height:1rem">Manoel Jailton</h4>
                                        </div>
										</div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
                                                    <i class="fas fa-calendar-alt pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Data</small>
                                                    <h4>10/02/2020</h4>
                                            </div>
                                       </div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
                                                    <i class="far fa-clock pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Hora</small>
                                                    <h4>10:10:10</h4>
                                            </div>
                                       </div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
                                                    <i class="fab fa-bitcoin pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Total</small>
                                                    <h4>R$ 100</h4>
                                            </div>
                                       </div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
													<i class="fas fa-map-marker-alt  pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Origem</small>
                                                    <h4>Web</h4>
                                            </div>
                                       </div>
						</div>
                    </div>
            </div>
        </div>
    </div>


       <div class="col-12 px-4">
                    <div class="caixa border radius-4">
					<span class="p-2 bg-title text-light text-uppercase h4 mb-0 text-branco"><i class="far fa-list-alt"></i> Itens do Pedido</span>
                    <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0" class="table-bordered">
                                    <thead>
                                            <tr>
                                                    <th align="center">ID</th>
                                                    <th align="center">Origem</th>
                                                    <th align="left" width="290">Produto</th>
                                                    <th align="center">Preço</th>
                                                    <th align="center">Qtde</th>                                                    
                                                    <th align="center">Estoque</th>                                                    
                                                    <th align="center">Subtotal</th>
                                                    
                                            </tr>
                                    </thead>
                                    <tbody>
                                         
                                    <tr>
                                            <td align="center">1</td>
                                            <td align="center">Web</td>	
                                            <td align="left">Produto</td>
                                            <td align="center">R$ 100</td>
                                            <td align="center">2</td>                                                    
                                            <td align="center">200</td>                                                    
                                            <td align="center">R$ 120</td>	

                                    </tr>
                                   
                                            <tr>
                                                <td align="right" colspan="7" ><b>Total:</b> <span class="text-verde minimo-font">R$ 120</span></td>
                                            </tr>	
                                    </tbody>
                            </table>
                          
                    </div>
                    
                    
                    <div class="caixa p-2">
                   
                        <div class="caixa-rodape">
                        <a href="<?php echo "pedido/recusar/"  ?>" class="btn btn-amarelo btn-medio d-inline-block">Recusar</a>
                        <a href="<?php echo "pedido/excluir/"  ?>" class="btn btn-vermelho btn-medio d-inline-block">Excluir</a>
                        <a href="<?php echo "pedido/verificar_pedido/"  ?>" class="btn btn-verde btn-medio d-inline-block">Liberar</a>
                   
                    </div>
                    </div>
                    
                 
                    </div>

                   
            </div>

    </div>
</div>

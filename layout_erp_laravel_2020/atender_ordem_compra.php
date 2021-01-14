<script type="text/javascript" src="assets/js/js_financeiro.js"></script>
<div class="col-9 central mb-3">
<div class="rows">
	<div class="col-12">	
   <form action="<?php echo "ordemcompra/aprovar/" ?>" method="post">
    <div class="rows">	
        <div class="col-12">
            <div class="caixa">
				<div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
					<span class="d-flex center-middle"><i class="fas fa-search mr-1"></i> Ordem de Compra: 2 </span>			
                    <a href="<?php echo "pedido" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                </div>
                </div>
                    <div class="py-4 px-4">
                        <div class="rows text-escuro">										
										<div class="col-3 px-1 d-flex">
												<div class="px-3 py-4 border radius-4 width-100">
														<i class="fas fa-users pequeno-font float-left mr-1 text-padrao"></i>
														<small>Nome do Fornecedor</small>
														<h4 style="line-height:1rem">dsds</h4>
												</div>
										</div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
                                                    <i class="fas fa-calendar-alt pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Data Emissão</small>
                                                    <h4>10/02/2020</h4>
                                            </div>
                                       </div>
                                       <div class="col d-flex">	
                                            <div class="px-3 py-4 border radius-4 width-100">
                                                    <i class="far fa-clock pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Data Aprovação</small>
                                                    <h4>10/02/2020</h4>
                                            </div>
                                       </div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
                                                    <i class="fab fa-bitcoin pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Total</small>
                                                    <h4>R$ 2000</h4>
                                            </div>
                                       </div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
													<i class="fas fa-map-marker-alt  pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Status</small>
                                                    <h4>em espera</h4>
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
				<div class="px-4">
				<div class="rows pt-3 pb-4">
					<div class="col-4 mb-3">
						<label class="text-label">Pode Parcelar</label>
						<select class="form-campo" name="parcelamento" id="parcelamento" onchange="forma_parcelamento()">
							<option value="0">&#192; Vista</option>
							<option value="7">Sim, Semanalmente</option>
							<option value="15">Sim, Quinzenalmente</option>
							<option value="30">Sim, Mensalmente</option>
							<option value="60">Sim, Bimestralmente</option>
							<option value="90">Sim, Trimestralmente</option>
							<option value="180">Sim, Semestralmente</option>
							<option value="360">Sim, Anualmente</option>

						</select>
					</div>
					<div class="col-2 mb-3">
						<label class="text-label">Qtde Parc</label>
						<input type="number" min="1" name="qtde_parcela" id="qtde_parcela" onchange="calcParcela()" value="1" class="form-campo">
					</div>
					
					<div class="col-3 mb-3">
						<label class="text-label">Data 1ª Parcela</label>
						 <input type="date" name="data_primeira_parcela" value="<?php echo date("Y-m-d") ?>" id="data_primeira_parcela" class="form-campo">												
					</div>
					<div class="col-3 mb-3">
						<label class="text-label">Valor 1ª Parcela</label>
						<input type="text" name="valor_primeira_parcela" value="100" onkeyup="calcPrimeiraParcela()" id="valor_primeira_parcela" class="form-campo">												
					</div>
					<div class="col-3 mb-3">
						<label class="text-label">Data demais Parcelas</label>
						 <input type="date" name="data_demais_parcela" id="data_demais_parcela" class="form-campo">												
					</div>                
					<div class="col-3 mb-3">
						<label class="text-label">Valor outras Parcelas</label>
						 <input type="text" name="valor_outras_parcelas" id="valor_outras_parcelas" class="form-campo">												
					</div>					
					<div class="col-3">
							<label class="text-label">Forma de Pagamento</label>
							<select class="form-campo" name="forma_pagto">

								<option value='1'  > 01</option>
								<option value='1'  > 01</option>
								<option value='1'  > 01</option>
							</select>
					</div>						
					<div class="col-3">
						<label class="text-label">Valor</label>
						 <input type="text" name="valor_total" id="valor_total" ReadOnly="true"  class="form-campo">												
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
                                                    <th align="center">ID</th>
                                                    <th align="left" width="380">Produto</th>
                                                    <th align="center">Preço</th>
                                                    <th align="center">Qtde</th>                                                    
                                                    <th align="center">Subtotal</th> 
                                                    
                                            </tr>
                                    </thead>
                                    <tbody>
                                  
                                   
                                    <tr>
                                            <td align="center">1</td>	
                                            <td align="left">teste</td>
                                            <td align="center">R$ 100</td>
                                            <td align="center">10</td>  
                                            <td align="center">R$ 1000</td>
                                                             
                                      
                                            <tr>
                                                    <td align="right" colspan="9" ><b>Total:</b> <span class="text-verde minimo-font">R$ 100,00</span></td>
                                            </tr>	
                                    </tbody>
                            </table>
                          
                    </div>
                    
                     <div class="caixa p-2">                   
                        <div class="caixa-rodape">
							<a href="<?php echo "ordemcompra/recusar/" ?>" class="btn btn-amarelo btn-medio d-inline-block">Recusar</a>
							<a href="<?php echo "saida/excluir/"  ?>" class="btn btn-vermelho btn-medio d-inline-block">Excluir</a>
							<!-- <a href="<?php echo "ordemcompra/aprovar/" ?>" class="btn btn-verde btn-medio d-inline-block">Aprovar Ordem de Compra</a>-->
                        
							<input type="hidden" value="" name="id_ordem" />
							<input type="submit" value="Aprovar Ordem de Compra" class="btn btn-verde btn-medio d-inline-block" />                   
						</div>
                    </div>

                   
            </div>

    </div>
        
        

    </div>
   </form>
</div>
</div>
</div>


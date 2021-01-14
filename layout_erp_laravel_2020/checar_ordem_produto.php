<script type="text/javascript" src="<?php echo URL_BASE ?>/assets/js/js_saida.js"></script>
<div class="col-9 central mb-3">
<div class="rows">
		<div class="col-12">
					<div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
                           <span class="d-flex center-middle"><i class="far fa-arrow-alt-circle-right mr-1"></i> Ordem de Produção</span>							
                            <a href="<?php echo URL_BASE ."produto" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                    </div>            
				<div class="px-4 mt-3">
					<div class="rows border radius-4">
						<div class="col-12 p-2">
							   <div class="rows">
									<?php 
										echo "<div class='col-12'><span class='msg msg-vermelho d-block'><i class='fas fa-exclamation-triangle h4 mb-0'></i>  Existem 4 itens com falta de estoque, por favor providencie a compra dos mesmos  </span></div>";
									
										echo "<div class='col-12'><span class='msg msg-verde d-block'><i class='fas fa-check'></i> Todos os produtos necessários para a produção existem no estoque, clique no botão pra iniciar e autorizar a produção</span></div>";
									
								?>
									
							</div>
				
						</div>
					
				    <div class="col-12 mt-3 bg-title3 border-top p-2">
						
						<a href="<?php echo URL_BASE ."ordemproducao/gerar_solicitacoes/"  ?>" class="btn btn-laranja btn-medio d-inline-block">Solicitar Produtos Faltantes</a>						
						
                        <a href="<?php echo URL_BASE ."ordemproducao/liberar_ordem_producao/"  ?>" class="btn btn-verde btn-medio d-inline-block">Liberar Ordem de Produção</a>
                   
                    </div>
					</div>
              </div>
        </div>
			
            <div class="col-12 px-4 mt-4 mb-5">
                    <div class="caixa border radius-4">
                    <span class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco"><i class="far fa-list-alt"></i> Itens da Ordem</span>
					<div class="p-3">					
									
						<div class="tabela-responsiva sm tborder mb-3">
								<table cellpadding="0" cellspacing="0" class="table-bordered">
										<thead>
										<tr>
											<td colspan="5" class="bg-title"><strong class="h5 mb-0 text-uppercase py-1 px-1"><i class="fas fa-arrow-right"></i> Produto: Produto 01</strong></td>
										</tr>
												<tr>
													<th align="center">ID</th>
													<th align="left" width="490">Produto</th>
													<th align="center">Estoque</th>
													<th align="center">Qtde</th> 
													<th align="center">Situação</th> 

												</tr>
										</thead>
									<tbody>                                                                                       
										 
										<tr>
											<td align="center">1</td>	
											<td align="left">Insumo 01</td> 
											<td align="center">100</td> 
											<td align="center">10</td>                    
											<td align="center">Em falta</td> 

										</tr>
									</tbody>
								</table>							  
						</div>
						
						
						<div class="tabela-responsiva sm tborder">
								<table cellpadding="0" cellspacing="0" class="table-bordered">
										<thead>
										<tr>
												<td colspan="5" class="bg-title"><strong class="h5 mb-0 text-uppercase py-1 px-1"><i class="fas fa-arrow-right"></i> Produto: Produto 02</strong></td>
										</tr>
												<tr>
													<th align="center">ID</th>
													<th align="left" width="490">Produto</th>
													<th align="center">Estoque</th>
													<th align="center">Qtde</th> 
													<th align="center">Situação</th> 

												</tr>
										</thead>
									<tbody>                                                                                       
										 
										<tr>
											<td align="center">1</td>	
											<td align="left">Insumo 01</td> 
											<td align="center">100</td> 
											<td align="center">10</td>                    
											<td align="center">Em falta</td> 

										</tr>
									</tbody>
								</table>							  
						</div>
                     
                  </div> 

                   
            </div>

    </div>
</div>
</div>
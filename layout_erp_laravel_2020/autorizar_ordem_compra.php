<script type="text/javascript" src="assets/js/js_financeiro.js"></script>
<div class="col-9 central mb-3">
<div class="rows">
	<div class="col-12">	
   <form action="<?php echo "ordemcompra/aprovar/" ?>" method="post">
   
       <div class="caixa">
		<div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
                    <span class="d-flex center-middle"><i class="fas fa-search mr-1"></i> Ordem de Compra  </span>
                    <a href="<?php echo "pedido" ?>" class="btn btn-verde btn-pequeno float-right "><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
                </div>
                    <div class="py-4 px-4">
                        <div class="rows text-escuro">											
                                <div class="col-3 px-1 d-flex">
												<div class="px-3 py-4 border radius-4 width-100">
                                                <i class="fas fa-users pequeno-font float-left mr-1 text-padrao"></i>
                                                <small>Nome do Fornecedor</small>
                                                <h4 style="line-height:1rem">nome</h4>
                                        </div>
                                </div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
                                                    <i class="fas fa-calendar-alt pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Data Emissão</small>
                                                    <h4>12/12/2020</h4>
                                            </div>
                                       </div>
                                       <div class="col d-flex">
                                            <div class="px-3 py-4 border radius-4 width-100">
                                                    <i class="far fa-clock pequeno-font float-left mr-1 text-padrao"></i>
                                                    <small>Data Aprovação</small>
                                                    <h4>21/02/2020</h4>
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
                                                    <small>Status</small>
                                                    <h4>Em andamento</h4>
                                            </div>
                                       </div>
						</div>
                    </div>
            </div>
        </div> 

        <div class="col-12 px-4 mb-4">
                    <div class="caixa">
                    <span class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco "><i class="far fa-list-alt"></i> Itens da Ordem de Compra</span>
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
                                   <?php 
                                    $i=1;
                                   for($i=0; $i<3;$i++){  ?> 
                                    <tr>
                                        <td align="center"><?php echo $i++ ?></td>	
                                        <td align="left">Produto 01</td>
                                        <td align="center">R$ 100</td>
                                        <td align="center">2</td>  
                                        <td align="center">R$ 200</td>
                                    </tr>
                                   <?php } ?>
                                       <tr>
                                           <td align="right" colspan="9" ><b>Total:</b> <span class="text-verde minimo-font">R$ 400</span></td>
                                       </tr>	
                                    </tbody>
                            </table>
                          
                    </div>
                    
                    

                   
            </div>

    </div>
                
        
        <div class="col-12 px-4 mb-3">
            <div class="caixa">
            <span class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco "><i class="far fa-list-alt"></i> Dados do Pagamento</span>
                
            <div class="tabela-responsiva">
                            <table cellpadding="0" cellspacing="0" class="table-bordered">
                                    <thead>
                                            <tr>
                                                    <th align="center">Parcela</th> 
                                                    <th align="left" >Emissão</th>
                                                    <th align="center">Vencimento</th>
                                                    <th align="center">Valor</th> 
                                                    
                                            </tr>
                                    </thead>
                                    <tbody>
                                   <?php 
                                   
                                  for($j=0; $j<3;$j++){  ?> 
                                    <tr>
                                            <td align="center">1</td> 
                                            <td align="left">10/02/2020</td>
                                            <td align="center">20/02/2020</td>  
                                            <td align="center">R$ 100</td>  
                                                             
                                           
                                    </tr>
                                   <?php } ?>
                                            <tr>
                                                    <td align="right" colspan="9" ><b>Total:</b> <span class="text-verde minimo-font">R$ 100</span></td>
                                            </tr>	
                                    </tbody>
                            </table>
                          
                    </div>



        </div>
		<div class="bg-title3">                   
            <div class="p-2">
                <a href="<?php echo "ordemcompra/recusar/"  ?>" class="btn btn-amarelo btn-medio d-inline-block">Recusar</a>
                <a href="<?php echo "ordemcompra/excluir/"  ?>" class="btn btn-vermelho btn-medio d-inline-block">Excluir</a>
                <a href="<?php echo "ordemcompra/autorizar/" ?>" class="btn btn-verde btn-medio d-inline-block">Autorizar Ordem de Compra</a>
            </div>
        </div>

   </form>
</div>
</div>
</div>

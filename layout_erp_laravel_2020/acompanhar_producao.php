<script type="text/javascript" src="assets/js/js_acompanhamento.js"></script>
<div class="col-9 central mb-3">
<div class="rows">
	<div class="col-12">
		<div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
			<span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Engenharia do Produto </span>
		</div> 	
	<div class="mx-4 mt-4">	
    <form action="<?php echo "nfeproduto/salvar" ?>" method="Post" enctype="multipart/form-data">
						
   
    <div class="">         
	<?php 
		for($i=0;$i<=2;$i++){ 
		
	?>
                    
                    <div class="caixa border radius-4 mb-4 width-100">
					<div class="p-2 py-1 bg-title text-light text-uppercase h5 mb-0 text-branco d-flex justify-content-space-between">
						<span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Engenharia do Produto: Produto </span>
						<a href="<?php echo "ordemproducao/finalizarOrdemProducaoTotal/"  ?>" class="btn btn-verde btn-medio float-right "> <i class="fas fa-check"></i> Finalizar Ordem de Produção</a>
							
					</div> 
                   
                    <div class="p-3">
						<div class="rows pt-3 pb-4">
								   <?php for($j=0;$j<=3;$j++){  ?>
									<div class="col-3 d-flex">
									<div class="border radius-4 width-100">
										<div class="tabela-responsiva sm">
									<table cellpadding="0" cellspacing="0" width="100%" class="table">
										<thead>
											<tr>
												<th align="center" colspan="2" class="p-1 text-branco bg-padrao text-uppercase">Processo 01</th>    
											</tr>
											<tr class="tr-alt">
													<th align="left" class="border-top">Peça</th>    
													<th align="center" class="border-top">Qtde</th>    
											</tr>
										</thead>
										<tbody id="lista_engenharia">
										<?php for($k=0;$k<=2;$k++){  ?>
												<tr>                                                 
														<td>insumo 01</td>   
														<td align="center">10</td>   

									</tr>
										<?php } ?>
									  <tr> 
										   <td align="center"><a href="javascript:;" 
												   data-idItemOrdemProducao="1" 
												   data-idEtapaProducao ="1" 
												   data-idOpcao ="I" 
												   onclick="inicio(this)" class="btn btn-pequeno btn-azul d-table p-1">Início</a>
										   </td>
										   <td align="center"><a href="javascript:;" 
												   data-idItemOrdemProducao="1" 
												   data-idEtapaProducao ="1" 
												   data-idOpcao ="F" 
												   onclick="inicio(this)"  class="btn btn-pequeno btn-verde d-block p-1">Finalizar</a>
										   </td>
									  </tr>
								</tbody>
							</table>
						</div>	
						<div class="p-2">
								<span id="<?php echo "etapa"  ?>">
								<?php
										
												echo "<span class='msg msg-azul p-0 d-block text-center h6'> <i class='fas fa-check'></i> Iniciado</span>";
										
												echo "<span class='msg msg-verde p-0 d-block text-center h6'> <i class='fas fa-check'></i> Finalizado</span>";
										
												echo "<span class='msg msg-amarelo p-0 d-block text-center h6'><i class='fas fa-exclamation-triangle'></i> Não Iniciado</span>";
									   
								?>
								</span>

						</div>							
						</div>
				</div>

				<?php } ?>							

				</div>
			</div>                  
			<div class="caixa-rodape bg-title3 p-2 border-top">
					<a href="<?php echo "pedidoproducao/atender_pedido/"  ?>" class="btn btn-azul btn-medio d-inline-block">Iniciar Todos </a>
					<a href="<?php echo "pedidoproducao/atender_pedido/"  ?>" class="btn btn-verde btn-medio d-inline-block">Finalizar Todos</a>

			</div>

</div>		
  
	
	
<?php } ?>


</form>			
</div>
</div>
</div>
</div>
 
 <script>
	var id_produto = "<?php // echo $produto->id_produto ?>";
 </script>





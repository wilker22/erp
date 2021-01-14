<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistema ERP - mjailton</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale =1">		
		<!--css-->
		
		<link rel="stylesheet" href="/resources/demos/style.css">
		<link rel="stylesheet" href="js/datatables/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="js/datatables/css/responsive.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="css/DataTables_boot.css">
		<link rel="stylesheet" href="css/auxiliar.css">
		<link rel="stylesheet" href="css/grade.css">
		<link rel="stylesheet" href="css/style.css">
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	
<body>

<?php include"cabecalho.php"?>

	<?php include"menu.php"?>
<div class="rows mx-0">

	
		<?php
			 
				@$link = $_GET["link"];
							
				$pag[1] = "home.php";						
				$pag[2] = "lst_categoria.php";						
				$pag[3] = "frm_categoria.php";						
				$pag[4] = "lst_unidade.php";						
				$pag[5] = "frm_unidade.php";						
				$pag[6] = "lst_produto.php";						
				$pag[7] = "frm_produto.php";						
				$pag[8] = "lst_estado.php";						
				$pag[9] = "frm_estado.php";						
				$pag[10] = "lst_contato.php";						
				$pag[11] = "frm_contato.php";						
				$pag[12] = "lst_usuario.php";						
				$pag[13] = "lst_permissoes.php";						
				$pag[14] = "lst_tabela.php";						
				$pag[15] = "frm_tabela.php";						
				$pag[16] = "lst_acao.php";						
				$pag[17] = "lst_solicitacao.php";						
				$pag[18] = "lst_cotacao.php";						
				$pag[19] = "lst_ordemcompra.php";						
				$pag[20] = "detalhe_ordemcompra.php";						
				$pag[21] = "frm_ordemcompra.php";						
				$pag[22] = "entradaavulsa.php";						
				$pag[23] = "lst_insumo.php";						
				$pag[24] = "lst_ordemproducao.php";						
				$pag[25] = "lst_historicomovimento.php";						
				$pag[26] = "ver_extrato.php";						
				$pag[27] = "listar_ordemcompra.php";						
				$pag[28] = "lst_pedidos.php";							
				$pag[29] = "lst_contasareceber.php";						
				$pag[30] = "lst_contasapagar.php";							
				$pag[31] = "lst_pedidos_saida.php";						
				$pag[32] = "atender_ordem_compra.php";						
				$pag[33] = "atender_pedido.php";						
				$pag[34] = "checar_ordem_produto.php";						
				$pag[35] = "acompanhar_producao.php";						
				$pag[36] = "autorizar_ordem_compra.php";						
				$pag[37] = "lst_tipo_movimento.php";						
				$pag[38] = "frm_tipo_movimento.php";						
				$pag[39] = "lst_localizacao.php";						
				$pag[40] = "lst_produto_localizacao.php";						
														
				
				if (!empty($link))
				{
					
					if (file_exists($pag[$link]))
					{
						
						include $pag[$link];
					}
					else
					{						
						
						include "home.php";
					}
				}
				else
				{					
					include "home.php";
				}			
			
			?>
	
	
</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/tinymce/tinymce.min.js"></script>
	<script src="js/datatables/js/jquery.dataTables.min.js"></script>
	<script src="js/datatables/js/dataTables.responsive.min.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.mask.js"></script>
	<script src="js/js.js"></script>
	
	
	<!-- Graphs -->
    <script src="js/chart.js/Chart.min.js"></script>
	<script src="js/funcao.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
	  $( function() {
		$( "#tab" ).tabs();
	  } );
  </script>
</body>
	
</html>
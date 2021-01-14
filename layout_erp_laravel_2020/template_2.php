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
	
<body class="template2">


	<?php include"cabecalho.php"?>

	<?php include"menu.php"?>
	<?php
			 
				@$link = $_GET["link"];
							
				$pag[1] = "inserir_solicitacao.php";								
								
				
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
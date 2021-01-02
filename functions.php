<!DOCTYPE html>


 <html>
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
	  <title>Todos resultados</title>
	  <link rel="stylesheet" type="text/css" href="template/vendor/bootstrap/css/jquery.dataTables.css">
	  <link rel="stylesheet" type="text/css" href="template/vendor/bootstrap/css/select.dataTables.css">
	  <link rel="stylesheet" type="text/css" href="template/vendor/bootstrap/css/shCore.css">
	  <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="template/vendor/bootstrap/css/csss.css" rel="stylesheet">    
	  
	  <style type="text/css" class="init"></style>
	  <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
	  <script type="text/javascript" language="javascript" src="template/vendor/bootstrap/js/jquery.dataTables.js"></script>
	  <script type="text/javascript" language="javascript" src="template/vendor/bootstrap/js/dataTables.select.js"></script>
	  <script type="text/javascript" language="javascript" src="template/vendor/bootstrap/js/shCore.js"></script>
	  <script type="text/javascript" language="javascript" src="template/vendor/bootstrap/js/demo.js"></script>
	  <script type="text/javascript" language="javascript" class="init">
		 
		   $(document).ready(function() {
			  $('#minhatabela').DataTable( {
				select: {
				  style: 'multi'
				}
			  } );
		   
			

			$('#minhatabela tbody').on( 'click', 'tr', function () {
						$(this).toggleClass('selected');
				} );
				
								$(document).ready(function(){
						$('#btgerarcarteira').click(function(){
							var table = $('#minhatabela').DataTable();
							var data = table.rows(['.selected']).data().toArray();
							
							$.post( 'carteira/gerarcarteirinha.php', { 'rel':data } ,function(data, status){
									$('#corpohtml').html(data);
							});
				
							/*
							$.ajax({
							  type: 'POST',
							  url: 'gerarcarteirinha.php',
							  data: {'rel':data},
							  success: function(data) {
								$('#').append(data);
								alert(data);
							  }
							});
							*/
						});
					});
								
				/*EDITAR CARTEIRINHA */
							$(document).ready(function(){
						$('#btEdit').click(function(){
							var table = $('#minhatabela').DataTable();
							var data = table.rows(['.selected']).data().toArray();
							
							$.post( 'carteira/editar_carteira.php', { 'rel':data } ,function(data, status){
									$('#corpohtml').html(data);
							});
							
					});
					});
				
				/*$('#btgerarcarteira').click( function (e, dt, indexes) {
					var table = $('#minhatabela').DataTable();
					var data = table.rows(['.selected']).data().toArray();
					var dadosEmJson = alert(JSON.stringify( data ));
					$.ajax({
							  method: "POST",
							  url: "gerarcarteirinha.php",
								data: {'rel':dadosEmJson}
							})
							  .done(function( msg ) {
								  
								alert( "Data Saved: " +msg );
							  });
				} );*/
				
			
				
		} );
			
	  </script>
	</head>
	<body id="corpohtml" class="dt-example">

	<!-- CABEÇALHO -->
	<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		<div class="container">
		  <img height="70" src="../img/logo3.png">
		  <div class="collapse navbar-collapse" id="navbarExample">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item">
				<a class="nav-link" href="pagin1.html">Return</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
	

	<!-- CONTEÚDO DA PÁGINA -->
	  <div class="container">
		<section>
		
		  <br><br><br><br><br>
		  
		  <h2 align="center">Resultados da consulta:</h2>
		  
		  <div class="demo-html"></div>
		  <table id="minhatabela" class="display" cellspacing="0" width="100%">
			  <thead>  
						   <tr>
							   
							   <td>Nome:</td>  
							   <td>Curso:</td>  
							   <td>Codigo de matrícula:</td>  
							   <td>Ano do processo seletivo:</td>  
						   
						   </tr>  
					</thead> 
				   
					<tbody>

					<?php

 if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		


		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {


	          /* $sql = "INSERT into employeeinfo (emp_id,firstname,lastname,email,reg_date) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";*/
                   
				   echo '<tr>';  
						
						echo '<td>'.$getData[0].'</td>';  
						echo '<td>'.$getData[1].'</td>';  
						echo '<td>'.$getData[2].'</td>';  
						echo '<td>'.$getData[3].'</td>';  
						echo '</tr>'; 
			
	         }
			
	         fclose($file);	
		 }
	}	 
	
	


 ?>
					
					</tbody>
					<tr><td rowspan="2" ></td></tr>
					</table> <center><button id="btgerarcarteira">editar</button>
					<button id="btEdit">cadastrar</button></center>
					    
		  </section>
		  <br>
		  
		  	<footer style="position: absolute; bottom: 0px; width: 100%; height: 10px; color: black;">
			<center>
				<hr>
					<p>Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul - Câmpus Ibirubá<br>
						Rua Nelsi Ribas Fritsch, 1111 | Bairro Esperança | CEP: 98200-000 | Ibirubá/RS<br>
							E-mail: comunicacao@ibiruba.ifrs.edu.br | Telefone: (54) 3324-8100</p>
			</center>
		</footer>
		</div> 
		
	
	  

	 
	  
	 
					
	  <!--ESSE SCRIPT DA ERRO NA TABELA

		<script src="../template/vendor/jquery/jquery.min.js"></script>

	  -->

	  <!-- Bootstrap core JavaScript -->
	  <script src="..//template/vendor/jquery/jquery.min.js"></script>
	  <script src="..//template/vendor/tether/tether.min.js"></script>
	  <script src="..//template/vendor/bootstrap/js/bootstrap.min.js"></script>

	</body>
	</html>
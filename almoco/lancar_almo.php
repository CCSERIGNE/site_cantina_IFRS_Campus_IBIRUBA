
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>Cadastrar Almoço</title>
 
  <!-- Bootstrap core CSS -->
  <link href="../template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../template/vendor/bootstrap/css/csss.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <!-- Custom styles for this template -->
  
  <style>
							<!-- tabela almoço-->				
						table {
								font-family: arial, sans-serif;
								border-collapse: collapse;
								width: 100%;
							}

							td, th {
								border: 1px solid #dddddd;
								text-align: left;
								padding: 8px;
								color:green;
							}

							tr:nth-child(even) {
								background-color: #dddddd;
							}
						
    
  </style>
</head>

<body class="dt-example">

<!-- Navigation -->
  <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
    
    <div class="container">
      <img height="70" src="../img/logo3.png">
      <div class="collapse navbar-collapse" id="navbarExample">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
           <a class="nav-link" href="../administrador/Administracao.html"></a>
		   </li>
        </ul>
      </div>
    </div>
  </nav>
 
 
			<div   id="signupbox"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<br><br><br><br><br>
                    <div   style="background-color: #fff; border-color: green; " class="panel panel-info">
                        <div style="background-color: #fff; border-color: green; " class="panel-heading">
                            <div style="color:green;" class="panel-title">Lançar Almo&ccedil;o</div>
                        </div>  
                        <div  class="panel-body" >
                            <form  method="POST" action="almo_lancado.php" action="lancar_almo.php" id="signupform" class="form-horizontal" role="form">
                                <tr><td rowspan="2" ></td></tr>
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erro:</p>
                                    <span></span>
                                </div>
                               <!--  <div class="form-group">
                                    <label style="color:green;" for="suscard" class="col-md-3 control-label">ID Cantina:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="id_cantna" placeholder="ID_CANTINA" value="875655">
                                    </div>
                                </div> --> 
										<div class="form-group">
                                    <label style="color:green;" for="email" class="col-md-3 control-label">Nº Matrícula:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="matricula" placeholder="Matrícula aluno">
										
                                    </div>
                                </div>
													<!-- PEGAR HORARIO ATUAL -->
													<?PHP
                                date_default_timezone_set('America/Sao_paulo');
								//echo 'Agora em IBIRUBA é: <strong>'. date('d/m/Y H:i:s').'</strong><br /><br />';
										$TT =date('d/m/Y');
										//echo ($TT);?>
								
                                <div class="form-group">
                                    <label style="color:green;" for="firstname" class="col-md-3 control-label">Horário  Atual:</label>
                                    <div class="col-md-9">
											<?php echo'
                                        <input type="time" class="form-control" name="hora_ini" placeholder="" value="'.date('H:m:s').'">
											';?>
									</div>
                                </div>
                              
                                
                                <div class="form-group">
                                    <label style="color:green;" for="password" class="col-md-3 control-label">Data Almo&ccedil;o</label>
                                    <div class="col-md-9">
									<?php echo'
                                        <input type="date_default_timezone_set(America/Sao_paulo);" class="form-control" name="data_almo" min="2008-01-01" placeholder="" value ="'.date('Y/m/d').'">
                                      '; ?>
                                    </div>
                                </div>
                                
 
                               <!-- <div class="form-group">
                                     Button                                       
                                    <div style="color:green;" style="margin: right;"  class="col-md-offset-3 col-md-9">
                                        <button style="color:green;"  type="submit" class="btn btn-info"><i class="icon-hand-right"></i> Cadastrar</button>
										
                                    </div>
                                </div>-->
                                 <div style="color:green;" style="margin: right;"  class="col-md-offset-3 col-md-9">
									<tr><td rowspan="2" ></td></tr>
                                    <center><button style="color:green;"  type="submit" >Validar </button>         <button > <a style="color:green;" href="../cantina/Cantina.html" >Cancelar</a></button></center>
										
										
                                    </div>
                                       
                            </form>
								 
                         </div>
                    </div>
											
	
        
    </div>
											<!--TABLE ALMOÇO -->
											
											<?php
											$matricula = (isset($_POST['matricula'])) ? $_POST['matricula'] : '';
											

												include '../connection.php';
													
															$result = mysqli_query($conn, "SELECT foto, nome, cod_matricula FROM aluno JOIN almoco on mat_aluno = cod_matricula  LIMIT 1  ");
															if(!$result){
																die("Erro nao seleciono : " );
															}
											

												?>
						
						<br><br><br><br><br>
					<center><h5 style="color:green;">ULTIMO ALMOÇO LANÇADO </h5>	<table>
								  <tr>
									<th>Foto</th>
									<th>Matricula</th>
									<th>Nome</th>
								  </tr>
										<?php  

									
								   
						while($dados= mysqli_fetch_array($result) ){ 
						
					 
						echo '<tr>';  
						echo '<td>';
						if( $dados['foto'] == '' ) 
							echo '<img style="width : 80px; height :65px"  src="../imagens/fotos_alunos/default.png">'; 
						else 
							echo '<img style="width : 80px; height :65px" src="../imagens/fotos_alunos/'.$dados['foto'].'">';

						echo '</td>';
						 
						  
						echo '<td>'.$dados['cod_matricula'].'</td>';  
						echo '<td>'.$dados['nome'].'</td>'; 
						 
						echo '</tr>'; 
						
						
						
						
						
						}  
					?>  
								  
								</table></center>
	
							
	
	
	<footer style="position: absolute; bottom: 0px; width: 100%; height: 120px; color: green;">
		<center>
		<hr>
			<p>Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul - Câmpus Ibirubá<br>
					Rua Nelsi Ribas Fritsch, 1111 | Bairro Esperança | CEP: 98200-000 | Ibirubá/RS<br>
							E-mail: comunicacao@ibiruba.ifrs.edu.br | Telefone: (54) 3324-8100</p>
		</center>
	</footer>

	
	<!-- Bootstrap core JavaScript -->
  <script src="template/vendor/jquery/jquery.min.js"></script>
  <script src="template/vendor/tether/tether.min.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
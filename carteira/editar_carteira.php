<?php 
	include ('funcao_Carteirinha.php');
	
		header('Cache-Control: no-cache, must-revalidate'); 
		header('Content-Type: application/json; charset=utf-8');
		header('Content-Type: text/html; charset=utf-8');// para formatar corretamente os acentos

		$arr = $_POST['rel'];
		

		echo  '<OS DADOS ESTAO RECEBENDO CORECTAMENTO NA PAGINA GERAR CARTEIRINHA>';
		//print_r($arr);
?>

<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>Cadastrar</title>
 
  <!-- Bootstrap core CSS -->
  <link href="../template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../template/vendor/bootstrap/css/csss.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <!-- Custom styles for this template -->
  
  <style>

    
  </style>
</head>

<body class="dt-example">

<!-- Navigation -->
  <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon">aaaa</span> </button>
    <div class="container">
      <img height="70" src="../img/logo3.png">
      <div class="collapse navbar-collapse" id="navbarExample">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="todoscarteirar.php"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
				<div   id="signupbox"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			
                    <div  style="background-color: #fff; border-color: green; " class="panel panel-info">
                        <div style="background-color: #fff; border-color: green; " class="panel-heading">
                            <div style="color:green;" class="panel-title">Editar  Aluno</div>
                        </div>  
						<div  class="panel-body" >
						<?php
							
							header('Cache-Control: no-cache, must-revalidate'); 
								header('Content-Type: application/json; charset=utf-8');
								header('Content-Type: text/html; charset=utf-8');// para formatar corretamente os acentos

								$arr = $_POST['rel'];
								
								$c=0;
								for($i=0;$i<count($arr);$i++){
									
								
									echo '<div  class="panel-body" >';
							
 
                         echo   '<form  method="POST" action="carteira/aluno_editado.php" id="signupform" class="form-horizontal" role="form">';
                                
                              echo'  <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erro:</p>
                                    <span></span>
                                </div>';
                               echo'  <div class="form-group">
                                    <label style="color:green;" for="suscard" class="col-md-3 control-label">Nº Matricula</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="matricula" placeholder="'.$arr[$i][3].'" value ="'.$arr[$i][3].'">
                                    </div>
                                </div>  ';                                
                          echo'      <div class="form-group">
                                    <label style="color:green;" for="firstname" class="col-md-3 control-label">Nome Completo</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nome" value="'.$arr[$i][1].'">
                                    </div>
                                </div>';
                         echo' <!-- <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">CPF</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="cpf" placeholder="Apenas números, ex: 00011122233">
                                    </div>
                                </div>-->';
                                
                               echo' <div class="form-group">
                                    <label style="color:green;" for="email" class="col-md-3 control-label">Curso</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="curso"  placeholder="'.$arr[$i][2].'"><br>
										<label style="color:green;" name="stat_alu"  control-label">Statu Aluno    </label>
										<select name="statu_alu">
										  <option value="1">Cursando</option>
										  <option value="3">Formado</option>
										  <option value="2">Trancado</option>
										  <option value="4">Canclado</option>
										</select>
										
										</div>
										
                                    
                                </div>';
								
                               echo' <div class="form-group">
                                    <label style="color:green;" for="password" class="col-md-3 control-label">Ano Ingresso</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="ano_seletivo" min="2008-01-01" placeholder="'.$arr[$i][4].'">
                                    </div>
                                </div>';
                               echo' <!-- <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Repita a Senha</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd2" placeholder="">
                                    </div>
                                </div>-->';
 
                               echo' <div class="form-group">
                                    <!-- Button -->                                        
                                    <div style="color:green;" style="margin: right;"  class="col-md-offset-3 col-md-9">
									<tr><td rowspan="2" ></td></tr>
                                    <center><button style="color:green;"  type="submit" ">Validar</button>      <button > <a style="color:green;" href="todoscarteirar.php" >Cancel</a></button></center>
										
										
                                    </div>
                                </div>';
                                
                              echo'<!-- <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <!--<div class="col-md-offset-3 col-md-9">
                                        <a id="btn-fbsignup" type="button" href="todoscarteirar.php" >Cadastre-se com o Facebook</a>
                                    </div> -->';
						
					        	
               echo' </div>' ;  
															
                          echo' </form>';
								}?>	 
							
                         </div>
                    </div>
        
    </div>
	
	<!-- Bootstrap core JavaScript -->
  <script src="template/vendor/jquery/jquery.min.js"></script>
  <script src="template/vendor/tether/tether.min.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
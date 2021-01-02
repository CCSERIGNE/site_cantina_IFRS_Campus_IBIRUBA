

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
  
  
  <!-- segunada form-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
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
            <a class="nav-link" href="../logar.php"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
 
			<div   id="signupbox"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<br><br><br><br><br>
                    <div  style="background-color: #fff; border-color: green; " class="panel panel-info">
                        <div style="background-color: #fff; border-color: green; " class="panel-heading">
                            <div style="color:green;" class="panel-title">Cadastrar Aluno:</div>
                        </div>  
                        <div  class="panel-body" >
                            <form  method="POST" action="alunocadastrado.php" id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erro:</p>
                                    <span></span>
                                </div>
                                 <div class="form-group">
                                    <label style="color:green;" for="suscard" class="col-md-3 control-label">Nº de Matrícula:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="matricula" placeholder="Matrícula aluno">
                                    </div>
                                </div>                                  
                                <div class="form-group">
                                    <label style="color:green;" for="firstname" class="col-md-3 control-label">Nome Completo:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nome" placeholder="Nome de aluno completo">
                                    </div>
                                </div>
                               <!-- <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">CPF</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="cpf" placeholder="Apenas números, ex: 00011122233">
                                    </div>
                                </div>-->
                                
                                
                                <div class="form-group">
                                    <label style="color:green;" for="password" class="col-md-3 control-label">Ano de Ingresso:</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="ano_seletivo" min="2008-01-01" placeholder="Data ex:(03/14/2014)">
                                        
                                    </div>
                                </div>
								<div class="form-group">
								<center><label style="color:green;" name="stat_alu" for="password" class="col-md-3 control-label">Status do Aluno:</label></center>
									<div class="col-md-9">
									<select name="statu_alu">
										  <option value="1">Cursando</option>
										  <option value="3">Formado</option>
										  <option value="2">Trancado</option>
										  <option value="4">Cancelado</option>
										</select></div><br>
										<br>
                                    <label style="color:green;" for="email" class="col-md-3 control-label">Curso</label>
                                    <div class="col-md-9">
									
									<!--<input type="text" class="form-control" name="curso" placeholder="info ex:(numero)"> -->
									<select name="curso">
										  <option value="2">Informática</option>
										  <option value="3">Mecânica</option>
										  <option value="1">Agropecuária</option>
										</select>
										
									<!-- <input rowspanpan="3" type="checkbox" name="curso" value="2" checked> 
									 <input type="checkbox" name="curso" value="2"> Mecanica  
									 <input type="checkbox" name="curso" value="other"> Other-->
									
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <select name="statu_alu">
										  <option value="1">Cursando</option>
										  <option value="3">Formado</option>
										  <option value="2t">Trancado</option>
										  <option value="4">Canclado</option>
										</select>
                                </div>-->
 
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div style="color:green;" style="margin: right;"  class="col-md-offset-3 col-md-9">
									<tr><td rowspan="2" ></td></tr>
                                       <center> <button style="color:green;"  type="submit" class="">Cadastrar</button>    <button style="color:green;"  class=""> <a style="color:green;" href="../asistencia/asistencia.html" >Cancelar</a></button></center></center>
										
                                    </div>
                                </div>
                                
                               <!-- <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">-->
                                    
                                  <!--  <div class="col-md-offset-3 col-md-9">-->
                                        <!--<button id="btn-fbsignup" type="button" href="asistencia.html" class="btn btn-primary"><i class="icon-facebook"></i>   Cadastre-se com o Facebook</button>
                                    </div> -->
                                    <!--<div style="float:center; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="../asistencia/asistencia.html" onclick="$('#signupbox').hide(); $('#loginbox').show()">VOLTAR  <<<</a></div>    -->                                    
                                        
										
									
                                </div>         
                            </form>
								 					
                         </div>
						 
				  <form class="form-horizontal" action="../functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>

                        <!-- Form Name 
                       <center> <legend style=" color: green;" >Importa CSV</legend></center>-->

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton" style=" color: green;">Importa </label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <center><label class="col-md-4 control-label" for="singlebutton" style=" color: green;"> Exportar </label></center>
                            <div class="col-md-4">
                               <button type="submit" id="submit" name="Import" style=" color: green;"  data-loading-text="Loading...">Exportar</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
						 
						 

         </div>

	<br><br><br>
	<footer style="position: absolute; bottom: 0px; width: 100%; height: 65px; color: green;">
		<center>
		<hr>
	<br><br><br>
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
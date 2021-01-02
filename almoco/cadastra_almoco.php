
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>Cadastrar Almo&ccedil;o</title>
 
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
    
    <div class="container">
      <img height="70" src="../img/logo3.png">
      <div class="collapse navbar-collapse" id="navbarExample">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
           <a class="nav-link" href="../administrador/Administracao.html">Return</a>
		   </li>
        </ul>
      </div>
    </div>
  </nav>
 
 
			<div   id="signupbox"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<br><br><br><br><br>
                    <div  style="background-color: #fff; border-color: green; " class="panel panel-info">
                        <div style="background-color: #fff; border-color: green; " class="panel-heading">
                            <div style="color:green;" class="panel-title">Cadastrar Almo&ccedil;o</div>
                        </div>  
                        <div  class="panel-body" >
                            <form  method="POST" action="almo_cadastrado.php" id="signupform" class="form-horizontal" role="form">
                                <tr><td rowspan="2" ></td></tr>
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erro:</p>
                                    <span></span>
                                </div>
                                 <div class="form-group">
                                    <label style="color:green;" for="suscard" class="col-md-3 control-label">Valor do Almo&ccedil;o:</label>
                                    <div class="col-md-9">
                                        <input type="" class="form-control" name="valor" placeholder="Valor em R$">
                                    </div>
                                </div>                                  
                                <div class="form-group">
                                    <label style="color:green;" for="firstname" class="col-md-3 control-label">Horario de Início:</label>
                                    <div class="col-md-9">
                                        <input type="time" class="form-control" name="hora_ini" placeholder="Horário">
                                    </div>
                                </div>
                              
                                
                                <div class="form-group">
                                    <label style="color:green;" for="email" class="col-md-3 control-label">Horário final:</label>
                                    <div class="col-md-9">
                                        <input type="time" class="form-control" name="hora_fim" placeholder="Horário final">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style="color:green;" for="password" class="col-md-3 control-label">Data Almo&ccedil;o:</label>
                                    <div class="col-md-9">
                                        <input type="date"  class="form-control" name="data_almo" min="01-01-2008"  placeholder="Data ex:(03/14/2014)">
                                       
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
                                    <center><button style="color:green;"  type="submit" ">Cadastrar </button>         <button > <a style="color:green;" href="../administrador/Administracao.html" >Cancelar</a></button></center>
										
										
                                    </div>
                                       
                            </form>
								 
                         </div>
                    </div>
        
    </div>
	
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
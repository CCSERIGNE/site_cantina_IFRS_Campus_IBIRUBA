<!DOCTYPE html>
<?php
 $con = mysqli_connect("localhost", "root", "","testebdcant5na" );
    if (!$con){
        die("Erro : ".mysqli_connect_error());
    }
    
            $result = mysqli_query($con, "SELECT `nome`, `id_curso`, `cod_matricula`, `ano_seletivo` FROM `aluno` ");
            if(!$result){
                die("Erro nao seleciono : " );
            }

?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
  <title>Tela de resultados</title>
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
        } );
	
  </script>
</head>
<body class="dt-example">

<!-- CABEÇALHO -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="container">
      <img height="70" src="img/logo3.png">
      <div class="collapse navbar-collapse" id="navbarExample">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
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
                           <td>ID do curso:</td>  
                           <td>Codigo de matrícula:</td>  
                           <td>Ano do processo seletivo:</td>  
                       
                       </tr>  
                </thead> 
               
                <tbody>

                <?php  

                   
                 
                               
                    while($dados= mysqli_fetch_array($result) ){  

                    echo '  
                          <tr>  
                            <td>'.$dados['nome'].'</td>  
                            <td>'.$dados['id_curso'].'</td>  
                            <td>'.$dados['cod_matricula'].'</td>  
                            <td>'.$dados['ano_seletivo'].'</td>  
                          </tr>  
                          ';  
                    }  
                ?>  

                </tbody>

                </table> 
      
    </div>
  </section>

  <!--ESSE SCRIPT DA ERRO NA TABELA

    <script src="../template/vendor/jquery/jquery.min.js"></script>

  -->

  <!-- Bootstrap core JavaScript -->
  <script src="template//vendor/tether/tether.min.js"></script>
  <script src="template//vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<?php?>
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
</head>
<body>
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
<div class="display" cellspacing="0" width="100%">

		<?php 
		$login = $_POST['login'];
		$entrar = $_POST['entrar'];
		$senha = md5($_POST['senha']);
		$connect = mysql_connect('localhost','root','');
		$db = mysql_select_db('testebdcant5na');
					if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM login WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }
?>
</div>


</body>
</html>
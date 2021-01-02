<?php header("Content-Type: text/html; charset=ISO-8859-1",true) ?>
<html lang="cs">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8">
    	<title>Sistema Cantina</title>
    	<link rel="stylesheet" type="text/css"  href="estilo.css" />
	<script type="text/javascript" src="/D0DD046C3C484C7797C0CD761D553BC6/02C3D7A4-CFB5-194F-A0D0-6617B998EC90/main.js" charset="UTF-8"></script></head>
	<title>LOGIN</title>
</head>
   <body  >

        <hr>

        <div id="intro">
            <div class="inner">
                <div class="wrap clearFix">


			<form id="form1" name="form1" method="post" action="logout.php"  >
				<br / > <br / >
			   <img src="img/logo2.png" width="920px" height="80px" >
  				<div align="right">
      					<input type="submit" name="logout" id="logout" value=" Logout " />
					<br /> <br />
    					</p>
  				</div>
			  </img>

			</form>

                </div>
            </div>
        </div>

        <hr>
 <! ------------------------------------------------ LOGIN ------------------------------------------------!>

		<form action="config/verifica_usuario.php" method="post" > <center>

		<br> <br>

	<fieldset style="width: 35%; margin: 0px auto;">
 		<legend><h3>Usário</h3></legend>
			<font size=4.5>

 			<table cellspacing="10">
 			<tr>


   				<table cellspacing="10">
					<tr>
     						<tr align="center">

							<td> Login: <input type="text" name="login"><br><br></td>
						</tr >

						<tr align="center">
				                	<td> Senha: <input type="password" name="senha"> <br><br><td>

       						</tr>

						<tr align="center">
                    				 	<td> <input type="submit" value="  Login  " class="button"> </td>
						</tr>
                			</tr>
    				</table>

			</tr>
			</table>
	</fieldset>
	</form>

</body>
</html>

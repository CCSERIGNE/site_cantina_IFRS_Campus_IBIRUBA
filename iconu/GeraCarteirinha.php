<?php
session_start();

if (!isset($_SESSION['admlogado'])) {
    header('Location: login.php');
}
?>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true) ?>
<html lang="cs">
   <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8">
    	<title>Sistema Cantina</title>
    	<link rel="stylesheet" type="text/css"  href="estilo.css" />
	<script type="text/javascript" src="/D0DD046C3C484C7797C0CD761D553BC6/02C3D7A4-CFB5-194F-A0D0-6617B998EC90/main.js" charset="UTF-8"></script></head>	<title>Untitled Document</title>
</head>
   <body  >         <hr>
        <div id="intro">
			<form  action="logout.php"  >	<br / > <br / > 						   		<img src="img/logoI.jpg" width="593" height="123" > 						<div align="right">					      							<input type="submit" name="logout" id="logout" value="Logout" />     							  				</div>					  </img>
			</form>	             </div>                    <hr>                   
					
                 <!--------------------------------------- Gerenciamento de Carteirinhas ------------------------------------>  
    
                       
                <!--<h2>Index->Consultar Banco</h2>-->  
                <form action="GeraCarteirinhaClass.php" method="post">
				<h3><strong> Gerar Carteirinhas </strong></h3> <br> <br> <br>
				<center>
				
				<h2>Nome: <input type="text" name="nome"> &nbsp;
				Matrícula: <input type="text" name="mat" onkeypress='return SomenteNumero(event)'> &nbsp;
                Curso: <Select name="curso">
				<option selected value=""> Todos</option>
                    <?php 
                    include("config/conexao.php");
                    $sql = mysql_query("SELECT Nome_Curso FROM Curso") or die(mysql_error());
                    while ($linha = mysql_fetch_array($sql)) {
                        echo '<option value"' . $linha['Nome_Curso'] . '">' . $linha['Nome_Curso'] . '</option>';
                    }
                    ?>
				</Select>
				</h2>

				

				
                <div class="buttonCentered">
                    <input type="submit" value="Consultar" class="button">
                </div>
                </form>
                </center>
                <?php

			include("config/conexao.php");
				$sql="select a.matricula AS mataluno, a.Nome AS nomealuno, c.Status_Curso AS estadocurso, c.Nome_Curso AS cursonome, a.Status as estadoaluno 
										from Aluno a
										join Curso c ON c.Cod_Curso=a.Cod_Curso";
				$res = mysql_query($sql); /*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */

				echo "<div class='container'> <center> <table><tr><td><b>MATRÍCULA</b></td><td><b>NOME DO ALUNO</b></td><td><b>NOME DO CURSO</b></td><td><b>ESTADO</b></td></tr></center> </div>";

					/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
				while($escrever=mysql_fetch_array($res)){
					
				?>
					<!--insiro formulário que enviara os checkbox para gerar as carteiras-->
				<form method='post' action='Carteirinhas/ex1_especifico.php' target='_new'>
					<?php
					/*Escreve cada linha da tabela*/
					
						echo "<tr><td> <center>" . $escrever['mataluno'] . "</center></td><td>" . $escrever['nomealuno'] . "</td><td>" . $escrever['cursonome'] . "</td><td> <center>" . $escrever['estadoaluno'] . "</center></td>
						<td>	<input type='checkbox' name='2_via_".$escrever['mataluno']."[]' value='".$escrever['mataluno']."'
						</td></tr>";

					}/*Fim do while*/

					echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/
				?>
				<BR><BR>
				<center>
				<form method='post' action='Carteirinhas/ex1_especifico.php' target='_new'>
				<input type='submit' name='bt_carteirinhas' value='Gerar Carteirinhas' class="button"><BR><BR>
</form>
</body>
</html>

<?php
/*configurando SQL para excluir os inativos*/
$sql.=" where a.estado='A'";
$_SESSION['sql_carteira']=$sql;
?>
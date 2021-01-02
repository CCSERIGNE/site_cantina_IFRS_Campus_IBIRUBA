<html lang="cs">	

		
<body>   			
          <!--------------------------------------- Carteirinha UM Aluno ------------------------------------>

<form action="carterinha_aluno.php" method="post">
<fieldset style="width: 35%; margin: 0px auto;">
 		<legend><h2>Gerar Carteirinhas</h2></legend> <center>
			<table cellspacing="10">
 			<tr>
   				<table cellspacing="10"> 
					<tr>		
						<td align="center">Nome: <input type="text" name="nome"></td><br><br>
					</tr>
					<tr>
						<td align="center">Matr&iacute;cula <input type="text" name="mat" onkeypress='return SomenteNumero(event)'></td>
					</tr>
					<tr>
						<td align="center"><input type="submit" value="Consultar" class="button"></td>
					</tr>              
 				</table> </center>
			</tr>
			</table>
 
</fieldset>

<?php
	include("config/conexao.php");
		$nome=$_POST["nome"];
		$mat=$_POST["mat"];

		$aluno =mysql_query("SELECT * FROM Aluno WHERE Matricula='$mat' || UPPER(Nome='$nome') ") or die(mysql_error());
		$num = 1;
		echo'<br><br>';	
			echo'<table border="1" align="center">';
			echo'<tr>';
			echo'<td align="middle" width="30"></td>';
			echo'<td align="middle" width="250">Nome </td>';
			echo'<td align="middle" width="90">Matr&iacute;cula </td>';
			echo'<td align="middle"width="200">Curso </td>';
			echo'<td align="middle" width="150"></td>';
			echo'</tr>';                 		
					 while ($exibe = mysql_fetch_assoc($aluno)) {						
                        			echo'<tr>';
						echo'<td align="center" >'.$num.'</td>';
						echo'<td align="right">'.$exibe["Nome"].'</td>';
						echo'<td align="center">'.$exibe["Matricula"].'</td>';
						echo'<td align="right">'.$exibe["Cod_Curso"].'</td>';
						echo'<td align="center"><a href="GeraCarteirinha.php?id='.$exibe["Matricula"].'"><input type="button" name="botao"  value="Gerar"></a></td>';
						echo'</tr>';
						$num += 1;					
	                  		}
				      
			echo'</table>';				
	                  	
?>

</form>
</body>
</html>
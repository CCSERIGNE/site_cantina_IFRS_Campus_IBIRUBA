<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <style>

.page-break {
    display: block;
    page-break-after: always;
}

</style>
	</head>
<body  >
		
<form style="padding-top:-1px;" action=""  >
<br>    
<!-----------------------------------Gerar Carteirinha----------------------------------> 
<?php 
	include ('funcao_Carteirinha.php');
	
		header('Cache-Control: no-cache, must-revalidate'); 
		header('Content-Type: application/json; charset=utf-8');
		header('Content-Type: text/html; charset=utf-8');// para formatar corretamente os acentos

		$arr = $_POST['rel'];
		

		//echo  '<OS DADOS ESTAO RECEBENDO CORECTAMENTO NA PAGINA GERAR CARTEIRINHA>';
		//print_r($arr);
?>

  

<tr >
<?php
$c=0;
				for($i=0;$i<count($arr);$i++){
					
					echo'<table 	align="center" border=""   >';
				
				echo' <tfoot>';
				$numero = $arr[$i][3];
				 
				 echo'<br>';
			   echo '</tfoot>';
				
				
				echo' <thead>
				  <tr><td colspan="3" align="left"><img style=""  width = "260" height="30" src="img/logo4.jpg"></td></tr>
			   </thead>';
			   
					echo'  <tr>
			 <td rowspan="5" width="30" height="50">'.$arr[$i][0].'</td>
				  </tr>';
			echo'<tr><td   align="middle" ></td></tr>';
			
			echo'<tr><td align="left" >Nome :</td><td align="left"  >'.$arr[$i][1].'</td></tr>';
			echo'<tr><td align="left" >Curso :</td><td align="left" >'.$arr[$i][2].'</td></tr>';
			
			echo'<tr><td align="left" >Matr&iacute;cula  :</td><td align="left" >'.$arr[$i][3].'</td></tr>';
			echo'<tr><td align="left" >Ano Selectivo  :</td><td  align="left">'.$arr[$i][4].'</td></tr>';
			echo'<tr><td colspan="3" align="center" >';geraCodigoBarra($numero);echo'</td></tr>';
			 echo'<tr></tr>';
			  
				if($c == 4){
				echo '<div style="page-break-before:always;"> </div>';
					$c = 0;
				}
				$c++;
				 echo'</table >';
			  
							
			}
		?>
		</tr>


</FORM> 
<br>
<script language="Javascript"> function imprimer(){window.print();}</script>
<form action="gerarcarteirinha.php">
<div align="center">
<input name="B1" onclick="imprimer()" type="button" value="Imprimer">
</div>
</form>
</body>                   
</html>

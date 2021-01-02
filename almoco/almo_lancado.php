<?php
		// Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
				  $id_cantna = (isset($_POST['id_cantna'])) ? $_POST['id_cantna'] : '';
				  $matricula = (isset($_POST['matricula'])) ? $_POST['matricula'] : '';
				  $hora_ini = (isset($_POST['hora_ini'])) ? $_POST['hora_ini'] : '';
				  $data_almo = (isset($_POST['data_almo'])) ? $_POST['data_almo'] : '';
							
	if( empty($matricula) || empty($hora_ini) || empty($data_almo)){
						echo "<script>alert('Almoço  não Foi Lançado Com Succeso!');document.location='lancar_almo.php';</script>";				
				
							   
						  }
			else {
		
							//conectar em banco 
  
						include '../connection.php';
 
				$sql ="INSERT INTO almoco(date, mat_aluno, hora_ini) VALUES ('$data_almo','$matricula','$hora_ini')";
			 
			if ($conn->query($sql) === TRUE) {
				
				
			echo "<script>alert('Almoço Foi Lançado Com Succeso!');document.location='lancar_almo.php';</script>";
					
			} else {
			//echo  "  Error: " . $sql . "<br>" . $conn->error;
			
			echo "<script>alert('Erro Na lançamento');document.location='lancar_almo.php';</script>";
			}

			$conn->close();
	}
  		

?>

<?php
		// Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
				  $valor = (isset($_POST['valor'])) ? $_POST['valor'] : '';
				  $hora_ini = (isset($_POST['hora_ini'])) ? $_POST['hora_ini'] : '';
				  $hora_fim = (isset($_POST['hora_fim'])) ? $_POST['hora_fim'] : '';
				  $data_almo = (isset($_POST['data_almo'])) ? $_POST['data_almo'] : '';
							
	if(empty($valor)  || empty($data_almo)){
						echo "<script>alert('Almoço  não Foi Cadastrado Com Succeso!');document.location='cadastra_almoco.php';</script>";				
				
							   
						  }
			else {
		
							//conectar em banco 
  
					include '../connection.php';

			$sql = "INSERT INTO almo_cadas(Dat_almo, valor) 
			VALUES ('$data_almo','$valor')";
			if ($conn->query($sql) === TRUE) {
				
			echo "<script>alert('Almoço  Foi Cadastrado Com Succeso!');document.location='cadastra_almoco.php';</script>";
					
			} else {
			echo  "  Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
	}
  		

?>

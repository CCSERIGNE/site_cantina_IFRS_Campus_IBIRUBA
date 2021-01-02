<?php


//salva as variáveis com o que foi digitado no formulário
  
  
// Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
  $matricula = (isset($_POST['matricula'])) ? $_POST['matricula'] : '';
  $nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
  $curso = (isset($_POST['curso'])) ? $_POST['curso'] : '';
  $ano_seletivo = (isset($_POST['ano_seletivo'])) ? $_POST['ano_seletivo'] : '';
  
  //conectar em banco 
  
         include '../connection.php';

			$sql = "UPDATE aluno SET nome='$nome', id_curso='$curso', cod_matricula='$matricula',ano_seletivo='$ano_seletivo' WHERE cod_matricula='$matricula'";

			if ($conn->query($sql) === TRUE) {
				
			echo "<script>alert('Aluno Foi Cadastrado Com Succeso!');document.location='../todoscarteirar.php';</script>";
					
			} else {
			echo  "  Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			
  

?>
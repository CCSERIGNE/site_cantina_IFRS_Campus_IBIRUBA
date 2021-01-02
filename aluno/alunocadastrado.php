<?php


//salva as variáveis com o que foi digitado no formulário
  
  
// Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
  $matricula = (isset($_POST['matricula'])) ? $_POST['matricula'] : '';
  $nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
  $curso = (isset($_POST['curso'])) ? $_POST['curso'] : '';
  $ano_seletivo = (isset($_POST['ano_seletivo'])) ? $_POST['ano_seletivo'] : '';
  
  if(empty($matricula) || empty($nome) || empty($curso) || empty($ano_seletivo)){
	  
	   header("Location: cadastrealuno.php");
  }
  else {
  //conectar em banco 
  
		include '../connection.php';

			$sql = "INSERT INTO aluno(nome, id_curso, cod_matricula, ano_seletivo) 
			VALUES ('$nome','$curso','$matricula','$ano_seletivo')";

			if ($conn->query($sql) === TRUE) {
				
			echo "<script>alert('Aluno Foi Cadastrado Com Succeso!');document.location='alunocadastrado.php';</script>";
					
			} else {
			echo  "  Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			
  }

?>
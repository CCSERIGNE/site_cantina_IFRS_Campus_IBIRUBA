<?php
$mysqli =  mysqli_connect('localhost', 'root', '', 'testebdcant5na');
				if (!$mysqli){
			die("Erro : ".mysqli_connect_error());
		}
 $page = isset($_GET['p']) ? $_GET['p'] : '' ;

	if($page=='view'){
		$mysqli =  mysqli_connect('localhost', 'root', '', 'testebdcant5na');
				if (!$mysqli){
			die("Erro : ".mysqli_connect_error());
		}
				$result = mysqli_query($mysqli, "SELECT a.foto, a.nome, c.nome_curso , a.cod_matricula, a.ano_seletivo FROM aluno as a JOIN curso as c on a.id_curso = c.id_curso");
				if(!$result){
					die("Erro nao seleciono : " );
				}
		while($dados= mysqli_fetch_array($result) )
		{  
					echo'<tbody>';
						echo '<tr>';  
						echo '<td>';
						if( $dados['foto'] == '' ) {
							echo '<img style="width : 80px; height :65px"  src="imagens/fotos_alunos/default.png">'; 
						}else{ 
							echo '<img style="width : 80px; height :65px" src="imagens/fotos_alunos/'.$dados['foto'].'">';
						}
						echo '</td>';
						echo '<td>'.$dados['nome'].'</td>';  
						echo '<td>'.$dados['nome_curso'].'</td>';  
						echo '<td>'.$dados['cod_matricula'].'</td>';  
						echo '<td>'.$dados['ano_seletivo'].'</td>';  
						echo '</tr>';  
						echo'</tbody>';
			}; 
	}	
else{
	

		// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
		// Note that is just an example. Should take precautions such as filtering the input data.

		header('Content-Type: application/json');

		$input = filter_input_array(INPUT_POST);


		if ($input['action'] == 'edit') {
			$mysqli->query("UPDATE users SET username='" . $input['username'] . "', email='" . $input['email'] . "', avatar='" . $input['avatar'] . "' WHERE id='" . $input['id'] . "'");
		} else if ($input['action'] == 'delete') {
			$mysqli->query("UPDATE users SET deleted=1 WHERE id='" . $input['id'] . "'");
		} else if ($input['action'] == 'restore') {
			$mysqli->query("UPDATE users SET deleted=0 WHERE id='" . $input['id'] . "'");
		}

		mysqli_close($mysqli);

		echo json_encode($input);
	}
?>
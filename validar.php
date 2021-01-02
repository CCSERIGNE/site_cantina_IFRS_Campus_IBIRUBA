<?php
// Inclui o arquivo com o sistema de segurança
require_once("seguranca.php");

// Verifica se um formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Salva duas variáveis com o que foi digitado no formulário
  
  // Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
  $usuario = (isset($_POST['login'])) ? $_POST['login'] : '';
  $senha = (isset($_POST['Senha'])) ? $_POST['Senha'] : '';
  
  // Utiliza uma função criada no seguranca.php pra validar os dados digitados
  if (validaUsuario($usuario, $senha) == true) {
    // O usuário e a senha digitados foram validados, manda pra página interna
	 if ($usuario == 'admin'){
		 header("Location: administrador/Administracao.html");
		}
		 if ($usuario == 'gremio'){
		 header("Location: gremio/gremioMenu2.html");
		}
		 if ($usuario == 'asistencia'){
		 header("Location: asistencia/asistencia.html");
		}
		 if ($usuario == 'cantina'){
		 header("Location: cantina/Cantina.html");
		}
		 if ($usuario == 'teste'){
		 header("Location: pagin1.html");
		}
  } else {
    // O usuário e/ou a senha são inválidos, manda de volta pro form de login
    // Para alterar o endereço da página de login, verifique o arquivo seguranca.php
    expulsaVisitante();
  }
}
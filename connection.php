<?php
	
	//abre conexão mysql
	$conn = mysqli_connect("localhost", "root", "","testebdcant5na" );
	
	//fecha conexão mysql
    if (!$conn){
        die("Erro : ".mysqli_connect_error());
    }
	

?>

<?php
    $con = mysqli_connect("localhost", "root", "","testebdcant5na" );
    if (!$con){
        die("Erro : ".mysqli_connect_error());
    }
    
            $result = mysqli_query($con, "SELECT `nome`, `id_curso`, `cod_matricula`, `ano_seletivo` FROM `aluno` WHERE 2");
            if(!$result){
                die("Erro nao seleciono : " );
            }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ALUNO</title>
		<script src="//code.jquery.com/jquery-1.12.4.js"></script>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<script src="Https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" href="Https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css"/>
		<script src="Https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
		<script $(document).ready(function() {
			$('#example').DataTable();
			} );></script>
    </head>
    <body>
        <div>
            <table id="example" class="table table-striped table-bordered table table-houver" cellspacing="20" width="80%">
        <thead>
            <tr>
                <th>Namo</th>
                <th>Matricula</th>
                <th>Curso</th>
                <th>Ano Seletivo</th>
               
            </tr>
        </thead>
		<tfoot>
            <tr>
                <th>Namo</th>
                <th>Matricula</th>
                <th>Curso</th>
                <th>Ano Seletivo</th>
            </tr>
        </tfoot>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                    <tr>
                        <td><?=$row['nome']?></td>
                        <td><?=$row['cod_matricula']?></td>
                        <td><?=$row['id_curso']?></td>
                        <td><?=$row['ano_seletivo']?></td>
                    </tr>
                        <?php
                    }                    
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>

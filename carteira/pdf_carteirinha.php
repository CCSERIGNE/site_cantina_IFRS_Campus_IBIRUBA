<?php

include('mpdf/mpdf.php');
$aluno=$_POST['aluno'];
$aluno=$_POST['matricula'];


$mpsf = 
	"<html>
		<body>


			echo'OI';

		</body>
	</html>";

$arquivo = "Carteirinha.pdf";
$mpdf = new mPDF();
$MPDF = WhiteHTML($mpsf);
$mpdf->Output($arquivo, 'I');
exit();

?>
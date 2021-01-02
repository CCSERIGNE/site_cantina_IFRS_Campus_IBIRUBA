<?php
	session_start();
	if (!isset($_SESSION['admlogado'])) {
		header('Location: ../login.php');
	}
	require_once("fpdf17/fpdf.php");
	include("../config/conexao.php");
	require('pdf_codabar.php');//para gerar o código de barras
	$pdf=new PDF_Codabar();
	$pdf->AddPage();
	
	/*acréscimo de 60
	$pdf->Codabar(53,50,'7070052');
	$pdf->Codabar(53,110,'7070052');
	$pdf->Codabar(53,170,'7070052');
	$pdf->Codabar(53,230,'7070052');*/
	$pos_cod_bar=50;
	
	$resultado=mysql_query("select a.nome, a.matricula, c.nome as Cnome
							from aluno a
							join curso c ON c.codigo=a.codigo_curso
							where a.estado=\"A\" AND a.estado=\"A\"
							ORDER BY a.nome
							");
	$conttotal=0;
	$contcontrol=0;
	$pos_img=10;
	$add_pos_img=0;
	$pos_line=0;
	while ($linha = mysql_fetch_array($resultado)) {
		$linharight=mysql_fetch_array($resultado);
	//cabeçalho da tabela 
/*for($p=0;$p<4;$p++){	
	$pos_img=32;
	for($i=0;$i<4;$i++){
		if($i==0){
			$add_pos_img=0;
		}else{
			$add_pos_img=169;
		}*/
		
		
		$pos_img=$pos_img+$add_pos_img;
		
		$pdf->SetFont('arial','',8);
		$pdf->SetX(22);
		$pdf->Cell(85,0,"",1,1,'C');
		$pdf->Cell(85,0,"",1,1,'C');
		$pdf->Image('logo_ifrs.jpg',11,$pos_img,9,12);//obtenção do logo
		$pdf->Cell(12,12,'',1,0,'L');//local do logo no documento
		$pdf->Cell(85,4,"Instituto Federal de Educação, Ciência e Tecnologia",0,'C');//nome do instituto
		/*acrescimo de 72 e 48 pontos no plano*/
		$pdf->Line("107",10+$pos_line,"107",22+$pos_line);
		//++++++++++++++++++++++
		$pdf->SetX(122);
		$pdf->Cell(85,0,"",1,1,'C');
		$pdf->SetX(100);
		$pdf->Image('logo_ifrs.jpg',111,$pos_img,9,12);//obtenção do logo
		$pdf->SetX(110);
		/*50, 36*/$pdf->Cell(12,12,'',1,0,'L');//local do logo no documento
		/*225, 12*/
		$pdf->Cell(85,4,"Instituto Federal de Educação, Ciência e Tecnologia",0,'C');//nome do instituto
		//$pdf->Cell(-1,12,'',1,'c');
		$pdf->Line("207",10+$pos_line,"207",22+$pos_line);
		$pdf->Ln(4);
		
		//----------------------
		
		$pdf->SetX(22);
		$pdf->Cell(85,4,"do Rio Grande do Sul",0,'C');
		//---------------------------
		
		$pdf->SetX(122);
		$pdf->Cell(85,4,"do Rio Grande do Sul",0,'C');
		//----------------------
		
		$pdf->Ln(4);
		$pdf->SetX(22);
		$pdf->Cell(85,4,"Câmpus Ibirubá",0,'C');
		
		//------
		$pdf->SetX(122);
		$pdf->Cell(85,4,"Câmpus Ibirubá",0,'C');
		
		//------------
		$pdf->Ln(4);
		
		/*90,120*/$pdf->Cell(33,45,'',1,0,"L");//local para foto

		/*41, 20*/$pdf->Cell(15,7,'  Nome:',1,0,"L");//nome_descricao
		$aux_nome=$linha['nome'];
		$aux_nome=substr($linha['nome'],0,27);
		
		/*49,7*/
		$pdf->Cell(49,7,$aux_nome,1,0,"L");//nome_banco
		
		//++++++++++++++++++++
		$pdf->SetX(110);
		
		/*90,120*/$pdf->Cell(33,45,'',1,0,"L");//local para foto

		/*41, 20*/$pdf->Cell(15,7,'  Nome:',1,0,"L");//nome_descricao
		
		$aux_nome=substr($linharight['nome'],0,27);
		
		/*49,7*/$pdf->Cell(49,7,$aux_nome,1,0,"L");//nome_banco
		//--------------------
		
		/*21*/$pdf->Ln(7);

		$pdf->Cell(33,8,'',0,0,"L");//espaço dentro de foto

		$pdf->Cell(15,7,'Matrícula:',1,0,"L");//matricula_descricao

		$pdf->Cell(28,7,$linha['matricula'],1,0,"L");//matricula_banco
		
		//indicando que é primeira 1ª VIA
		$pdf->Cell(21,7,"1ª VIA",1,0,"L");//
		//++++++++++++++++++++++++
		$pdf->SetX(110);
		$pdf->Cell(33,8,'',0,0,"L");//espaço dentro de foto

		$pdf->Cell(15,7,'Matrícula:',1,0,"L");//matricula_descricao

		$pdf->Cell(28,7,$linharight['matricula'],1,0,"L");//matricula_banco
		//indicando que é primeira 1ª VIA
		$pdf->Cell(21,7,"1ª VIA",1,0,"L");
		//-------------------------

		$pdf->Ln(7);	

		$pdf->Cell(33,3,'',0,0,"L");//espaço dentro de foto

		$pdf->Cell(64,8,$linha['Cnome'],1,0,"L");//nome do curso
		
		//++++++++++++++++
		$pdf->SetX(110);
		$pdf->Cell(33,3,'',0,0,"L");//espaço dentro de foto

		$pdf->Cell(64,8,$linharight['Cnome'],1,0,"L");//nome do curso
		
		//--------------------

		$pdf->Ln(8);
		
		$pdf->Cell(33,20,'',0,0,"L");//espaço dentro de foto

		$pdf->Cell(64,23,'',1,0,"L");//código de barras
		$matricula=$linha['matricula'];
		$pdf->Codabar(53,$pos_cod_bar,$matricula);//aqui imprime código de barras
		
		//+++++++++++++++++++++++
		$pdf->SetX(110);
		$pdf->Cell(33,20,'',0,0,"L");//espaço dentro de foto

		$pdf->Cell(64,23,'',1,0,"L");//código de barras
		$matricula=$linharight['matricula'];
		$pdf->Codabar(155,$pos_cod_bar,$matricula);//aqui imprime código de barras
		//---------------------
		
		$pdf->Ln(26);
		
		
		$conttotal+=1;
		if($conttotal-4==$contcontrol){
			$contcontrol=$conttotal;
			$pos_img=10;
			$pdf->addPage();
			$add_pos_img=0;	
			$pos_cod_bar=50;
			$pos_line=0;		
		}else{
			$pos_line+=60;
			$pos_cod_bar+=60;
			$add_pos_img=60;
		}
		
		
		}
$pdf->Output("carteirinhas.pdf","I");?>
<?php

						// Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
				  $mes = (isset($_POST['mes'])) ? $_POST['mes'] : '';
				  
				  $data_r = (isset($_POST['data_r'])) ? $_POST['data_r'] : '';
							
	if(!empty($mes) || !empty($data_r) ){	
							
					/*TESTAR MES */
			if(($mes)==true){	
							
								$partes = explode("de",$mes,3);
								$dia = $partes[0];
								
								
												//conectar em banco 
					  
									include 'connection.php';
								$month = str_split($dia,3);
								$mess = $month[1];
					 /*$sql = mysqli_query($conn," ");*/
									$result = mysqli_query($conn, "SELECT COUNT(date),date,valor
											FROM almoco
											JOIN almo_cadas on dat_almo = date
											where date like '%$mess%'
											GROUP BY date 
									
									");
													if(!$result){
														die("Erro nao seleciono : " );
													}
				
									
								if ($result == TRUE) {
									/*$busca = mysqli_query($sql);
								echo "<script>document.location='cadastra_almoco.php';</script*/
									
									include ("./MPDF57/mpdf.php");
									$pdf = new mPDF();
									$pdf->Open();
									$pdf->AddPage();
									$pdf->SetTitle('Relatório Mensal');
									$pdf->SetMargins(3,3,20);
									$pdf->SetXY(25, 0);
									$pdf->Image('img/brasao.png' ,90,3,27,0 ,'PNG');
									$pdf->SetFont('Times', 'B', 08);
									$texto="";

									/*configurando cabeçcalho*/
									$x_texto=10;
									$y=26;
									$pdf->SetXY($x_texto, 8+$y);
									$pdf->MultiCell(0, 3, 'Serviço Público Federal', 0,'C');
									$pdf->SetXY($x_texto, 12+$y);
									$pdf->MultiCell(0, 3, 'Ministério da Educação', 0,'C');
									$pdf->SetXY($x_texto, 16+$y);
									$pdf->MultiCell(0, 3, 'Secretária da Educação Profissional e Tecnológica', 0,'C');
									$pdf->SetXY($x_texto, 20+$y);
									$pdf->MultiCell(0, 3, 'Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul', 0,'C');
									$pdf->SetXY($x_texto, 24+$y);
									$pdf->MultiCell(0, 3, 'Câmpus Ibirubá', 0,'C');


									$pdf->SetY(60);
									$x=0;
									$y=0;
									$pdf->MultiCell(0, 3, 'RELATORIO MENSAL', 0,'C');
									$pdf->SetFont('Times', 'B', 08);
									
	

								$pdf->SetFont('Times', 'B', 7,5);
						$pdf->SetXY(30, 73);
						$pdf->Cell(50, 5, 'DATA',1,0,'C');
						$pdf->Cell(50, 5, 'ALMOÇOS',1,0,'C');
						$pdf->Cell(50, 5, 'VALOR/DIA',1,0,'C');
						$soma=0;
						$pdf->SetXY(70, 73);
						$sqlValor  = mysqli_query($conn,"SELECT valor  from almo_cadas ORDER BY dat_almo DESC limit 1 ");
						$valor_almoco = mysqli_fetch_array($sqlValor);
						$somaValorDia = 0;
						$mediaAlmoco = 0;
						$valorgambiarra = $valor_almoco['valor'];
						$valor_almocoVig = number_format($valorgambiarra, 2,',', '.');
	
						 while($dados= mysqli_fetch_array($result) ){
								
							$pdf->ln();
							$pdf->SetX(30);
							$pdf->Cell(50, 5,$dados['date'] , 1,0, 'C');
							$pdf->Cell(50, 5, $dados['COUNT(date)'], 1,0,'C');
							
							
							$valorDia = $valor_almoco['valor'] * $dados['COUNT(date)'];
							$ValorComVirgula = number_format($valorDia, 2,',', '.');	
							$pdf->Cell(50, 5, "R$: $ValorComVirgula ", 1,0,'C');
							$soma=$soma+$dados['COUNT(date)'];
							$somaValorDia = $somaValorDia + $valorDia;	
						}
 
												$ValorComVirgulaSoma = number_format($somaValorDia, 2,',', '.');	
													$mediaAlmoco = $soma / mysqli_num_rows($result)  ;
												 
												$pdf->Ln(15);
												$pdf->SetFont('Times', 'B', 09);
												$pdf->SetX(10);
												
												$pdf->Cell(74,10, "TOTAL GERAL DE ALMOÇOS:", 0,0,'C');
												$pdf->SetX(5);
												$pdf->Cell(150, 10, "$soma", 0,0,'C');
												//$pdf->Line(90,270,140,270);
												$pdf->Line(70,270,130,270);
												$pdf->SetXY(28,211);
												$pdf->Cell(90, 2, "VALOR DO ALMOÇO UNITÁRIO:         R$ $valor_almocoVig",2,0);
												$pdf->SetXY(28,215);
												$pdf->Cell(60, 2, "VALOR TOTAL DE ALMOÇOS:            R$ $ValorComVirgulaSoma   ");
												$pdf->SetXY(28,217);
												$pdf->Cell(60, 5, "MÉDIA DE ALMOÇOS MENSAL:             $mediaAlmoco");
												//$pdf->SetXY(28,150);
												//$pdf->Cell(60, 5, "MÉDIA DE ALMOÇO MENSAL:           $mediarefeicoes");
												$pdf->SetXY(88,278); 
												$pdf->Cell(65, 0, 'Fiscal de contrato');
												//$pdf->Cell(60, 0, 'Assinatura 2');
												$pdf->Output("total_almocos.pdf","I");
									
								} else {
										die("<script>alert('Erro nao seleciono : ');document.location='relatori_almo.html';</script>" );
										}

								$conn->close();
						}			   
											  
								
					
					
					
					
					/*RELATORIO POR DATA*/
				if(($data_r)==true ){	

								$ano = $data_r;
					
							
					
							//conectar em banco 
  
							include 'connection.php';
							
									$stp= str_split($ano, 4);							
									
							$result = mysqli_query($conn, "SELECT COUNT(dat_almo),dat_almo
											FROM almo_cadas 
											WHERE dat_almo like '$stp[0]%'								
												");
									if(!$result){
												die("Erro nao seleciono : " );
												}
							
						if ($result == TRUE) {
							$teste =explode("/",$ano) ;
							  /*date_format(date,"d-m-Y");"<br>";*/
							$stp= str_split($ano, 4);							
							
							
						/*echo "<script>document.location='cadastra_almoco.php';</script>";*/
							include ("./MPDF57/mpdf.php");
									$pdf = new mPDF();
									$pdf->Open();
									$pdf->AddPage();
									$pdf->SetTitle('Relatório Anual');
									$pdf->SetMargins(3,3,20);
									$pdf->SetXY(25, 0);
									$pdf->Image('img/brasao.png' ,90,3,27,0 ,'PNG');
									$pdf->SetFont('Times', 'B', 08);
									$texto="";

									/*configurando cabeçcalho*/
									$x_texto=10;
									$y=26;
									$pdf->SetXY($x_texto, 8+$y);
									$pdf->MultiCell(0, 3, 'Serviço Público Federal', 0,'C');
									$pdf->SetXY($x_texto, 12+$y);
									$pdf->MultiCell(0, 3, 'Ministério da Educação', 0,'C');
									$pdf->SetXY($x_texto, 16+$y);
									$pdf->MultiCell(0, 3, 'Secretária da Educação Profissional e Tecnológica', 0,'C');
									$pdf->SetXY($x_texto, 20+$y);
									$pdf->MultiCell(0, 3, 'Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul', 0,'C');
									$pdf->SetXY($x_texto, 24+$y);
									$pdf->MultiCell(0, 3, 'Câmpus Ibirubá', 0,'C');


									$pdf->SetY(60);
									$x=0;
									$y=0;
									$pdf->MultiCell(0, 3, 'RELATORIO ANUAL', 0,'C');
									$pdf->SetFont('Times', 'B', 08);

											$pdf->SetFont('Times', 'B', 7,5);
											$pdf->SetXY(55, 73);
											$pdf->Cell(50, 5, 'DATAS',1,0,'C');
											$pdf->Cell(50, 5, 'ALMOÇOS',1,0,'C');
											$soma=0;
											$pdf->SetXY(70, 73);

										$dat=str_split($dados['dat_almo'], 4);
										$tt= implode($dat[0]);
										
									 while($dados= mysqli_fetch_array($result) ){
								
										$pdf->ln();
										$pdf->SetX(55);
										$pdf->Cell(50, 5,$stp[0], 1,0, 'C');
										$pdf->Cell(50, 5, $dados['COUNT(dat_almo)'], 1,0,'C');
										$soma=$soma+$dados['COUNT(dat_almo)'];
											
									}
								$pdf->SetFont('Arial', 'B', 10);
								$pdf->Ln(15);
								$pdf->SetX(10);
								$pdf->Cell(85, 5, "TOTAL DE ALMOÇOS REALIZADOS", 0,0,'C');
								$pdf->Cell(110, 5, $soma, 0,0,'C');
								$pdf->Line(40,270,130,270);
								$pdf->Line(90,270,190,270);
								/*$pdf->Line(90,270,140,270);
								$pdf->Line(150,270,200,270);*/
								$pdf->SetXY(70,275);
								$pdf->Cell(70, 0, 'Assinatura 1');
								$pdf->Cell(110, 0, 'Assinatura 2');
								$pdf->Output();
								

							
						} else {
								die("Erro nao seleciono : " );
								}

						$conn->close();
						}						   
									  
						}					
					else {
						echo "<script>alert('NAO TEM NADA DAS CAMPAS!');document.location='relatori_almo.html';</script>";	
							}
								
			
	
	
					
	
			


	?>
	

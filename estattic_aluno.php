				
<?php

			
												//conectar em banco 
					  
								include 'connection.php';
								
					 /*$sql = mysqli_query($conn," ");*/
									$result = mysqli_query($conn, "SELECT COUNT(mat_aluno),date
													FROM almoco
											
											 
									
									");
													if(!$result){
														die("Erro nao seleciono : " );
													}
				
									
								if ($result == TRUE) {
						
							  /*date_format(date,"d-m-Y");"<br>";*/
														
							
							
						/*echo "<script>document.location='cadastra_almoco.php';</script>";*/
							include ("./MPDF57/mpdf.php");
									$pdf = new mPDF();
									$pdf->Open();
									$pdf->AddPage();
									$pdf->SetTitle('Estatic Alunos');
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
									$pdf->MultiCell(0, 3, 'ESTATIC DE ALMOÇOS DOS ALUNOS ', 0,'C');
									$pdf->SetFont('Times', 'B', 08);

											$pdf->SetFont('Times', 'B', 7,5);
											$pdf->SetXY(55, 73);
											$pdf->Cell(50, 5, 'DATA',1,0,'C');
											$pdf->Cell(50, 5, ' ALUNOS ALMOÇADOS',1,0,'C');
											$soma=0;
											$pdf->SetXY(70, 73);

										
										
									 while($dados= mysqli_fetch_array($result) ){
										$stp= str_split($dados['date'], 4);
										$pdf->ln();
										$pdf->SetX(55);
										$pdf->Cell(50, 5,$stp[0], 1,0, 'C');
										$pdf->Cell(50, 5, $dados['COUNT(mat_aluno)'], 1,0,'C');
										$soma=$soma+$dados['COUNT(mat_aluno)'];
											
									}
								$pdf->SetFont('Arial', 'B', 10);
								$pdf->Ln(15);
								$pdf->SetX(10);
								$pdf->Cell(85, 5, "TOTAL DE ALUNOS ALMOÇADO", 0,0,'C');
								$pdf->Cell(110, 5, $soma, 0,0,'C');
								$pdf->Line(90,270,130,270);
								/*$pdf->Line(90,270,190,270);*/
								/*$pdf->Line(90,270,140,270);
								$pdf->Line(150,270,200,270);*/
								$pdf->SetXY(100,275);
								$pdf->Cell(80, 0, 'Assinatura ');
								/*$pdf->Cell(110, 0, 'Assinatura 2');*/
								$pdf->Output();
									
								} else {
										die("<script>alert('Erro nao seleciono : ');document.location='iadministrador/administracao.html';</script>" );
										}

								$conn->close();
							
						
?>
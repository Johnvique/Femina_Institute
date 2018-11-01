<?php
require('fpdf.php');
$pdf=new FPDF();

//set font for the entire document
$pdf->SetFont('Helvetica','B',20);
//$pdf->SetTextColor(50,60,100);

//set up a page
$pdf->AddPage('P'); 
$pdf->SetDisplayMode('default');

//insert an image and make it a link
// $pdf->Image('image/logo.gif',100,10,20,0);

//display the title with a border around it
$pdf->SetXY(40,30);
$pdf->SetDrawColor(50,60,100);
$pdf->Write(10,'The Pakistan Credit Rating Agency Limited',0,'C',0);
$pdf->Line(10,40,200,40);

//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY (20,45);
$pdf->SetFontSize(10);
$pdf->SetTextColor(30,30,100);
$pdf->Write(5,'NL FYI s-l4l (PSO-040515)');

include 'class/connect.php';

//table header
$pdf->SetFillColor(170, 170, 170); //gray
$pdf->setFont("times","B","12");
$pdf->setXY(10, 80);
$pdf->Cell(80, 10, "Ref No.", 1, 0, "C", 1);
$pdf->Cell(60, 10, "Tag_name", 1, 0, "C", 1);
$pdf->Cell(25, 10, "milk_date", 1, 0, "C", 1);
$pdf->Cell(25, 10, "lit_milk", 1, 0, "C", 1);
 
$y = $pdf->GetY();
$x = 10;
$pdf->setXY($x, $y);
 
$sql="SELECT * FROM students ";
$result = mysqli_query($con,$sql);
while ($rows=mysqli_fetch_array($result))
{
    $pdf->Cell(30, 10, $rows['name'], 1);
	$pdf->Cell(60, 10, $rows['course'], 1);
	$pdf->Cell(25, 10, $rows['nid'], 1);
	$pdf->Cell(25, 10, $rows['timestamp'], 1);
	
	$y += 10;
	
	if ($y > 180)
	{
		$pdf->AddPage();
		$y = 20;
	}
	
	$pdf->setXY($x, $y);
}
$pdf->Output('test.pdf','I');
?>
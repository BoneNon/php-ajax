<?php
require('fpdf182/fpdf.php');
    include_once('include/function.inc.php');
    $code = $_GET['id'];
    $fetchdata = new DB_con();
    $sql = $fetchdata->fetchdata_sell($code);


$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
//header
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,20,'Hello World!',1,1,'C');
$pdf->Cell(40,10,'',1,0,'L');
$pdf->Cell(50,10,'Slip :'.$code,1,1,'L');
$pdf->Ln();
//thead
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,5,'table1',1,0,'C');
$pdf->Cell(40,5,'table2',1,0,'C');
$pdf->Cell(40,5,'table3',1,0,'C');
$pdf->Cell(40,5,'table4',1,1,'C');
//tbody
                
                while($row = mysqli_fetch_array($sql)){

                    $pdf->Cell(40,5,$row["sell_id"],1,0,'C');
                    $pdf->Cell(40,5,$row["book_code"],1,0,'C');
                    $pdf->Cell(40,5,$row["sell_quantity"],1,0,'C');
                    $pdf->Cell(40,5,$row["sell_date"],1,1,'C');
                }


$pdf->Output();
?>
<?php
require('fpdf/fpdf.php');


$transactionID = rand(100000, 999999);
$amount = "100.00";
$paymentMethod = "QR Code Payment";
$date = date("Y-m-d H:i:s");


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, "Payment Receipt", 1, 1, 'C');
$pdf->Ln(10);


$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, "Transaction ID:", 0, 0);
$pdf->Cell(50, 10, $transactionID, 0, 1);

$pdf->Cell(50, 10, "Amount Paid:", 0, 0);
$pdf->Cell(50, 10, "$".$amount, 0, 1);

$pdf->Cell(50, 10, "Payment Method:", 0, 0);
$pdf->Cell(50, 10, $paymentMethod, 0, 1);

$pdf->Cell(50, 10, "Date:", 0, 0);
$pdf->Cell(50, 10, $date, 0, 1);

$pdf->Ln(20);
$pdf->Cell(190, 10, "Thank you for your payment!", 0, 1, 'C');


$pdf->Output("D", "Payment_Receipt.pdf");
?>

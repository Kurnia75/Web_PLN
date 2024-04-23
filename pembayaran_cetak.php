<?php

error_reporting(1); 
session_start(); 
mysql_connect("localhost","root","") or die (mysql_error()); 
mysql_select_db("db_pln") or die ("Tidak ada database"); 

$id_pembayaran = $_GET['id_pembayaran'];
$query = mysql_query("SELECT * FROM tbl_pembayaran WHERE id_pembayaran='$id_pembayaran';");
$data = mysql_fetch_array($query); 

// memanggil library FPDF
require('fpdf.php');

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm',array(100,100));

// membuat halaman baru
$pdf->AddPage();

$pdf->SetFont('Arial','i',12);
$pdf->Cell(83,6,'STRUK',0,1,'C');

$pdf->SetFont('Arial','i',12);
$pdf->Cell(80,6,'PEMBAYARAN LISTRIK',0,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(80,6,'_____________________________________',0,1,'C');

$pdf->Cell(10,4,'',0,1);

$pdf->SetFont('Arial','i',10);

$pdf->Cell(52,6,'Tanggal Bayar',0,0); $pdf->Cell(3,6,':',0,0); $pdf->Cell(0,6,date("D/M/Y", strtotime($data['tanggal_bayar'])),0,1);

$pdf->Cell(52,6,'ID Pembayaran',0,0); $pdf->Cell(3,6,':',0,0); $pdf->Cell(0,6,$data['id_pembayaran'],0,1);

$pdf->Cell(52,6,'ID Tagihan',0,0); $pdf->Cell(3,6,':',0,0); $pdf->Cell(0,6,$data['id_tagihan'],0,1);

$pdf->Cell(52,6,'Jumlah Tagihan',0,0); $pdf->Cell(3,6,':',0,0); $pdf->Cell(0,6,$data['pemakaian'],0,1); 

$pdf->Cell(52,6,'Biaya Denda',0,0); $pdf->Cell(3,6,':',0,0); $pdf->Cell(0,6, 'Rp. '.number_format($data['biaya_denda'], "0", ",", "."),0,1);

$pdf->Cell(52,6,'Biaya Admin',0,0); $pdf->Cell(3,6,':',0,0); $pdf->Cell(0,6, 'Rp. '.number_format($data['biaya_admin'], "0", ",", "."),0,1);

$pdf->Cell(52,6,'Total bayar',0,0); $pdf->Cell(3,6,':',0,0); $pdf->Cell(0,6, 'Rp. '.number_format($data['total_bayar'], "0", ",", "."),0,1);


$pdf->Cell(52,6,'Status Pembayaran',0,0); $pdf->Cell(3,6,':',0,0); $pdf->Cell(0,6,$data['status_pembayaran'],0,1); 

$pdf->SetFont('Arial','',12);
$pdf->Cell(80,5,'_____________________________________',0,1,'C');

$pdf->Output();
?>

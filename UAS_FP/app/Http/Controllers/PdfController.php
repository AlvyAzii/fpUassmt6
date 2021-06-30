<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\Models\Post;
use PDF;


class PdfController extends Controller
{
  
  public function pdf(Fpdf $pdf) {

  $pdf->AddPage();
  $pdf->SetFont('Arial', 'B', 18);
  
  $pdf->MultiCell(0,10,'Aplikasi Arsip Surat ', 0, 'C');
  $pdf->MultiCell(0,10,'Daftar Surat Keluar', 0, 'C');
  $pdf->Ln();
  // header
  $pdf->SetFont('Arial', '', 12);
  $pdf->Cell(20,10,'No', 1,0,'C');
  $pdf->Cell(50,10,'Nomor Surat', 1,0,'C');
  $pdf->Cell(30,10,'Tanggal Surat',1,0,'C');
  $pdf->Cell(40,10,'Pengirim',1,0,'C');
  $pdf->Cell(50,10,'Gambar',1,0,'C');
  $pdf->Ln();
  // data
  $data = post::all();

  $i = 1;
  foreach($data as $d) {

  $pdf->Cell(20,10,$i++,1,0,'C');
  $pdf->Cell(50,10,$d['nomorsurat'],1,0,'C');
  $pdf->Cell(30,10,$d['tanggalsurat'],1,0,'L');
  $pdf->Cell(40,10,$d['pengirim'],1,0,'R');
  $pdf->Cell(50,10,' ',1,0,'C');
  $pdf->Ln();
  }
  $pdf->Output();
  exit;
  }
  public function print()
{
    $pdf = PDF::loadview('post')->setPaper('A4','potrait');
    return $pdf->stream();
}
}


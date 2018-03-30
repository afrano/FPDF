<?php
/**
 *
 */
class Cetak extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->library('Pdf');
  }

  public function cetakpdf($id = NULL) {
    $pdf = new FPDF('P','mm',array(100,100)); // ukuran kertas atau  new FPDF('P','mm','A4');  
	$pdf->AddPage('portrait');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->Cell(20,10,'Hello Word !!!',0,1,'C');
    $pdf->Output('', 'Nama File pdf' . $id . ' ');
  }
}

 ?>

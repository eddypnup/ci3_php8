<?php
require_once('tcpdf/tcpdf.php');

class MYPDF extends TCPDF {
    // Page header
    public function Header() {
        // Logo
        $image_file = 'img/logo.png'; 
        $this->Image($image_file, 10, 10, 56, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

        $this->SetFont('helvetica', 'B', 18);
        // Title
        $this->Cell(0, 15, 'Faktur', 0, 1, 'R', 0, '', 0, false, 'M', 'M'); 
        $this->Cell(0, 15, 'Penjualan', 0, 0, 'R', 0, '', 0, false, 'M', 'M'); 
        
    }

    // Page footer
    public function Footer() {

        $this->SetY(-40);
        // Set font
        $this->SetFont('helvetica', 'B', 9); 
        $this->Cell(0, 10,  'STARINC MANAGEMENT', 0, false, 'L'); 
        $this->Ln(6);
        // Set font
        $this->SetFont('helvetica', '', 9); 
        $this->Cell(0, 10,  'Jl. Indragiri No.12-18, Blk. A No.17, Surabaya, Jawa Timur 60241', 0, false, 'L'); 
        $this->Ln(6);
        $this->SetFont('helvetica', '', 9); 
        $this->Cell(0, 10,  '+62811253599', 0, false, 'L'); 
        

        $this->SetY(-40);
        $this->SetX(-67);
        // Set font
        $this->SetFont('helvetica', 'B', 9); 
        $this->Cell(0, 10,  'Payment Method', 0, false, 'L'); 
        $this->Ln(6);
        // Set font
        $this->SetX(-67);
        $this->SetFont('helvetica', '', 9); 
        $this->Cell(0, 10,  'Non Tunai  Bank Central Asia ( ', 0, false, 'L'); 
        $this->Ln(6);
        $this->SetX(-67);
        $this->SetFont('helvetica', '', 9); 
        $this->Cell(0, 10,  '0888032111', 0, false, 'L'); 
        $this->Ln(6);
        $this->SetX(-67);
        $this->SetFont('helvetica', '', 9); 
        $this->Cell(0, 10,  'ACC Name : PT. Berkat Bagi Keluarga', 0, false, 'L'); 
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetTitle('Example');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));


// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// ---------------------------------------------------------
// set font
$pdf->SetFont('helvetica', 'B', 10);

$pdf->AddPage();


$pdf->Ln(15);

$pdf->Cell(0, 0, 'Kepada', 0, 1, 'L'); 
$pdf->Cell(0, 9, 'STARINC OFFICIAL MAKASSAR 2', 0, 1, 'L');


// Tetapkan font dan ukuran
$pdf->SetFont('helvetica', '', 10);

$pdf->Cell(0, 0, 'Salon Selvi Jl. Sarappo No. 43, Melayu Baru, Kec. Wajo, Kota Makassar,', 0, 1, 'L'); 
$pdf->Cell(0, 9, 'Sulawesi Selatan 90217', 0, 1, 'L'); 

$pdf->Cell(0, 0, 'Wajo', 0, 1, 'L'); 

$pdf->Cell(0, 9, 'Makassar', 0, 1, 'L'); 

$pdf->Cell(0, 0, 'Sulawesi Selatan 90217', 0, 1, 'L'); 

$pdf->Cell(0, 9, 'No Telp : +6282192959989', 0, 1, 'L'); 


$pdf->SetY(40);
$pdf->SetX(143); 
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'No. Faktur : TRANS-240330002', 0, 1, 'L'); 
$pdf->SetX(143);
$pdf->Cell(0, 9, 'Tanggal     : 30-03-2024', 0, 1, 'L'); 

$columnWidths = array(10, 60, 10, 30, 30, 40); // Lebar masing-masing kolom

$pdf->SetY($pdf->GetY() + 45); 

// Data tabel
$data = array(
    array('No', 'KETERANGAN', 'QTY', 'HARGA', 'DISKON', 'JUMLAH'),
    array('1', 'Barang A', '20', 'Rp 200.000', '372.600,00', 'Rp. 1.247.400'),
    array('2', 'Barang B', '12', 'Rp. 65.000', '717.600,00', 'Rp. 2.402.400'),
    array('3', 'Barang B', '12', 'Rp. 65.000', '717.600,00', 'Rp. 2.402.400'),
    array('4', 'Barang A', '20', 'Rp 200.000', '372.600,00', 'Rp. 1.247.400')


);

// Tampilan tabel
$pdf->SetFont('helvetica', '', 10);
$isHeader = true; 
foreach($data as $row) {
    foreach($row as $key => $cell) {
        if($isHeader) {
            $pdf->SetFont('helvetica', 'B', 10);
        }
        if ($key === 0) {
            $pdf->Cell($columnWidths[$key], 9, $cell, 0, 0, 'L');
        } elseif ($key === 1) {
            $pdf->Cell($columnWidths[$key], 9, $cell, 0, 0, 'L');
        } elseif ($key === 2) {
            $pdf->Cell($columnWidths[$key], 9, $cell, 0, 0, 'C');
        } else {
            $pdf->Cell($columnWidths[$key], 9, $cell, 0, 0, 'R');
        }
        if($isHeader) {
            $pdf->SetFont('helvetica', '', 10);
        }
    }
    $pdf->Ln(); 
    $isHeader = false; // Set variabel $isHeader menjadi false setelah mencetak judul kolom
}



$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, ' Collected Star : 0.00', 0, 1, 'L'); 



$pdf->SetY(145);
$pdf->SetX(-50); 
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(1, 0, 'Subtotal:', 0, 1, 'R'); 
$pdf->SetX(-50);
$pdf->Cell(1, 9, 'Diskon (0.00%):', 0, 1, 'R'); 
$pdf->SetX(-50);
$pdf->Cell(1, 9, 'Ongkir:', 0, 1, 'R'); 
$pdf->SetX(-50);
$pdf->Cell(1, 9, 'Biaya Lain-Lain:', 0, 1, 'R'); 
$pdf->SetX(-50);
$pdf->Cell(1, 9, 'Total:', 0, 1, 'R'); 


$pdf->SetY(145);
$pdf->SetX(170);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 0, 'Rp. 20.023.080', 0, 1, 'R'); 
$pdf->SetX(170);
$pdf->Cell(0, 9, 'Rp. 0', 0, 1, 'R'); 
$pdf->SetX(170);
$pdf->Cell(0, 9, 'Rp. 0', 0, 1, 'R'); 
$pdf->SetX(170);
$pdf->Cell(0, 9, 'Rp. 0', 0, 1, 'R'); 
$pdf->SetX(170);
$pdf->Cell(0, 9, 'Rp. 20.023.080', 0, 1, 'R'); 



// ---------------------------------------------------------

// Close and output PDF document
$pdf->Output('example.pdf', 'I');


?>

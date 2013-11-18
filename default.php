<?php
// Basic Default PDF Generation


$BASEDIR = dirname(__FILE__);

// Include the main TCPDF library
require_once($BASEDIR."/tcpdf/tcpdf.php");

// Get the content
$title = $_POST["title"];
$content = '<h1>'.$title.'</h1>'.$_POST["content"];


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('CSU Northridge');
$pdf->SetTitle('Catalog - '.$title);

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// ---------------------------------------------------------

// set font
//$pdf->SetFont('times');

// add a page
$pdf->AddPage();

$html = $content;

$pdf->writeHTML($html, true, false, true, false, '');

//Close and output PDF document
$file = 'files/'.seoUrl($title).'.pdf';

// http://www.tcpdf.org/doc/code/classTCPDF.html#a3d6dcb62298ec9d42e9125ee2f5b23a1
$pdf->Output($file, 'F');

// // get path to the file
$file = '/wp-content/plugins/pdf/'.$file;

echo $file;

function seoUrl($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}
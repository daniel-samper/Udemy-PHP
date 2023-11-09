<?php
require '../vendor/autoload.php';
 
// reference the Dompdf namespace
use Dompdf\Dompdf;
 
// instantiate and use the dompdf class
$dompdf = new Dompdf();

// Recoger la vista a imprimir
ob_start();
require_once 'pdf_para_generar.php';
$html = ob_get_clean();

$dompdf->loadHtml($html);
 
// (Optional) Setup the paper size and orientation, landscape or portrait
$dompdf->setPaper('A4', 'portrait');
 
// Render the HTML as PDF
$dompdf->render();
 
// Output the generated PDF to Browser
$dompdf->stream("generic.pdf", array("Attachment" => false));
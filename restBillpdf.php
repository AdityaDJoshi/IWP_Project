<?php

session_start();
require_once dirname(FILE).'/vendor/autoload.php';
require_once(dirname( FILE ).'/vendor/spipu/html2pdf/html2pdf.php');
$html = file_get_contents('RestntPricing.php');

$html2pdf = new html2pdf();
$html2pdf->writeHTML($html); // pass in the HTML
$html2pdf->output('myPdf.pdf', 'D');

 ?>

<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$t=time();
$html = file_get_contents("pdf-content.html"); 
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("lsip_".date("Y-m-d",$t),array("Attachment"=>1));
?>
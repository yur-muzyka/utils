<?
require("html2fpdf.php"); 

//$htmlFile = "http://www.dancrintea.ro"; 
//$buffer = file_get_contents($htmlFile); 
$buffer = "== example - go go go - example ==";

$pdf = new HTML2FPDF('P', 'mm', 'Letter'); 
$pdf->AddPage(); 
$pdf->WriteHTML($buffer); 
$pdf->Output('test.pdf', 'F'); 
?>

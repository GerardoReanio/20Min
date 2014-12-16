<?php

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');
 
$Nombre = $_GET['nombre'];
$Email = $_GET['email'];
   		
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Gerardo Reaño');
$pdf->SetTitle('Ficha de Acreditación');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 14);

// add a page
$pdf->AddPage();


$html1 = '<h1 align="center">FICHA DE ACREDITACION</h1>
		<hr>
		<p align="left">
			<br>
		</p>
		<p align="justify">
			Estimado(a) <strong>'.$Nombre.'</strong>  deberás mostrar esta hoja
			impresa para poder acreditarte de forma correcta al evento.
		</p>
		<p align="right"></p>';  
				
$htmlTab1 = '<table border="2" CELLPADDING="5" CELLSPACING="0">
					  
			<tr align="justify">
			  <td class="active" align="justify">
		  			<table   CELLPADDING="10" >
				        <tr >
				        	<td COLSPAN="2" ><strong></strong></td>
				            <td COLSPAN="4"></td>
				        </tr>
				        <tr align="center">
				           <td COLSPAN="2" ><strong>Nombre</strong></td>
				           <td COLSPAN="4">'.$Nombre.'</td>
				        </tr>
				        <tr align="center">
				           <td COLSPAN="2" ><strong>Email</strong></td>
				           <td COLSPAN="4"> '.$Email.'  </td>
				        </tr>
				        <tr align="center">
				           <td COLSPAN="2" ><strong></strong></td>
				           <td COLSPAN="4"></td>
				        </tr>
				        <tr align="center">
				           <td COLSPAN="2" ><strong></strong></td>
				           <td COLSPAN="4"></td>
				        </tr>
				     </table>
			  </td>
			  <td class="active" align="center">
			  <br>
			  	<img src="../../QRUsuarios/'.$Email.'.png" />
			  </td>
		    </tr>';
	       				  
 
$htmlTab2 =	'</table>';					
						
$html3 = '<hr>
			<div align="center">
		  </div>';
	

$html = $html1.'<br />'.$htmlTab1.$htmlTab2.'<br />'.$html3;
			
	 $pdf->writeHTML($html, true, false, true, false, '');


$NombreArchivo='FichaAcreditacion'.$Data['Codigo'].'.pdf';
//Close and output PDF document
$pdf->Output($NombreArchivo, 'I');

//============================================================+
// END OF FILE
//============================================================+

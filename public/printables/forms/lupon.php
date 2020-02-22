<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 001');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);


// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD
<p><strong>KP Form No. 1</strong></p>
<div style="text-align:center">
<span style="font-weight: 400;">Republic of the Philippines</span><br>
<span style="font-weight: 400;">Province of Negros Occidental</span><br>
<span style="font-weight: 400;">City of Cadiz</span><br>
<span style="font-weight: 400;">Barangay Zone 2</span><br>
</div>
<div style="text-align:center">
	<p><span style="font-weight: 400;">OFFICE OF THE PUNONG BARANGAY</span></p>
	<p><span style="font-weight: 400;">February 18, 2020</span></p>

</div>

<div style="text-align:center">
	<strong>NOTICE TO CONSTITUTE THE LUPON</strong><br>
	<span style="font-weight: 400;">To All Barangay Members and All Other Persons Concerned:</span>
</div>
<p><span style="font-weight: 400;">In compliance with Section (a), Chapter 7, Title One, Book 111, Local Government Code of 1991 (Republic Act No. 7160), of the Katarungang Pambarangay Law, notice is hereby given to constitute the Lupong Tagapamayapa of this barangay. The persons I am considering for appointment are the following:</span></p>


	<ol style="text-align:center"> 
			<li>testtesttest</li>
			<li>testtesttest</li>
			<li>testtesttest</li>
			<li>testtesttest</li>
	</ol>	



<p><span style="font-weight: 400;">They have been chosen on the basis of their suitability for the task of conciliation considering their integrity, impartiality, independence of mind, sense of fairness and reputation for probity in view of their age, social standing in the community, tact, patience, resourcefulness, flexibility, open mindedness and other relevant factors. The law provides that only those actually residing or working in the barangay who are not expressly disqualified by law are qualified to be appointed as lupon members.</span></p>
<p><span style="font-weight: 400;">All persons are hereby enjoined to immediately inform me of their opposition to or endorsement of any or all of the proposed members or recommend to me other persons not included in the list not later than the 18th day of February, 2020 (the last day for posting this notice)</span></p>
<p><br /><br /><br /><br /><br /></p>
<div style="text-align:right">
<span style="font-weight: 400;"> Mr./Mrs.<u>&nbsp;&nbsp;&nbsp;Ragie Doromal&nbsp;&nbsp;&nbsp;</u></span><br>
<span style="font-weight: 400;">&nbsp;&nbsp;&nbsp; Punong Barangay</span>
</div>	
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('lupon.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

<?php

require_once('data.php');
$type = $_REQUEST['type_pdf'];
$down = $_REQUEST['down'];
$nom = $_REQUEST['nom'];
if(empty($nom) or empty($down)) die("Paramètre vide");
switch ($type){
    case 'lp1':
        $data = $data_LP1;
        $modele = 'LPM1.pdf';
    break;
    case 'lp2':
        $data = $data_LP2;
        $modele = 'LPM2.pdf';
    break;
    case 'lp3c':
        $data = $data_LP3C;
        $modele = 'LP3C.pdf';
    break;
    case 'lp3e';
        $data = $data_LP3E;
        $modele = 'LP3E.pdf';
    break;
    default:
        die();
    break;
}
require_once('fpdf/fpdf.php');
// require_once('html2pdf/src/Html2Pdf.php');
require_once('fpdi2/src/autoload.php');
include('fpdifile.php');

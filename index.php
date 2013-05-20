<?php
include ("phpqrcode/qrlib.php");

$contenu= "";
$nomFichier = "qrcode.png";
$niveauCorrection = "H";
$taillePixelQR = 6;
$tailleBordQR = 2;
QRcode::png($content, $filename, $errorCorrectionLevel, $matrixPointSize, $tailleBordQR);

$imageQR = new Imagick("qrcode.png");
$hauteurQR = $im->getImageHeight();
$largeurQR = $im->getImageWidth(); 
$imagesQR->resizeImage($largeurQR * 1, $hauteurQR * 1, Imagick::FILTER_POINT, 0); 
$imageQR->medianFilterImage(0);

header("Content-Type: image/png");
echo $imageQR;
?>

<?php 

require 'vendor/autoload.php';

use Org_Heigl\Ghostscript\Ghostscript;

Ghostscript::setGsPath('C:\Program Files\gs\gs10.00.0\bin\gswin64c.exe');

$pdf = new Spatie\PdfToImage\Pdf('C:\xampp\htdocs\Image\my.pdf');
$pdf->saveAllPagesAsImages('image','ziko_');
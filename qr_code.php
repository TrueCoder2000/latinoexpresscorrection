<?php 

require     'phpqrcode/qrlib.php';

$dir        = 'temp/';

if(!file_exists($dir))
    mkdir($dir);

$filename   = $dir.'test.png';

$tamanho    = 10;
$level      = 'L';
$frameSize  = 3;
$contenido  = 'https://api.whatsapp.com/send?phone=+13179600276&text=Hello, welcome to Latino Express Professional MultiTax Services.';

QRcode::png($contenido, $filename, $level, $tamanho, $frameSize);

echo '<img src="'.$filename.'" />';

?>
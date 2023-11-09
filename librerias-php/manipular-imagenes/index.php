<?php
require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardr_en = 'fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);

// Redimensionar
$thumb->resize(250,250);

// Recortar
$thumb->crop(50, 50, 120, 120);



$thumb->show();
$thumb->save($guardr_en);


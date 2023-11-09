<?php
require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardr_en = 'fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);
$thumb->resize(50,50);
$thumb->show();
$thumb->save($guardr_en);


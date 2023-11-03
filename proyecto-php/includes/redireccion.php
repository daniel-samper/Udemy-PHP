<?php

if(!isset($_SESSION)):
    session_start();
endif;


if(!isset($_SESSION['usuario'])):
    header("Location: index.php");
endif;
    
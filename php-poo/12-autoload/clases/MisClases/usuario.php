<?php

namespace MisClases;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Victor Robles";
        $this->email = "victor@victor.com";
    }
}
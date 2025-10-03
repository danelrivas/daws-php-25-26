<?php

namespace ejercicio3\models;

class Poligono {
    public string $color;
    public int $altura;
    public int $anchura;

    public function __construct($color, $altura, $anchura){
        $this->color = $color;
        $this->altura = $altura;
        $this->anchura = $anchura;
    }

    function calcularArea($altura, $anchura){
        return $altura * $anchura;
    }
}

?>
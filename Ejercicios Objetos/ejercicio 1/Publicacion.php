<?php

class Publicacion {
    public string $autores;
    public int $año;
    public string $editorial;
    public string $titulo;
    public string $texto;

    public function __construct($autores, $año, $editorial, $titulo, $texto){
        $this->autores = $autores;
        $this->año = $año;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    public function leer(){
        return $this->texto;
    }

    public function escribir($cadena){
        $this->texto .= $cadena;
    }
}

?>
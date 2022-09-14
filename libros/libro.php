<?php

class Libro
{
    public $titulo;
    public $autor;
    public $aniopublicacion;
    public $numerohojas;
    public $editorial;

    public function __construct($ti, $au, $ap, $nh, $ed)
    {
        $this->titulo = $ti;
        $this->autor = $au;
        $this->aniopublicacion = $ap;
        $this->numerohojas = $nh;
        $this->editorial = $ed;
    }
}

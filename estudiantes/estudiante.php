<?php
class Estudiante
{
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($no, $ap, $ed)
    {
        $this->nombre = $no;
        $this->apellido = $ap;
        $this->edad = $ed;
    }

    public function details()
    {
        echo "Nombre " . $this->nombre . ".\n";
        echo "Apellido " . $this->apellido . ".\n";
        echo "Edad " . $this->edad . ".\n";
    }
}

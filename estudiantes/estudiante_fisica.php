<?php
require 'estudiante.php';
class EstudianteFisica extends Estudiante
{
    public $parciales = 0;
    public $laboratorios = 0;
    public $proyecto = 0;
    public $semestral = 0;

    public function setSemestral($se)
    {
        $this->semestral = $se;
    }

    public function getSemestral()
    {
        return $this->semestral;
    }

    public function setProyecto($pr)
    {
        $this->proyecto = $pr;
    }

    public function getProyecto()
    {
        return $this->proyecto;
    }

    public function setLaboratorios($la)
    {
        $this->laboratorios = $la;
    }

    public function getLaboratorios()
    {
        return $this->laboratorios;
    }

    public function setParciales($pa)
    {
        $this->parciales = $pa;
    }

    public function getParciales()
    {
        return $this->parciales;
    }

    public function getNotas()
    {
        echo $this->details();
        $pa = $this->parciales * (25 / 100);
        $pr = $this->proyecto * (25 / 100);
        $la = $this->laboratorios * (25 / 100);
        $se = $this->semestral * (25 / 100);
        $nota = ($pa + $pr + $la + $se);
        $calificacion = '';
        if ($nota < 60) {
            $calificacion = 'F';
        } else if ($nota < 70) {
            $calificacion = 'D';
        } else if ($nota < 80) {
            $calificacion = 'C';
        } else if ($nota < 90) {
            $calificacion = 'B';
        } else {
            $calificacion = 'A';
        }
        echo "La calificación es " . $calificacion . " con una nota de " . $nota . ".\n";
    }
}

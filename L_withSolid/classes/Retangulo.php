<?php 
require_once "Forma.php";

class Retangulo extends Forma {
    protected float $largura;
    protected float $altura;

    public function __construct(float $largura, float $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function getArea(): float {
        return $this->largura * $this->altura;
    }
}

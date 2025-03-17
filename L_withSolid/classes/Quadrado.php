<?php
require_once "Forma.php";

class Quadrado extends Forma {
    protected float $lado;

    public function __construct(float $lado) {
        $this->lado = $lado;
    }

    public function getArea(): float {
        return $this->lado * $this->lado;
    }
}

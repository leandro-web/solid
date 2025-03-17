<?php

require_once __DIR__ . '/../interfaces/Trabalhador.php';
require_once __DIR__ . '/../interfaces/Presencial.php';
require_once __DIR__ . '/../interfaces/Remoto.php';

class Desenvolvedor implements Trabalhador, Remoto, Presencial {
    public function calcularSalario() {
        return 8000;
    }

    public function baterPonto() {
        return "Bateu ponto no sistema!";
    }

    public function fazerHomeOffice() {
        return "Trabalhando remotamente!";
    }
}

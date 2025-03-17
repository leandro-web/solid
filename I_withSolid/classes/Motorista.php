<?php

require_once __DIR__ . '/../interfaces/Trabalhador.php';
require_once __DIR__ . '/../interfaces/Presencial.php';

class Motorista implements Trabalhador, Presencial {
    public function calcularSalario() {
        return 4500;
    }

    public function baterPonto() {
        return "Bateu ponto na entrada da empresa!";
    }
}

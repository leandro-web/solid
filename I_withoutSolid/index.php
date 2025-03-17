<?php

interface Funcionario {
    public function calcularSalario();
    public function baterPonto();
    public function fazerHomeOffice();
}

class Desenvolvedor implements Funcionario {
    public function calcularSalario() {
        return 5000;
    }

    public function baterPonto() {
        return "Bateu ponto no sistema!";
    }

    public function fazerHomeOffice() {
        return "Trabalhando remotamente!";
    }
}

class Motoristta implements Funcionario {
    public function calcularSalario() {
        return 4500;
    }

    public function baterPonto() {
        return "Bateu ponto na entrada da empresa!";
    }

    public function fazerHomeOffice() {
        // ERRO: Motoristas não fazem home office, mas são obrigados a implementar este método.
        throw new Exception("Motoristas não podem fazer home office!");
    }
}


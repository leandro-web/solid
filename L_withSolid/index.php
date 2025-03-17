<?php
require_once "classes/Retangulo.php";
require_once "classes/Quadrado.php";

function calcularArea(Forma $forma) {
    return $forma->getArea();
}

$retangulo = new Retangulo(5, 10);
$quadrado = new Quadrado(5);

echo "Área do Retângulo: " . calcularArea($retangulo) . "\n";
echo "Área do Quadrado: " . calcularArea($quadrado) . "\n";

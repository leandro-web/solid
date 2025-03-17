<?php 
class Retangulo {
    protected float $largura;
    protected float $altura;

    public function setLargura(float $largura) {
        $this->largura = $largura;
    }

    public function setAltura(float $altura) {
        $this->altura = $altura;
    }

    public function getArea(): float {
        return $this->largura * $this->altura;
    }
}

// Quadrado herda de Retangulo (errado!)
class Quadrado extends Retangulo {
    public function setLargura(float $largura) {
        $this->largura = $largura;
        $this->altura = $largura; // Sempre mantém altura = largura
    }

    public function setAltura(float $altura) {
        $this->largura = $altura;
        $this->altura = $altura; // Sempre mantém altura = largura
    }
}

// Teste
function calcularAreaRetangulo(Retangulo $retangulo) {
    $retangulo->setLargura(5);
    $retangulo->setAltura(10);
    return $retangulo->getArea();
}

$retangulo = new Retangulo();
$quadrado = new Quadrado();

echo "Área do Retângulo: " . calcularAreaRetangulo($retangulo) . "\n";
echo "Área do Quadrado: " . calcularAreaRetangulo($quadrado) . "\n";

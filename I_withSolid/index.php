<?php

require_once __DIR__ . '/classes/Desenvolvedor.php';
require_once __DIR__ . '/classes/Motorista.php';

$dev = new Desenvolvedor();
echo $dev->fazerHomeOffice() . PHP_EOL; // Trabalhando remotamente!

$motorista = new Motorista();
echo $motorista->baterPonto() . PHP_EOL; // Bateu ponto na entrada da empresa!

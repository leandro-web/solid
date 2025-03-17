<?php 
require_once "classes/DiscountStrategy.php";
require_once "classes/ElectronicDiscount.php";
require_once "classes/ClothingDiscount.php";
require_once "classes/DiscountCalculator.php";

$calculator = new DiscountCalculator();

// Criando estratégias de desconto
$electronicDiscount = new ElectronicDiscount();
$clothingDiscount = new ClothingDiscount();

echo "Desconto para eletrônico: R$ " . $calculator->calculateDiscount($electronicDiscount, 1000) . "\n";
echo "Desconto para roupa: R$ " . $calculator->calculateDiscount($clothingDiscount, 500) . "\n";

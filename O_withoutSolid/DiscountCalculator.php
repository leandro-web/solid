<?php 
class DiscountCalculator {
    public function calculateDiscount(string $productType, float $price): float {
        if ($productType === 'eletronico') {
            return $price * 0.10; // 10% de desconto
        } elseif ($productType === 'roupa') {
            return $price * 0.20; // 20% de desconto
        }
        return 0; // Sem desconto
    }
}

// Uso
$calculator = new DiscountCalculator();
echo $calculator->calculateDiscount('eletronico', 1000);

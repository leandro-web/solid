<?php 
class ClothingDiscount implements DiscountStrategy {
    public function calculate(float $price): float {
        return $price * 0.20; // 20% de desconto
    }
}

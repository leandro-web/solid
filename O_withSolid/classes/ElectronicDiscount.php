<?php 
class ElectronicDiscount implements DiscountStrategy {
    public function calculate(float $price): float {
        return $price * 0.10; // 10% de desconto
    }
}

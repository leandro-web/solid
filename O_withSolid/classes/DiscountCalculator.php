<?php 
class DiscountCalculator {
    public function calculateDiscount(DiscountStrategy $discountStrategy, float $price): float {
        return $discountStrategy->calculate($price);
    }
}

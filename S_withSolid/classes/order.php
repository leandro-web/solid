<?php
class Order {
    private array $items = [];
    private float $total = 0.0;

    public function addItem(string $name, float $price) {
        $this->items[] = ['name' => $name, 'price' => $price];
        $this->total += $price;
    }

    public function getTotal(): float {
        return $this->total;
    }
}

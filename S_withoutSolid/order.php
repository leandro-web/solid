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

    public function processPayment(string $paymentMethod) {
        echo "Processando pagamento de R$ {$this->total} via {$paymentMethod}...\n";
    }

    public function sendConfirmationEmail(string $email) {
        echo "Enviando e-mail de confirmação para {$email}...\n";
    }
}

// Uso
$order = new Order();
$order->addItem("Perfume", 199.99);
$order->addItem("Creme Hidratante", 79.90);

echo "Total: R$ " . $order->getTotal() . "\n";
$order->processPayment("Cartão de Crédito");
$order->sendConfirmationEmail("cliente@email.com");

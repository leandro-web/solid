<?php 
class PaymentProcessor {
    public function processPayment(float $amount, string $paymentMethod) {
        echo "Processando pagamento de R$ {$amount} via {$paymentMethod}...\n";
    }
}

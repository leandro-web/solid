<?php
require_once "classes/order.php";
require_once "classes/paymentProcessor.php";
require_once "classes/emailService.php";

$order = new Order();
$order->addItem("Perfume", 199.99);
$order->addItem("Creme Hidratante", 79.90);

$total = $order->getTotal();
echo "Total: R$ " . $total . "\n";

$paymentProcessor = new PaymentProcessor();
$paymentProcessor->processPayment($total, "Cartão de Crédito");

$emailService = new EmailService();
$emailService->sendConfirmation("cliente@email.com");

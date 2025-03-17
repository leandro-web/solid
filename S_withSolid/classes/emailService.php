<?php
class EmailService {
    public function sendConfirmation(string $email) {
        echo "Enviando e-mail de confirmação para {$email}...\n";
    }
}

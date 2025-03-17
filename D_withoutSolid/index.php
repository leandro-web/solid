<?php

class MySQLDatabase {
    public function connect() {
        return "Conectando ao MySQL...";
    }
}

class UserService {
    private $database;

    public function __construct() {
        // A classe de alto nível está dependendo diretamente da classe de baixo nível
        $this->database = new MySQLDatabase();
    }

    public function createUser($name) {
        echo "Usuário $name criado. " . $this->database->connect();
    }
}

$userService = new UserService();
$userService->createUser("Leandro");

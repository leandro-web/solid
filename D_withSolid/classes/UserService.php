<?php

require_once __DIR__ . '/../interfaces/Database.php';

class UserService {
    private $database;

    // A dependência de 'Database' é injetada via construtor
    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function createUser($name) {
        echo "Usuário $name criado. " . $this->database->connect();
    }
}

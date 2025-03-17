<?php

require_once __DIR__ . '/../interfaces/Database.php';

class MySQLDatabase implements Database {
    public function connect() {
        return "Conectando ao MySQL...";
    }
}

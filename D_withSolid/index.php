<?php

require_once __DIR__ . '/classes/MySQLDatabase.php';
require_once __DIR__ . '/classes/UserService.php';

// Criando a instância da classe MySQLDatabase e passando para o UserService
$mySQLDatabase = new MySQLDatabase();
$userService = new UserService($mySQLDatabase);
$userService->createUser("Leandro");

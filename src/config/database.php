<?php
$host = 'db';
$dbname = 'task_manager';
$username = 'admin';
$password = 'admin123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDO::Exception $e) {
    die(json_encode(['error' => 'Conexión fallida: ' . $e->getMessage()]));
}
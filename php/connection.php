<?php
$host = "localhost";
$databaseName = "bob_vance";
$username = "bit_academy";
$password = "bit_academy";

$dsn = "mysql:host=$host;dbname=$databaseName";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

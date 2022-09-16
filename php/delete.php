<?php
include 'connection.php';


$id = $_GET['id'];

$host = "localhost";
$databaseName = "bob_vance";
$username = "bit_academy";
$password = "bit_academy";
$dsn = "mysql:host=$host;dbname=$databaseName";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM koelkasten 
        WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id);

    $stmt->execute();

    echo "<h3 class='justify-content-center text-center'>koelkast is verwijderd!</h3>";

    header("refresh:1.5; url=admin.php");
} catch (PDOException $error) {
    echo $error->getMessage();
}

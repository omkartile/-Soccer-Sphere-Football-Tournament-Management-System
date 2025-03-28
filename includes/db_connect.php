<?php
$host = "localhost";
$port = "3306";
$dbname = "football_tournament";
$user = "root";
$password = "";
try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage() . " | Code: " . $e->getCode());
}
?>
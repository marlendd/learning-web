<?php
$host = "localhost";
$db = "webauth";
$user = "root";
$pass = "g2lit7or";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}
?>

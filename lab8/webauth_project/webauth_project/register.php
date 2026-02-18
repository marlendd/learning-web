<?php
require "config.php";

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

if (empty($username) || empty($email) || empty($password)) {
    die("Заполните все поля!");
}

$hashed = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([$username, $email, $hashed]);
    echo "Регистрация успешна!";
} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}
?>

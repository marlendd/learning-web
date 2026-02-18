<?php
require 'connect.php';

$login    = trim($_POST['login'] ?? '');
$password = trim($_POST['password'] ?? '');
$mail     = trim($_POST['mail'] ?? '');
$city     = trim($_POST['city'] ?? '');
$age      = trim($_POST['age'] ?? '');
$hobby    = trim($_POST['hobby'] ?? '');

if (mb_strlen($login) < 3 || mb_strlen($login) > 15) {
    die("Ошибка: логин должен быть от 3 до 15 символов.");
}

if (mb_strlen($password) < 10 || mb_strlen($password) > 15) {
    die("Ошибка: пароль должен быть от 10 до 15 символов.");
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO Users (login, mail, city, age, hobby, password_hash)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([$login, $mail, $city, $age, $hobby, $password_hash]);

echo "Запись успешно добавлена!<br>";
echo "Хэш пароля: " . $password_hash;
?>

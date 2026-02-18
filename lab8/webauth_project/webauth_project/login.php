<?php
require "config.php";
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user["password"])) {
    $_SESSION["user"] = $user["username"];
    header("Location: dashboard.php");
} else {
    echo "Неверный логин или пароль!";
}
?>

<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.html");
    exit();
}
?>
<h2>Добро пожаловать, <?php echo $_SESSION["user"]; ?>!</h2>
<a href="logout.php">Выйти</a>

<?php
require 'connect.php';

$stmt = $pdo->query("SELECT id, nickname, login FROM Users");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h1>Users</h1>
<?php foreach ($rows as $row): ?>
<p><?= $row['id'] ?> — <?= $row['nickname'] ?> — <?= $row['login'] ?></p>
<?php endforeach; ?>


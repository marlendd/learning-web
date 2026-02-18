<?php
$name = $_POST['name'];
$m1 = $_POST['mark1'];
$m2 = $_POST['mark2'];
$m3 = $_POST['mark3'];
$avg = ($m1 + $m2 + $m3)/3;
echo "Студент: $name<br>Средний балл: $avg<br>";
if ($avg >= 4) echo "Назначена стипендия.";
else echo "Стипендия не назначена.";
?>

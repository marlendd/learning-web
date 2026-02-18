<?php
$text = $_POST['text'] ?? '';
preg_match_all('/\p{L}+/u', $text, $matches);
$count = count($matches[0]);
echo "В строке $count слов(а).";
?>

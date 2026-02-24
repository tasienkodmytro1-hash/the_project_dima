<?php
// Отримати дані з форми
$userInput = $_POST['userInput'];

// Відкрити файл для дописування
$file = fopen("data.txt", "a");

// Записати введене слово + перенос рядка
fwrite($file, $userInput . "\n");

// Закрити файл
fclose($file);

echo "Дані збережено! <a href='index.html'>Повернутися назад</a>";
?>

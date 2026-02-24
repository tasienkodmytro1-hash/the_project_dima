<?php
// Отримати дані з форми
$userInput = $_POST['userInput'] ?? '';

// Отримати IP користувача
$userIP = $_SERVER['REMOTE_ADDR'];

// Відкрити файл для дописування
$file = fopen("data.txt", "a");

// Записати слово + IP + перенос рядка
fwrite($file, $userInput . "user Ip | IP: " . $userIP . "\n");

fclose($file);

echo "Дані збережено!";
?>


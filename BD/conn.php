<?php

// Подключение к MySQL
$servername = "localhost"; // локалхост
$username = "root"; // имя пользователя
$password = ""; // пароль если существует

// Создание соединения
$conn = mysqli_connect($servername, $username, $password);

// Проверка соединения
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
echo "Успешное подключение";



// Созданние базы данных
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "База данных создана успешно";
} else {
    echo "Ошибка создания базы данных: " . mysqli_error($conn);
}
// Закрыть подключение
$conn->close();

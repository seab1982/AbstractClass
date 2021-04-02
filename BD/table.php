<?php

require_once __DIR__ .'/conn.php';


// Создание соединения
$conn =  new mysqli_connect($servername, $username, $password, $dbname);
// Проверка соединения
if (!$conn) {
    die("Подключение не удалось: " . mysqli_connect_error());
}

//создадим таблицу с именем "DyrecProdyct", с пятью столбиками: "id", "name", "prase", "factory" и "date"

$sql = "CREATE TABLE DyrecProdyct (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
prase VARCHAR(30) NOT NULL,
factory VARCHAR(50),
date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Таблица DyrecProdyct создана успешно";
} else {
    echo "Ошибка создания таблицы: " . mysqli_error($conn);
};

    $conn->exec($sql);
    echo "Таблица DyrecProdyct создана успешно";
}


    // Создание таблицы
    $sql = "CREATE TABLE DyAgents (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(30) NOT NULL,
   price VARCHAR(30) NOT NULL,
   email VARCHAR(50),
   date TIMESTAMP
   )";

    $conn->exec($sql);
    echo "Таблица DyAgents создана успешно";



//создание таблицы товаров
$sql = "CREATE TABLE Goods (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id goods INT(6) UNSIGNED NOT NULL ,
name VARCHAR(30) NOT NULL,
price INT(6) UNSIGNED NOT NULL,
data TIMESTAMP 
)";
if ($conn->query($sql) === TRUE) {
    echo "Таблица Goods успешно создана";
} else {
    echo "Ошибка в создании таблицы товаров: " . $conn->error;
}

//создание таблицы оплаты
$sql = "CREATE TABLE Orders (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id orders INT(6) UNSIGNED NOT NULL  ,
id goods INT(6) UNSIGNED NOT NULL,
id agents INT(6) UNSIGNED NOT NULL,
data TIMESTAMP ,
)";

if ($conn->query($sql) === TRUE) {
    echo "Таблица Orders успешно создана";
} else {
    echo "ошибка создании таблицы ордерс: " . $conn->error;
}
// Закрыть подключение
$conn = null;

//наполнение таблиц
$sql = "INSERT INTO Goods (id goods,name,price)
VALUES ('1', 'apple', '1000');";

if ($conn->query($sql) === TRUE) {
    echo " успешная операция";
} else {
    echo "ошибка: " . $sql . "<br>" . $conn->error;
};

$sql = "INSERT INTO DyAgents (id,name,price,email)
VALUES ('2', 'lemon', '50000','qwer@ukr.net');";

if ($conn->query($sql) === TRUE) {
    echo "успешно заполнена";
} else {
    echo "ошибка: " . $sql . "<br>" . $conn->error;
}
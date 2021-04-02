<?php
require_once __DIR__ .'/conn.php';
require_once __DIR__ .'/table.php';



// Реализовать выборку всех заказов по одному из контрагентов
$sql = "SELECT * FROM Orders INNER JOIN Goods on Goods.id=Orders.id
                    WHERE Orders.id =1";
$result = $conn->query($sql);

// Реализовать выборку всех заказов по одному из контрагентов(еще один из способов)

$orders = $sql->select("SELECT * FROM orders WHERE Id = 1;");
foreach ($orders as $order) {
    print_r($order);
};

// Реализовать выборку задвоенных контрагентов
$sql = "SELECT * FROM Dyagents WHERE name_agents IN
        (SELECT name_dyagents  FROM Dyagents GROUP BY name_dyagents HAVING COUNT(name_dyagents) > 1)";
$result = $conn->query($sql);




// Реализовать выборку всех оплаченных заказов
$orders = $sql->select("SELECT * FROM orders WHERE Id IN (SELECT orderId FROM orders);");
foreach ($orders as $order) {
    print_r($order);
}




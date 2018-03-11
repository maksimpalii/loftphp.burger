<?php
$dsn = 'mysql:host=localhost;dbname=burger;charset=utf8';
$pdo = new PDO($dsn, 'root', '');

//$userView = $pdo->prepare('SELECT * FROM users');
//$userView->execute();
//$data = $userView->fetchAll(PDO::FETCH_ASSOC);
$usersView = $pdo->query('SELECT * FROM users');
$data = $usersView->fetchAll(PDO::FETCH_ASSOC);
//echo json_encode($data, JSON_UNESCAPED_UNICODE);
$ordersView = $pdo->query('SELECT * FROM orders');
$data2 = $ordersView->fetchAll(PDO::FETCH_ASSOC);

?>
<h2>Пользователи</h2>
<table border="1">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Number</th>
        <th>Email</th>
    </tr>

    <?php
    foreach ($data as $val) {
        echo '<tr>';
        foreach ($val as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }

    ?>
</table>
<h2>Заказы</h2>
<table border="1">
    <tr>
        <th>Order_id</th>
        <th>User_id</th>
        <th>Adress</th>
        <th>Detail</th>
        <th>Comment</th>
    </tr>

    <?php
    foreach ($data2 as $val) {
        echo '<tr>';
        foreach ($val as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }

    ?>
</table>
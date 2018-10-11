<?php
function order($summ) {

    global  $db;

    if (isset($_SESSION['items'])) {
        $itemsId = $_SESSION['items'];
        $ids = implode(',', $itemsId);
        $userId = $_SESSION['userId'];

        $totalprice = $summ;

        if(isset($_POST['summ'])) {
            $sql = "INSERT INTO `orders` (`ids`, `user_id`, `totalprice`, `status`) VALUES ('$ids', '$userId', '$totalprice', 'создан')";
            mysqli_query($db, $sql);

            unset($_SESSION['items']);

        }
    }
}

function getOrders() {
    global  $db;
    $userId = $_SESSION['userId'];

    echo '<table>
            <tr>
                <td>Номер заказа</td>
                <td>Дата заказа</td>
                <td>Сумма</td>
                <td>Статус заказа</td>
                </tr>';
    $ordersList = [];
    $result = mysqli_query($db, "SELECT * FROM orders WHERE `user_id` = $userId");
    while ($row = mysqli_fetch_assoc($result)) {
        $ordersList[] = $row;

    };

    foreach ($ordersList as $order => $value) {
        echo '<tr>
                <td>' . $value['id'] . '</td>
                <td>' . $value['created_at'] . '</td>
                <td>' . $value['totalprice'] . '</td>
                <td>' . $value['status'] . '</td>
              </tr>';
    }

    echo '</table>';
}

function getAdminOrders () {
    global $db;

    echo '<table>
            <tr>
                <td>Номер заказа</td>
                <td>Id пользователя</td>
                <td>Дата заказа</td>
                <td>Id товаров</td>
                <td>Сумма</td>
                <td>Статус заказа</td>
                </tr>';

    $ordersList = [];
    $result = mysqli_query($db, "SELECT * FROM orders");
    while ($row = mysqli_fetch_assoc($result)) {
        $ordersList[] = $row;

    };

    foreach ($ordersList as $order => $value) {
        echo '<tr>
                <td>' . $value['id'] . '</td>
                <td>' . $value['user_id'] . '</td>
                <td>' . $value['created_at'] . '</td>
                <td>' . $value['ids'] . '</td>
                <td>' . $value['totalprice'] . '</td>
                <td>' . $value['status'] . '</td>
                <td>
                    <form method="post" action="/?controller=admin">
                        <input type="text" name="status" value="">
                        <input type="hidden" name="id" value="' . $value['id'] . '">
                        <button type="submit">Изменить статус</button>
                    </form>
                </td>
              </tr>';
    }

    echo '</table>';
}

function modifyOrder() {

    global $db;
    var_dump($_POST);
    if (isset($_POST['status'])) {
        $status = $_POST['status'];
        $id = $_POST['id'];
        $sql = "UPDATE `orders` SET `status` = '$status' WHERE `id` = $id";
        mysqli_query($db, $sql);
    }
}

if (isset($_SESSION['items'])) {
    $count = count($_SESSION['items']);
} else {
    $count = 0;
}
<?php
function putInCart($itemsId) {
    $_SESSION['items'][] = $itemsId;
}


function getCart()
{

    global $db;
    $n = 0;
    $total = [];

    if (isset($_SESSION['items'])) {
        $items = $_SESSION['items'];
        echo '<table class="itemsInCart">
                   <tr>
                   <td>№</td>
                   <td>Название товара</td>
                   <td>Стоимость товара</td>
</tr>';
        foreach($items as $good => $itemsId) {
            $n++;
            $result = mysqli_query($db, "SELECT * FROM goods WHERE `id` = $itemsId");
            $goodsList = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $goodsList[] = $row;
            };

            $names = [];
            $ids = [];
            $prices = [];


            foreach($goodsList as $good => $item) {
                $currentTime = date('Y-m-d');

                $ids[] = $item['id'];
                $names[] = $item['name'];

                if($item['salePeriodstart'] ==! null &&
                    $item['salePeriodstop'] ==! null &&
                    strtotime($currentTime) <= strtotime($item['salePeriodstop']) && strtotime($currentTime) >= strtotime($item['salePeriodstart'])) {
                    $prices[] = $item['promoprice'];
                } else {
                    $prices[] = $item['price'];
                };

            };


            for ($i = 0; $i < count($names); $i++) {
                echo '<tr class="' . $n . '">
                <td>' . $n . '</td>
                <td>' . $names[$i] . '</td>
                <td class="price">' . $prices[$i] . '</td>
                <td>
                <form method="post" data-role = "delete-from-cart-form" action="/?controller=delete">
                    <input type="hidden" name="n" value="' . $n .'">
                    <button type="submit">Удалить из корзины</button>
                </form>
                </td>
            </tr>';
                $total[] = $prices[$i];
            };


        }
        echo '</table>';
        echo '<form method="post" data-role = "order" action="/?controller=order">
                    <input type="hidden" name="order" value="">
                    <button type="submit">Оформить заказ</button>
                </form>';
        $summ = array_sum($total);
        echo '<p class="total">Общая сумма заказа <span class="summ">' . $summ . '</span> euro';
    }


}

function delete($n) {



    $items = $_SESSION['items'];

    foreach ($items as $number => $id) {
        if ($number === ($n - 1)) {
            unset($_SESSION['items'][$number]);
            $_SESSION['items'] = array_values($_SESSION['items']);
        }
    }

}
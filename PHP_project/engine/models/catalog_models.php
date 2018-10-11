<?php

$currentTime = date('Y-m-d');

function getGoods($goodsCount) {

    global $shownGoodsCount;
    $shownGoodsCount = $goodsCount;

    function getCatalog(){

        global $shownGoodsCount;

        global $db;

        $result = mysqli_query($db, 'SELECT * FROM goods' );
        $goodsList = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $goodsList[] = $row;
        };

        $ids = [];
        $urls = [];
        $names = [];
        $descriptions = [];
        $prices = [];
        $salePrices = [];
        $salePeriodStart = [];
        $salePeriodStop =[];

        foreach($goodsList as $good => $item) {
            $ids[] = $item['id'];
            $urls[] = $item['imageUrl'];
            $names[] = $item['name'];
            $descriptions[] = $item['description'];
            $prices[] = $item['price'];
            $salePrices[] = $item['promoprice'];
            $salePeriodStart[] = $item['salePeriodstart'];
            $salePeriodStop[] = $item['salePeriodstop'];
        };

        $goods = [];

        for ($i = 0; $i < $shownGoodsCount && $i < $ids; $i++) {
            $currentTime = date('Y-m-d');

            if($salePeriodStart[$i] ==! null &&
                $salePeriodStop[$i] ==! null &&
                strtotime($currentTime) <= strtotime($salePeriodStop[$i]) && strtotime($currentTime) >= strtotime($salePeriodStart[$i])) {
                $price = '<s>' . $prices[$i] . ' euro</s><br><span class="barre">' . $salePrices[$i] . ' euro</span>';
            } else {
                $price = $prices[$i] . ' euro';
            };

            $goods[] = '<a href="#">
            <div class="item">
            
                <h4 class="itemName">' . $names[$i] . '</h4>
                <img class="prev" src="' . $urls[$i] . '">
                <p class="discr">' . $descriptions[$i] . '</p>
                <p class="price">' . $price . '</p>
                <form method="post" data-role="add-to-cart-form" action="/?controller=add-to-cart">
                    <input type="hidden" name="id" value="' . $ids[$i] .'">
                    <button class="buy" type="submit">Положить в корзину</button>
</form>
            
        </div></a>';
        };

        return $goods;
    };

    return getCatalog();
}

function getMoreButton($goodsCount) {

    global $db;
    $result = mysqli_query($db, 'SELECT count(`id`) FROM goods' );
    while ($row = mysqli_fetch_assoc($result)) {
        $allGoodsNumber = $row;
    };

    if ($goodsCount < $allGoodsNumber) {
        $moreButton = '<form method="post" data-role="show-more-goods-form" action="/?controller=show-more-goods">
                    <input type="hidden" name="id" value="">
                    <button class="moreButton" type="submit">Показать больше товаров</button>
                    </form>';
    } else {
        $moreButton = '';
    };

    return $moreButton;
}
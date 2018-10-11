<p class="count">
    Товаров в Вашей корзине:
    <span data-role="cart-count">
    <?php
    echo $variables['count'];
    ?>
        </span>
</p>
<div class="content">

    <div class="goods">
        <?php
            foreach (getGoods($variables['shownGoodsCount']) as $items => $item) {
                echo $item;
        };
        ?>
    </div>
    <div class="userData">
        <?php
        echo $variables['userBar'];
        ?>
    </div>
</div>
<div class="more">
    <?php
    echo getMoreButton($variables['shownGoodsCount']);
    ?>
</div>
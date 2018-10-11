<p class="count">
    Товаров в Вашей корзине:
    <span data-role="cart-count">
    <?php
    echo $variables['count'];
    ?>
        </span>
</p>
<div class="cart">
<div class="content1">

    <div class="cartItems">
        <h1>Корзина</h1>

        <?php
        getCart();
        ?>

    </div>


    <div class="orders">
        <h1>Заказы</h1>

        <?php
        getOrders();
        ?>
    </div>
</div>
    <div class="userData">
        <?php
        echo  $variables['userBar'];
        ?>
    </div>
</div>
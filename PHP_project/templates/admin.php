<div class="container">
    <div class="ordersPanel">
        <?php
            getAdminOrders ();
        ?>

    </div>


    <div class="userData">
        <?php
        echo $variables['userBar'];
        ?>
    </div>
    <a href="/?controller=front">На главную</a>
</div>
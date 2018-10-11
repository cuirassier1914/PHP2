$(function addToCart() {
    $('[data-role = "add-to-cart-form"]').each(function () {
        var $form = $(this);
        $form.on('submit', function (event) {
            event.preventDefault();

            var $idInput = $form.find('input[name="id"]');
            var id = $idInput.val();

            $.ajax({
                'url': '/?controller=add-to-cart',
                'method': 'post',
                'data': {
                    id: id
                },
                success: function (data){
                    var count = data.count;
                    // console.log(count);
                    $('[data-role="cart-count"]').text(count);
                    // console.log('Товар добавлен')
                },
                error: function () {
                    // console.log('Товар не добавлен')
                }
            });

            return false;
        });
    });
});


$(function deleteFromCart() {
    $('[data-role = "delete-from-cart-form"]').each(function () {
        var $deleteForm = $(this);

        $deleteForm.on('submit', function (event) {

            event.preventDefault();

            var $nInput = $deleteForm.find('input[name="n"]');
            var n = $nInput.val();
                

            $.ajax({
                'url': '/?controller=delete',
                'method': 'post',
                'data': {
                    n: n
                },
                success: function (data){
                    var count = data.count;
                    console.log(count);
                    $('[data-role="cart-count"]').text(count);
                    $('.'+ n).remove();

                    var priceArr = [];
                    $('.price').each(function () {
                        priceArr.push(parseFloat($(this).html()))
                    })

                    console.log(priceArr);



                    function newSumm (){
                        var sum = 0;
                        for(var i = 0; i < priceArr.length; i++){
                            sum = sum + priceArr[i];
                        }
                        console.log(sum);
                        return sum;
                    }

                    $('.summ').text(newSumm());

                    console.log('Товар удален')
                },
                error: function () {
                    console.log('Товар не удален')
                }
            });

            return false;
        })
    })
});


$(function showOrders() {
    $('[data-role = "order"]').each(function () {
        var $orderForm = $(this);
        $orderForm.on('submit', function (event) {
            event.preventDefault();

            var summ = $('.summ').html();

            $.ajax({
                'url': '/?controller=order',
                'method': 'post',
                'data': {
                    summ: summ
                },
                success: function (data){
                    var count = data.count;
                    // console.log(count);
                    $('[data-role="cart-count"]').text(count);
                    // console.log('Заказ оформлен')

                    $('.itemsInCart').remove();
                    $('.total').remove();
                },
                error: function () {
                    // console.log('Ошибка')

                }
            });

            return false;
        })
    })
})

$(function showMoreGoods() {
    $('[data-role = "show-more-goods-form"]').each(function () {
        var $moreGoodsForm = $(this);
        $moreGoodsForm.on('submit', function (event) {
            event.preventDefault();

            console.log('more');

            var moreGoodsCount = 8;
            $.ajax({
                'url': '/?controller=show-more-goods',
                'method': 'post',
                'data': {
                    moreGoodsCount: moreGoodsCount
                },
                success: function (data){
                    var html = data.goods;
                    var ifMore = data.ifMore;

                    $('.goods').html(html);

                    if (!ifMore) {
                        $('.moreButton').remove();
                    }

                    console.log('успещно');
                },
                error: function () {
                    console.log('ошибка');
                }
            });

            return false;
        })
    })
})
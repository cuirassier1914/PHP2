$(function () {
    $('[data-role = "add-to-cart"]').each(function () {
        var $form = $(this);
        $form.on('submit', function (event) {
            event.preventDefault();
            var $idInput = $form.find('input[name="id"]');
            var id = $idInput.val();

            $.ajax({
                'url': '/add-to-cart-ajax',
                'method': 'post',
                'data': {
                    id: id
                },
                success: function (data){
                    var count = data.count;
                    $('[data-role="cart-count"]').text(count);
                    console.log('Товар добавлен')
                },
                error: function () {
                    console.log('Товар НЕ добавлен')
                }
            });

            return false;
        });
    });
});
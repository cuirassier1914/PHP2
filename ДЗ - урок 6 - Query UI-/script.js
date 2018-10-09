$('.accordion').accordion();

var baseUrl = 'http://212.92.98.105';
var user_id;

$.ajax({
    url: baseUrl + '/shop',
    success: function (data) {
        console.log(data);
        user_id = data.user_id;
        return user_id;
    }
})

$('.item').draggable({
    cursor: 'pointer',
    helper: 'clone',
    revert: 'true'
});
$('.cart').droppable({
    over: function () {
        $(this).css({
            'background-color': 'brown',
            'width': '200px'
        });
    },
    out: function () {
        $(this).css({
            'background-color': 'chocolate',
            'width': '150px'
        })
    },
    drop: function (a, b) {
        $(this).css({
            'background-color': 'chocolate',
        });
        $(b.draggable).detach().appendTo('.cart');

        var $number = $('.number');
        $number.html(+$number.html() + 1);
      
        var a = +$('.cart .item:nth-last-child(1) .price').html();
        var $total = $('.total');
        $total.html(+$total.html() + a);
      
      //ajax
      var product = $('.cart .item:nth-last-child(1) .drag').html();
      var price = a;
      $.ajax({
        url: baseUrl + '/shop?user_id=' + user_id + '&product=' + product + '&price=' + price,
        type: 'post',
        success: function(data) {
          console.log(data)

          var product_id = data.product_id
          $('.cart .item:nth-last-child(1)').attr('product_id', product_id);
        }
      })
    }
});

$('.category_content').droppable({
    drop: function (a, b) {
        $(b.draggable).detach().appendTo(this);
        var $number = $('.number');
        $number.html(+$number.html() - 1);
      
      var a = +$(this).find('.item:nth-last-child(1) .price').html();
      var $total = $('.total');
      $total.html(+$total.html() - a);
      
      var product_id = $(this).find('.item:nth-last-child(1)').attr('product_id');
      $.ajax({
        url: baseUrl + '/shop?user_id=' + user_id +'&product_id=' + product_id,
        type: 'delete',
        success: function(data) {
          console.log(data)
          
        }
      })
    }
});

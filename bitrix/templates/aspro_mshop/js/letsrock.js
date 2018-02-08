$(function() {
    function close() {
        $('#header .basket_fly').css('right', -$("#basket_line .basket_fly").outerWidth()-5);
        $('.fade-bg').addClass('hide');
        $('.basket_fly').removeClass('fly');
    }

    $('.header-cart').append('<div class="fade-bg hide"></div>');

    $('.header-cart').on('click', function(e) {
        var opener = $(e.target).parentsUntil('.basket_fly').last().hasClass('opener');
        if (!opener) return;

        $('.basket_fly').addClass('fly');
        setTimeout(function() {
            var right = +$('#header .basket_fly').css('right').split('px')[0];
            if (right === 0) return false;
            if ($('.fade-bg').hasClass('hide')) {
                $('.fade-bg').removeClass('hide');
                $('.fade-bg').on('click', close);
            } else {
                $('.fade-bg').addClass('hide');
                $('.basket_fly').removeClass('fly');
            }
        }, 400);
    });

    $('.menu_item_l1.catalog > a').on('click', function(e) {
        e.preventDefault();
        $('.menu_catalog_l1 .cat_menu').slideToggle();
    });
	//$(".basket_close").on('click', close);
    $(document).on('click', '.basket_close', function(e) {
		 $('.fade-bg').addClass('hide');
    });
	 $('.menuBot').on('click', function(e) {
        e.preventDefault();
     });
});
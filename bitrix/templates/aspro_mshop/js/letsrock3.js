
$(function() {
	/*$(".ckeck-a").on("click",function(){
		console.log(setTimeout(location.href, 500));
	});*/
	
	$(".check-filt-sv").on('click', function(){
		console.log($(this).attr("data-checkurl"));
	});
	var view = $(document).find('.block_viewed');
if(view){
	var basketaction = view.attr("data-basketaction");
	var topsecid = view.attr("data-topsecid");
		$.ajax({
					url: "/ajax/section_viewed.php", 
					type: "post",
					data: { 
						"basketaction": basketaction,
						"topsecid": topsecid
					},
					success: function(data){
						$('.block_viewed').html(data);
					}
		});
}
var view2 = $(document).find('.detail_footer');
if(view2){
		$.ajax({
					url: "/ajax/detail_view.php", 
					type: "post",
					data: {},
					success: function(data){
						$('.detail_footer').html(data);
					}
		});
}
var bigdata = $(document).find('.block_bigdata');
if(bigdata){
	var detailurl = bigdata.attr("data-detailurl");
	var secid = bigdata.attr("data-secid");
	var seccode = bigdata.attr("data-seccode");
	var secelemid = bigdata.attr("data-secelemid");
	var secelemcode = bigdata.attr("data-secelemcode");
	var id = bigdata.attr("data-id");
	var elementofferiblockid = bigdata.attr("data-elementofferiblockid");
		$.ajax({
					url: "/ajax/section_bigdata.php", 
					type: "post",
					data: { 
						"detailurl": detailurl,
						"secid": secid,
						"seccode": seccode,
						"secelemid": secelemid,
						"secelemcode": secelemcode,
						"id": id,
						"elementofferiblockid": elementofferiblockid
					},
					success: function(data){
						$('.block_bigdata').html(data);
					}
		});
}
var bigdata2 = $(document).find('.detail-bigdata');
if(bigdata2){
	var detailurl = bigdata2.attr("data-detailurl");
	var secid = bigdata2.attr("data-secid");
	var seccode = bigdata2.attr("data-seccode");
	var secelemid = bigdata2.attr("data-secelemid");
	var secelemcode = bigdata2.attr("data-secelemcode");
	var id = bigdata2.attr("data-id");
	var elementofferiblockid = bigdata2.attr("data-elementofferiblockid");
		$.ajax({
					url: "/ajax/detail_bigdata.php", 
					type: "post",
					data: { 
						"detailurl": detailurl,
						"secid": secid,
						"seccode": seccode,
						"secelemid": secelemid,
						"secelemcode": secelemcode,
						"id": id,
						"elementofferiblockid": elementofferiblockid
					},
					success: function(data){
						$('.detail-bigdata').html(data);
					}
		});
}
	var slides = $(".slides_index .slides").html();
	$('.recomlist').append(slides);
	
    function close() {
        $('#header .basket_fly').css('right', -$("#basket_line .basket_fly").outerWidth()-5);
        $('.fade-bg').addClass('hide');
        $('.basket_fly').removeClass('fly');
    }
	//$('.info_block').append(".dost").html();

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
	var items_tov = [getCookie('addBasId')];
	$('.button_block').on('click', function(e) {
        var name = $(this).attr("data-nametov");
		var url = $(this).attr("data-urltov");
		var img = $(this).attr("data-imgtov");
		var price = parseInt($(this).attr("data-pricetov"));
		var quant = parseInt($(this).siblings(".counter_block").find(".amouttov").val()); 
		var amout = price*quant;
		var id_offer = $(this).attr("data-idoffer");
		items_tov.push(id_offer);
		//set_cookie("addBasId", items_tov);
		document.cookie = "addBasId=" + items_tov + "; path=/;";
		/********убрал console********/
		//console.log(getCookie('addBasId'));
		carrotquest.track('$cart_added', {

            "$name": name,

           "$url": url,

           "$amount": amout,

          "$img": img,

});

		/*$.ajax({
					url: "/ajax/btn_onbasket.php", 
					type: "post",
					dataType: "json",
					data: { 
						"name": name,
						"url": url,
						"img": img,
						"amout": amout
					},
				
					success: function(data){
						if(data.result){
						console.log(data.result);
						}
					}
				});*/
    });
	//console.log(getCookie('addBasId'));
	function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
	/********Добавление и удаление количества товаров********/
$('[data-but="minus"], [data-but="plus"]').on("click",function(e){
		e.preventDefault();
		
		if($(this).text() == "-"){
				var but = 0;
		}
		if($(this).text() == "+"){
			var but = 1;
		}
		
		var id_tov = $(this).siblings(".idtov").val();
		$.ajax({
					url: "/ajax/actbasquant.php", 
					type: "post",
					dataType: "json",
					data: { 
						"but": but,
						"id_tov": id_tov
					
					},
					success: function(data){					
						if(data.result){
							location.reload();
						}
					}
				});
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

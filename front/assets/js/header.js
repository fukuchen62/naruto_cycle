// // headerをスクロールすると、色が変わる

$(function() {
  $(window).on('load scroll', function(){
      if ($(window).scrollTop() > 300) {
          $('.fix_menu').addClass('fixed_menu');
      } else {
          $('.fix_menu').removeClass('fixed_menu');
      }

  });
});

// jQuery(function($) {

// 	var logo = jQuery('#logo');
// 	var height = jQuery(window).height();
// 	var w = $(window).width(); //ウィンドウの高さ
// 	var x = 960; //タブレットの画面幅
// 	var y = 560; //スマホの画面幅

//     if ( w > x ) { //画面幅が961px以上のとき

// 		jQuery(window).scroll(function () {
// 			if (jQuery(this).scrollTop() > height) { //スクロールが画面の高さを越えたら
// 				logo.addClass('invert');
// 			} else { //スクロールが画面の高さを越えなければ
// 				logo.removeClass('invert');
// 			}
// 		});

// 	} else if( x >= w && w > y ) { //画面幅が561px以上960px以下のとき

// 		jQuery(window).scroll(function () {
// 			if (jQuery(this).scrollTop() > 500) { //スクロールが500pxを越えたら
// 				logo.addClass('invert');
// 			} else { //スクロールが500pxを越えなければ
// 				logo.removeClass('invert');
// 			}
// 		});

// 	} else { //画面幅が560px以下のとき

// 		jQuery(window).scroll(function () {
// 			if (jQuery(this).scrollTop() > 250) { //スクロールが250pxを越えたら
// 				logo.addClass('invert');
// 			} else { //スクロールが250pxを越えなければ
// 				logo.removeClass('invert');
// 			}
// 		});

// 	}
// });

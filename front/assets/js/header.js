// スクロールでヘッダーの色が変わる設定
$(function () {
  $(window).on('scroll', function () {
      if ($('.bg-slider').height() < $(this).scrollTop()) {
          $('.js-header').addClass('change-color');
    } else {
          $('.js-header').removeClass('change-color');
    }
  });
});

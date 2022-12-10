// <!-- TOPに戻るボタン用 -->
jQuery(document).ready(function () {

  var topBtn = $('.pagetop');
  topBtn.hide();

  //ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      //---- 画面を200pxスクロールしたら、ボタンを表示する
      topBtn.fadeIn();
    } else {
      //---- 画面が200pxより上なら、ボタンを表示しない
      topBtn.fadeOut();
    }
  });

  //ボタンをクリックしたら、スクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
});

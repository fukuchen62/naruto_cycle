$(function () {
    $(".js-sub-img img").on("click", function () {
      // メイン画像に切り替えるimgのsrc取得
      img = $(this).attr("src");
      // currentクラス付け替え(枠線などを変えたい時に)
      $(".js-sub-img li").removeClass("current");
      $(this).parent().addClass("current");
      // fadeOutできたらsrc変更してfadeIn
      $(".js-main-img img").fadeOut(500, function () {
        $(".js-main-img img")
          .attr("src", img)
          .on("load", function () {
            $(this).fadeIn(500);
          });
      });
    });
  });
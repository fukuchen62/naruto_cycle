// "use strict";

// ハンバーガーメニュー用
jQuery(document).ready(function () {

    $(".js-btn").on("click", function () {
        // js-btnクラスをクリックすると、
        $(".menu, .btn-line").toggleClass("open"); // メニューとバーガーの線にopenクラスをつけ外しする
    });


    // お気に入りボタン用
    $('.spot_like_icon').on('click', function () {
        let $btn = $(this);
        // Likeボタンがonクラス持っていたら
        if ($btn.hasClass('on')) {
            $btn.removeClass('on');
            // 白抜きアイコンに戻す
            $btn.children("i").attr('class', 'far fa-heart LikesIcon-fa-heart');
        } else {
            $btn.addClass('on');
            // ポイントは2つ！！
            // ①アイコンを変更する
            // far fa-heart（白抜きアイコン）
            // ⇒ fas fa-heart（背景色つきアイコン）
            // ②アニメーション+アイコン色変更用のheartクラスを付与する
            $btn.children("i").attr('class', 'fas fa-heart LikesIcon-fa-heart heart');
        }
    });

});

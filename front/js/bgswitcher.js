"use strict";

jQuery(function ($) {
    $(".bg-slider").bgSwitcher({
        images: [
            "uploads/IMG_8143.JPG",
            // "img/key_visual/key_visual02.webp",
            // "img/key_visual/key_visual03.jpg",
            // "img/key_visual/key_visual04.jpg",
            // "img/key_visual/key_visual05.jpg",
        ], // 切替背景画像を指定
        interval: 3500, // 背景画像を切り替える間隔を指定 3000=3秒
        loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
        shuffle: false, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
        effect: "fade", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
        duration: 1000, // エフェクトの時間を指定します。
        easing: "swing", // エフェクトのイージングをlinear,swingから指定
    });
});

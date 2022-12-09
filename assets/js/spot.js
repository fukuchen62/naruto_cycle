"use strict";

$(".slider").slick({
	dots: true, //スライドしたのドット
	customPaging: function (slick, index) {
		// スライダーのインデックス番号に対応した画像のsrcを取得
		var targetImage = slick.$slides.eq(index).find("img").attr("src");
		// slick-dots > liの中に上記で取得した画像を設定
		return '<img src=" ' + targetImage + ' "/>';
	},
});
$(".slider").slick({
	autoplay: true, //自動再生
	autoplaySpeed: 2000, //自動再生のスピード
	speed: 800, //スライドするスピード
	arrows: true, //左右の矢印
	infinite: true, //スライドのループ
	pauseOnHover: false, //ホバーしたときにスライドを一時停止しない
	variableWidth: true, //width等をcssで管理
});

"use strict";

// slickの設定
$(document).ready(function () {
	$(".more_naruto_card_list").slick({
		// slidesToShow: 3,  //一度に表示する画像の数
		slidesToScroll: 1, //一度のスクロールで動く数
		autoplay: true,
		autoplaySpeed: 1000, //一旦停止してから動くまでの時間
		speed: 2000, //スクロールするスピード
		arrows: false, //左右の矢印は非表示
		cssEase: "linear", //滑らかに
		infinite: true, //無限に流れ続ける
		variableWidth: true, //width等をcssで管理
		dots: true, //下に点を表示
		centerMode: true, //最初に表示するものを中央に
	});
});

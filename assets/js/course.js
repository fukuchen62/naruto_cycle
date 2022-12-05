"use strict";

// コースがクリックされた場合の挙動（データベースで画面遷移する場合は不要かも）
$(".course_nav.beginner").click(function () {
	$(".iframe_wrapper")
		.removeClass("short")
		.removeClass("middle")
		.removeClass("long")
		.addClass("beginner");
	$(".course_iframe").attr(
		"src",
		"https://www.google.com/maps/d/u/0/embed?mid=1U-au0BIPQuKPq7I5h3-k2B5TPSR7aLk&ehbc=2E312F"
	);
});
$(".course_nav.short").click(function () {
	$(".iframe_wrapper")
		.removeClass("beginner")
		.removeClass("middle")
		.removeClass("long")
		.addClass("short");
	$(".course_iframe").attr(
		"src",
		"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d417837.29400936596!2d135.43867906406007!3d35.09787390818403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001a8d6cd3cc3f1%3A0xc0961d366bbb1d3d!2z5Lqs6YO95bqc5Lqs6YO95biC!5e0!3m2!1sja!2sjp!4v1669542379382!5m2!1sja!2sjp"
	);
});
$(".course_nav.middle").click(function () {
	$(".iframe_wrapper")
		.removeClass("beginner")
		.removeClass("short")
		.removeClass("long")
		.addClass("middle");
	$(".course_iframe").attr(
		"src",
		"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207439.72485752907!2d139.67494006410578!3d35.670951658809095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b857628235d%3A0xcdd8aef709a2b520!2z5p2x5Lqs6YO95p2x5Lqs!5e0!3m2!1sja!2sjp!4v1669542218933!5m2!1sja!2sjp"
	);
});
$(".course_nav.long").click(function () {
	$(".iframe_wrapper")
		.removeClass("beginner")
		.removeClass("short")
		.removeClass("middle")
		.addClass("long");
	$(".course_iframe").attr(
		"src",
		"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d840136.7674177035!2d134.85883703576513!3d34.6601512909704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e86b2acc70d7%3A0xa399ff48811f596d!2z5aSn6Ziq5bqc!5e0!3m2!1sja!2sjp!4v1669542436434!5m2!1sja!2sjp"
	);
});

// コース情報の後ろで回転する装飾のアニメーション
const before = $(".text");
const text = before.text(); // spanタグで囲む前のテキストを取得
const textArray = text.split(""); // 取得したテキストを1文字ずつに分割し配列に

let after = "";
$.each(textArray, function (index, val) {
	// 配列のそれぞれ（1文字）をinfo_cycle_decoクラスで囲み、繋げる
	after += '<span class="info_cycle_deco">' + val + "</span>";
});

before.html(after); // 元のテキストに生成したタグごと置き換え

const textcnt = textArray.length; // これは、const textcnt = $('info_cycle_deco').length; と同じ
const circleR = $(".circle").height() / 2; // 円の半径
const fontH = $(".inner").height();
const dist = circleR - fontH;

$(".info_cycle_deco").each(function (index) {
	const num = index + 1;
	const radX = Math.sin((360 / textcnt) * num * (Math.PI / 180)); // 文字の中心からのX軸方向の移動距離を計算
	const radY = Math.sin((90 - (360 / textcnt) * num) * (Math.PI / 180)); // 文字の中心からのY軸方向の移動距離（実際にはマイナス移動）を計算
	$(this).css(
		"transform",
		"translate(" +
			dist * radX +
			"px, " +
			-(dist * radY) +
			"px) rotate(" +
			(360 / textcnt) * num +
			"deg)"
	); // 文字を水平維持ならば、rotateプロパティは不要
});

// もっと見るボタンを押したときに直上のカードを表示
$(".spot_more_btn").click(function () {
	// 押したボタンから見て親に当たる要素(今回はul)の子(今回はli)のcssを書き換え
	$(this).prev().children().css({ display: "inline-block" });
	$(this).css({ display: "none" });
});

// $(".spot_more_btn").on("load", function () {
// 	// ボタンから見て親に当たる要素(今回はul)の子(今回はli)の数をカウント
// 	var list = $(this).prev().children().length;
// 	console.log(list);
// 	// 3以下ならボタン非表示。
// 	if (list < 3) $(this).css({ display: "none" });
// });

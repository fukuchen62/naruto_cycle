"use strict";

// ボタンの表示設定
$(window).on("load", function () {
	// ボタンから見て親に当たる要素(今回はul)の子(今回はli)の数をカウント
	var list = $(".spot_more_btn").prev().children().length;
	// console.log(list);

	// 画面幅の取得
	var windowWidth = $(window).width();
	var windowSp = 671;
	var windowPc = 1023;

	if (list == 1) $(".spot_list").css({ "justify-content": "center" });

	if (windowWidth <= windowSp) {
		//横幅671px以下（1カラム）に適用
		// spの場合
		// 4件以上ならボタン非表示。
		if (list > 3) $(".spot_more_btn").css({ display: "block" });
	} else if (windowWidth <= windowPc) {
		//横幅1023px以下（2カラム）に適用させるJavaScript
		// tbの場合
		// 5件以上ならボタン非表示。
		if (list > 4) $(".spot_more_btn").css({ display: "block" });
	} else {
		//それ以外（PC）に適用
		// pcの場合
		// 7件以上ならボタン非表示
		if (list > 6) $(".spot_more_btn").css({ display: "block" });
	}
});
// もっと見るボタンを押したときに直上のカードを表示
$(".spot_more_btn").click(function () {
	// 押したボタンから見て親に当たる要素(今回はli)の子(今回はul)のcssを書き換え
	$(this).prev().children().css({ display: "inline-block" });
	$(this).css({ display: "none" });
});

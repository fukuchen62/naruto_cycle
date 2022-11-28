"use strict";

// もっと見るボタンを押したときに直上のカードを表示
$(".spot_more_btn").click(function () {
	// 押したボタンから見て親に当たる要素(今回はli)の子(今回はul)のcssを書き換え
	$(this).prev().children().css({ display: "inline-block" });
	$(this).css({ display: "none" });
});

"use strict";
// リセットボタンの設定
$(".reset-btn").click(function () {
	//チェックボックスのチェックを全解除
	$(".checkbox_list").prop("checked", false);
	// checkクラスのついているボタンのみチェック（今回は初心者コースのボタン）
	$(".check").prop("checked", true);
});

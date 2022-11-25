"use strict";

$(function () {
	$(".button").on("click", function () {
		$(".button").not(this).removeClass("active");
		$(this).toggleClass("active");
	});
});

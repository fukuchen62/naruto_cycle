"use strict";

$(".course_nav.beginner").click(function () {
	$(".iframe_wrapper").removeClass("short");
	$(".iframe_wrapper").removeClass("middle");
	$(".iframe_wrapper").removeClass("long");
	$(".iframe_wrapper").addClass("beginner");
});
$(".course_nav.short").click(function () {
	$(".iframe_wrapper").removeClass("begginer");
	$(".iframe_wrapper").removeClass("middle");
	$(".iframe_wrapper").removeClass("long");
	$(".iframe_wrapper").addClass("short");
});
$(".course_nav.middle").click(function () {
	$(".iframe_wrapper").removeClass("begginer");
	$(".iframe_wrapper").removeClass("short");
	$(".iframe_wrapper").removeClass("long");
	$(".iframe_wrapper").addClass("middle");
});
$(".course_nav.long").click(function () {
	$(".iframe_wrapper").removeClass("begginer");
	$(".iframe_wrapper").removeClass("short");
	$(".iframe_wrapper").removeClass("middle");
	$(".iframe_wrapper").addClass("long");
});

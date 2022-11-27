"use strict";

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

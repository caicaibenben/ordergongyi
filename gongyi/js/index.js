$(document).ready(function () {
	$('[data-toggle="tooltip"]').tooltip();
	$('.leftnav_subtitle').click(function () {
		$(this).next().slideToggle(300);
	});
	$('.nav-sidebar > li > a').click(function () {
		 $('.main_title>ul>li>a').eq(2).text($(this).text());
		//alert($(this).text());
	});
});
$(document).ready(function () {
	//切屏动画
	var imgCount_banner = 0;//记录banner切换数据编号
	var imgCount_tumb_banner=0;//记录缩略图切换数据编号
	var imgLength_banner = $(".img_box img").length;//banner的总数
	var imgLength_tumb_banner = $(".img_box_tumb img").length;//缩略图的总数
	var imgWidthEach_banner =670;//单个banner的宽度-像素
	var imgWidthEach_tumb_banner =155;//单个缩略图的宽度-像素
	var  imgTimer_banner = null;//记录定时切换
	$(".img_box_tumb img").eq(imgCount_tumb_banner).addClass("active");
	console.log(imgLength_banner);
	console.log(imgLength_tumb_banner);
	//图片移动处理，1向右 -1向左
	function imgMove(direction,speed) {
		//banner处理
		imgCount_banner+=direction;
		if(imgCount_banner==imgLength_banner){//banner到达尾部情况的处理
			//console.log(imgCount);
			imgCount_banner=1;
			$('.img_box').css({'left':0});
		}
		if(imgCount_banner<0){//banner到达头部情况的处理
			//console.log(imgCount);
			imgCount_banner=imgLength_banner-2;
			$('.img_box').css({'left':-(imgLength_banner-1)*imgWidthEach_banner});
		}
		$(".img_box").stop().animate({'left':-imgCount_banner*imgWidthEach_banner},speed);

		//缩略图处理
		imgCount_tumb_banner+=direction;
		if(imgCount_tumb_banner==(imgLength_tumb_banner-1)){//缩略图向右到达尾部情况的处理
			imgCount_tumb_banner=imgCount_tumb_banner%5;
			$('.img_box_tumb').css({'left':0});
		}
		if(imgCount_tumb_banner<0){//缩略图开始在0位置时向左移动的处理
			imgCount_tumb_banner=4;
			$('.img_box_tumb').css({'left':-5*imgWidthEach_tumb_banner});
		}
		if(imgCount_tumb_banner<1){//缩略图向左到达头部移动的处理
			//console.log(imgCount);
			imgCount_tumb_banner=5;
			$('.img_box_tumb').css({'left':-5*imgWidthEach_tumb_banner});
		}
		//添加红色边框
		$(".img_box_tumb img").removeClass("active");
		$(".img_box_tumb img").eq(imgCount_tumb_banner).addClass("active");

		//缩略图向右移动
		if(imgCount_tumb_banner>=3&&direction>0){
			$(".img_box_tumb").stop().animate({'left':-(imgCount_tumb_banner-2)*imgWidthEach_tumb_banner*direction},speed);
		}
		//缩略图向左移动
		if(imgCount_tumb_banner<=5&&direction<0){
			$(".img_box_tumb").stop().animate({'left':(imgCount_tumb_banner-1)*imgWidthEach_tumb_banner*direction},speed);
		}
	}
	imgTimer_banner = window.setInterval(imgMove, 4000,1,500);
	// //图标鼠标事件
	// $("#icon-out  .icon  img").on({
	// 	mouseover:function(){
	// 		if($(this).attr("src")!="image/book_active.png"){
	// 			$(this).attr("src","image/book_active.png");
	// 			isIconChange=true;
	// 		}
	// 		window.clearInterval(imgTimer);
	// 	},
	// 	mouseout:function(){
	// 		//console.log($(this).attr("src"));
	// 		if(isIconChange==true){
	// 			$(this).attr("src","image/book.png");
	// 			isIconChange=false;
	// 		}
	// 		imgTimer = window.setInterval(imgMove,4000);
	// 	},
	// 	click:function(){
	// 		//console.log("click"+$(this).attr("alt"));
	// 		var index=Number($(this).attr("alt"));
	// 		//console.log(index);
	// 		if(index!=imgCount){
	// 			imgCount=index;
	// 			isIconChange=false;
	// 			$("#img_out").stop().animate({'left':-imgCount*imgWidthEach},500);
	// 			$(".text_out_box  .text_img_box").eq(imgCount).show().siblings().hide();
	// 			$("#icon-out  .icon  img").eq(imgCount).attr("src","image/book_active.png");
	// 			for(var i=0;i<imgLength;i++)
	// 			{
	// 				if(i==imgCount){
	// 					continue;
	// 				}
	// 				$("#icon-out  .icon  img").eq(i).attr("src","image/book.png")
	// 			}
	// 		}
	//
	// 	}
	// });
	//缩略图点击
	$(".img_box_tumb img").on("click",function () {
		var index=$(this).index()-imgCount_tumb_banner;
		if(Math.abs(index)==1){
			imgMove(index,500);
		}else if(Math.abs(index)==2){
			imgMove(index/2,250);
			imgMove(index/2,250);
		}
	});
	//左箭头点击
	$("#banner_leftbtn").on("click",function () {
		imgMove(-1,500);
	});
	//右箭头点击
	$("#banner_rightbtn").on("click",function () {
		imgMove(1,500);
	});

	//切屏动画
	var imgCount_gallery = 0;//初始化并记录切换数据
	var imgLength_gallery = $(".gallery_box .gallery").length;
	var imgWidthEach_gallery =182;
	var  imgTimer_gallery = null;//记录定时切换
	console.log(imgLength_gallery);
	function imgMove_gallery() {
		imgCount_gallery++;
		if(imgCount_gallery==(imgLength_gallery-4)){
			imgCount_gallery=1;
			$('.gallery_box').css({'left':0});
		}
		$(".gallery_box").stop().animate({'left':-imgCount_gallery*imgWidthEach_gallery},500);
	}
	imgTimer_gallery = window.setInterval(imgMove_gallery, 3000);
	//图标鼠标事件
	$(".gallery").on({
		mouseover:function(){
			window.clearInterval(imgTimer_gallery);
			$(this).find(".gallery_shadow").slideDown("slow");//.css("display","block");
		},
		mouseleave:function(){
			imgTimer_gallery = window.setInterval(imgMove_gallery,3000);
			$(this).find(".gallery_shadow").slideUp("slow");
		}
	});
	$("#gallery_leftbtn").on("click",function () {
		imgCount_gallery--;
		if(imgCount_gallery<0){
			imgCount_gallery=6;
			$('.gallery_box').css({'left':-1092});
		}
		$(".gallery_box").stop().animate({'left':-imgCount_gallery*imgWidthEach_gallery},500);
	});
	$("#gallery_rightbtn").on("click",function () {
		imgCount_gallery++;
		if(imgCount_gallery==(imgLength_gallery-4)){
			imgCount_gallery=1;
			$('.gallery_box').css({'left':0});
		}
		$(".gallery_box").stop().animate({'left':-imgCount_gallery*imgWidthEach_gallery},500);
	});

	//切屏动画
	var imgCount_carousel = 0;//初始化并记录切换数据
	var imgLength_carousel = $(".carousel_box img").length;
	var imgWidthEach_carousel =983;
	var imgTimer_carousel = null;//记录定时切换
	console.log(imgLength_carousel);
	function imgMove_carousel() {
		imgCount_carousel++;
		if(imgCount_carousel==imgLength_carousel){
			imgCount_carousel=1;
			$('.carousel_box').css({'left':0});
		}
		$(".carousel_box").stop().animate({'left':-imgCount_carousel*imgWidthEach_carousel},1000);
	}
	imgTimer_carousel = window.setInterval(imgMove_carousel, 5000);
	//图标鼠标事件
	// $(".gallery").on({
	// 	mouseover:function(){
	// 		window.clearInterval(imgTimer_gallery);
	// 		$(this).find(".gallery_shadow").slideDown("slow");//.css("display","block");
	// 	},
	// 	mouseleave:function(){
	// 		imgTimer_gallery = window.setInterval(imgMove,3000);
	// 		$(this).find(".gallery_shadow").slideUp("slow");
	// 	}
	// });
	$(".carousel_leftbtn").on("click",function () {
		imgCount_carousel--;
		if(imgCount_carousel<0){
			imgCount_carousel=4;
			$('.carousel_box').css({'left':-4915});
		}
		$(".carousel_box").stop().animate({'left':-imgCount_carousel*imgWidthEach_carousel},1000);
	});
	$(".carousel_rightbtn").on("click",function () {
		imgCount_carousel++;
		if(imgCount_carousel==imgLength_carousel){
			imgCount_carousel=1;
			$('.carousel_box').css({'left':0});
		}
		$(".carousel_box").stop().animate({'left':-imgCount_carousel*imgWidthEach_carousel},1000);
	});
});



$(document).ready(function () {
	//切屏动画
	var imgCount = 0;//初始化并记录切换数据
	var imgLength = $(".gallery_box .gallery").length;
	var imgWidthEach =182;
	var  imgTimer = null;//记录定时切换
	console.log(imgLength);
	function imgMove() {
		imgCount++;
		if(imgCount==(imgLength-4)){
			imgCount=1;
			$('.gallery_box').css({'left':0});
		}
		$(".gallery_box").stop().animate({'left':-imgCount*imgWidthEach},500);
	}
	imgTimer = window.setInterval(imgMove, 4000);
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
	$("#gallery_leftbtn").on("click",function () {
		imgCount--;
		if(imgCount<0){
			imgCount=6;
			$('.gallery_box').css({'left':-1092});
		}
		$(".gallery_box").stop().animate({'left':-imgCount*imgWidthEach},500);
	});
	$("#gallery_rightbtn").on("click",function () {
		imgCount++;
		if(imgCount==(imgLength-4)){
			imgCount=1;
			$('.gallery_box').css({'left':0});
		}
		$(".gallery_box").stop().animate({'left':-imgCount*imgWidthEach},500);
	});
});

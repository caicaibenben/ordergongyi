$(document).ready(function () {
	//切屏动画
	var imgCount = 0;//初始化并记录切换数据
	var imgCount_tumb=0;
	var imgLength = $(".img_box img").length;
	var imgLength_tumb = $(".img_box_tumb img").length;
	var imgWidthEach =674;
	var imgWidthEach_tumb =155;
	var  imgTimer = null;//记录定时切换
	console.log(imgLength);
	console.log(imgLength_tumb);
	function imgMove() {
		imgCount++;
		imgCount_tumb++;
		console.log(imgCount);
		if(imgCount==imgLength){
			//console.log(imgCount);
			imgCount=1;
			$('.img_box').css({'left':0});
		}
		if(imgCount_tumb==(imgLength_tumb-3)){
			imgCount_tumb=1;
			$('.img_box_tumb').css({'left':0});
		}
		$(".img_box").stop().animate({'left':-imgCount*imgWidthEach},500);
		$(".img_box_tumb").stop().animate({'left':-imgCount_tumb*imgWidthEach_tumb},500);
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
	// $(".btn_left").on("click",function () {
	// 	console.log("left");
	// 	imgCount=imgCount==0?3:(imgCount-1);
	// 	$("#img_out").stop().animate({'left':-imgCount*imgWidthEach},500);
	// 	$(".text_out_box  .text_img_box").eq(imgCount).show().siblings().hide();
	// 	$("#icon-out  .icon  img").eq(imgCount).attr("src","image/book_active.png");
	// 	for(var i=0;i<imgLength;i++)
	// 	{
	// 		if(i==imgCount){
	// 			continue;
	// 		}
	// 		$("#icon-out  .icon  img").eq(i).attr("src","image/book.png")
	// 	}
	//
	// });
	$(".btn_right").on("click",function () {
		console.log("right");
		imgCount=imgCount==3?0:(imgCount+1);
		$("#img_out").stop().animate({'left':-imgCount*imgWidthEach},500);
		$(".text_out_box  .text_img_box").eq(imgCount).show().siblings().hide();
		$("#icon-out  .icon  img").eq(imgCount).attr("src","image/book_active.png");
		for(var i=0;i<imgLength;i++)
		{
			if(i==imgCount){
				continue;
			}
			$("#icon-out  .icon  img").eq(i).attr("src","image/book.png")
		}
	});
});

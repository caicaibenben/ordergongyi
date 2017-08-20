$(document).ready(function () {
    //切屏动画
    var imgCount_banner = 0;//初始化并记录切换数据
    var imgCount_tumb_banner=0;
    var imgLength_banner = $(".img_box img").length;
    var imgLength_tumb_banner = $(".img_box_tumb img").length;
    var imgWidthEach_banner =670;
    var imgWidthEach_tumb_banner =155;
    var  imgTimer_banner = null;//记录定时切换
    console.log(imgLength_banner);
    console.log(imgLength_tumb_banner);
    function imgMove() {
        imgCount_banner++;
        imgCount_tumb_banner++;
        console.log(imgCount_banner);
        if(imgCount_banner==imgLength_banner){
            //console.log(imgCount);
            imgCount_banner=1;
            $('.img_box').css({'left':0});
        }
        if(imgCount_tumb_banner==(imgLength_tumb_banner-3)){
            imgCount_tumb_banner=1;
            $('.img_box_tumb').css({'left':0});
        }
        $(".img_box").stop().animate({'left':-imgCount_banner*imgWidthEach_banner},500);
        $(".img_box_tumb").stop().animate({'left':-imgCount_tumb_banner*imgWidthEach_tumb_banner},500);
    }
    imgTimer_banner = window.setInterval(imgMove, 4000);
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
    $("#banner_leftbtn").on("click",function () {
        console.log("left");
        imgCount_banner--;
        imgCount_tumb_banner--;
        if(imgCount_banner<0){
            imgCount_banner=4;
            $('.img_box').css({'left':-3370});
        }
        if(imgCount_tumb_banner<0){
            imgCount_tumb_banner=4;
            $('.img_box_tumb').css({'left':-775});
        }
        $(".img_box").stop().animate({'left':-imgCount_banner*imgWidthEach_banner},500);
        $(".img_box_tumb").stop().animate({'left':-imgCount_tumb_banner*imgWidthEach_tumb_banner},500);
    });
    $("#banner_rightbtn").on("click",function () {
        console.log("right");
        imgCount_banner++;
        imgCount_tumb_banner++;
        if(imgCount_banner==imgLength_banner){
            imgCount_banner=1;
            $('.img_box').css({'left':0});
        }
        if(imgCount_tumb_banner==(imgLength_tumb_banner-3)){
            imgCount_tumb_banner=1;
            $('.img_box_tumb').css({'left':0});
        }
        $(".img_box").stop().animate({'left':-imgCount_banner*imgWidthEach_banner},500);
        $(".img_box_tumb").stop().animate({'left':-imgCount_tumb_banner*imgWidthEach_tumb_banner},500);
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
            imgCount_carousel=2;
            $('.carousel_box').css({'left':-2949});
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




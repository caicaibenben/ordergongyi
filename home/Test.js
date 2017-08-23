$().ready(function () {
	var heart=0;
	var heartCount=0;
	var man=0;
	var manCount=0;
	$.ajax({
		type: "GET",
		url: 'http://10.20.1.36/mobile/index.php?act=member_love&op=get_love_log',
		data: {},
		dataType: "jsonp",
		success: function(result){
			console.log(result.datas);
			heart=(result.datas==null)?0:result.datas.length;
			heartCount=Math.ceil(heart/5000);
			console.log("heartCount"+heartCount);
			setHeartCount(heartCount);
			setManCount(manCount);
		}
	});

	function setHeartCount(){
		if(heartCount<=5){
			for(var i=5-heartCount;i<5;i++){
				$('.showbox .heart img').eq(i).attr("src","../image/ico/heart_active.png");
			}
		}else if(heartCount<=10&&heartCount>5){
			$('.showbox .heart img').eq(0).attr("src","../image/ico/heart_active.png");
			$('.showbox .heart img').eq(1).attr("src","../image/ico/heart_active.png");
			$('.showbox .heart img').eq(2).attr("src","../image/ico/heart_active.png");
			$('.showbox .heart img').eq(3).attr("src","../image/ico/heart_active.png");
			$('.showbox .heart img').eq(4).attr("src","../image/ico/heart_active.png");
			for(var i=15-heartCount;i<10;i++){
				$('.showbox .heart img').eq(i).attr("src","../image/ico/heart_active.png");
			}
		}
		if(heart<1000){
			var str=heart.toString();
		}else{
			var str=Math.ceil(heart/1000).toString()+','+(heart%1000).toString();
		}
		$("#context_heart span").text(str+'/50,000');
	}
	function setManCount() {
		if(manCount<=5){
			for(var i=5-manCount;i<5;i++){
				$('.showbox .man img').eq(i).attr("src","../image/ico/people_active.png");
			}
		}else if(manCount<=10&&manCount>5){
			$('.showbox .man img').eq(0).attr("src","../image/ico/people_active.png");
			$('.showbox .man img').eq(1).attr("src","../image/ico/people_active.png");
			$('.showbox .man img').eq(2).attr("src","../image/ico/people_active.png");
			$('.showbox .man img').eq(3).attr("src","../image/ico/people_active.png");
			$('.showbox .man img').eq(4).attr("src","../image/ico/people_active.png");
			for(var i=15-manCount;i<10;i++){
				$('.showbox .man img').eq(i).attr("src","../image/ico/people_active.png");
			}
		}
		$("#context_man span").text(manCount+'/30');
	}

});

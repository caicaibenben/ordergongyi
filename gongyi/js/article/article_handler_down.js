$().ready(function () {
	var delIDArray=new Array();//删除ID数组
	var articleArray=new Array();//获取文章数组
	var type=["活动报道","精准助学","往期回顾","展望未来"];
	var mark=["保密","公开","推荐"];
	var pageNo=1;//当前页数，默认页数为1
	var pageCheck=1;//查询页数
	var pageNum=1;//总页数
	//获取多选框选中值
	function getCheckboxValue(){
		delIDArray.splice(0,delIDArray.length);
		$('input:checkbox[name="checkbox"]:checked').each(function () {
			delIDArray.push($(this).val());
		});
		return delIDArray.length;
	}
	//文章显示
	function articleShow(page) {
		$.post("article_handle_down.php?page="+page,
			{},
			function (data,status) {
				//console.log(status);
				//console.log(data);
				if(data.indexOf("fail")==-1){
					articleArray=JSON.parse(data);
					console.log(articleArray);
					pageNum=articleArray['0'][0];
					pageCheck=articleArray['0'][1];
					pageNo=pageCheck;
					$('tbody').empty();
					for(var i=1;i<=articleArray.length;i++){
						//console.log(articleArray[i]);
						$('tbody').append('<tr></tr>');
						$('tbody tr:last').append('<td class="hidden-xs"><input type="checkbox" class="input-control" name="checkbox" value="'+articleArray[i][0]+'"/></td>');
						$('tbody tr:last').append('<td>'+articleArray[i][0]+'</td>');
						$('tbody tr:last').append('<td class="article-title">'+articleArray[i][1]+'</td>');
						$('tbody tr:last').append('<td class="hidden-sm hidden-xs">'+type[articleArray[i][2]]+'</td>');
						$('tbody tr:last').append('<td class="hidden-sm hidden-xs">'+mark[articleArray[i][3]]+'</td>');
						$('tbody tr:last').append('<td class="hidden-sm hidden-xs">'+articleArray[i][4]+'</td>');
						$('tbody tr:last').append('<td><a href="articledetail.php?act=modify&id='+articleArray[i][0]+'">修改</a> <a articleid="'+articleArray[i][0]+'">删除</a></td>');
					}
				}
			}
		);
	}
	//文章删除
	function articleDel(delArray) {
		$.post("article_handle_down.php?act=del",
			{IDArray:delArray},
			function (data,status) {
				console.log(status+data);
			}
		);
	}
	//全选按钮
	$('#selectAll').click(function () {
		console.log("selectall");
		// $('input:checkbox[name="checkbox"]').each(function () {
		// 	$(this).attr("checked","");
		// });
		$('input:checkbox[name="checkbox"]').each(function () {
			$(this).prop("checked",true);
		});
	});
	//反选按钮
	$('#reverseSelect').click(function () {
		$('input:checkbox[name="checkbox"]').each(function () {
			if($(this).prop("checked")==true){
				$(this).prop("checked",false);
			}else{
				$(this).prop("checked",true);
			}
		});
	});
	//不选按钮
	$('#noSelectAll').click(function () {
		$('input:checkbox[name="checkbox"]').each(function () {
			$(this).prop("checked",false);
		});
	});
	//多个删除按钮
	$('#checkbox_delete').click(function () {
		if(getCheckboxValue()>=0){
			//console.log(delIDArray);
			articleDel(delIDArray);
			articleShow(pageNo);
		}else{
			console.log('null');
		}
	});
	//单个删除按钮
    $("tbody").on('click',"tr td a:odd",function () {
    	var delArray=new Array();
		delArray[0]=$(this).attr('articleid');
		articleDel(delArray);
		articleShow(pageNo);

	});
	//页面切换处理
	$("#pagerow li").click(function () {
		if($(this).text().indexOf("<<")!=-1){
			if(pageNo==1){
				alert("已到首页");
			}else{
				pageNo--;
			}
		}else if($(this).text().indexOf(">>")!=-1){
			if(pageNo>=pageNum){
				alert("已到尾页");
			}else{
				pageNo++;
			}
		}else if($(this).text()<=pageNum){
			//alert("1"+$(this).text()+"2");
			pageNo=$(this).text();
		}else{
			alert("已到尾页");
		}
		articleShow(pageNo);
		$("#pagerow li[class='active']").removeClass("active");
		if(pageNo<=5){
			var i=1;
			$("#pagerow li a:gt(0):lt(5)").each(function () {
				$(this).text(i);
				i++;
			});
			$("#pagerow li").eq(pageNo).addClass("active");
		}else{
			var i=pageNo-4;
			$("#pagerow li a:gt(0):lt(5)").each(function () {
				$(this).text(i);
				i++;
			});
			$("#pagerow li").eq(5).addClass("active");
		}
	});
	//最开始默认加载第一页
    articleShow(1);
});

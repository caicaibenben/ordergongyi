$().ready(function () {
	var delIDArray=new Array();
	var articleArray=new Array();
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
				console.log(status);
				articleArray=JSON.parse(data);
				console.log(articleArray);
				console.log(articleArray.length);
				$('tbody').empty();
				for(var i=0;i<articleArray.length;i++){
					console.log(articleArray[i]);
					$('tbody').append('<tr></tr>');
					$('tbody tr:last').append('<td class="hidden-xs"><input type="checkbox" class="input-control" name="checkbox" value="'+articleArray[i][0]+'"/></td>');
					$('tbody tr:last').append('<td>'+articleArray[i][0]+'</td>');
					$('tbody tr:last').append('<td class="article-title">'+articleArray[i][1]+'</td>');
					$('tbody tr:last').append('<td class="hidden-sm hidden-xs">'+articleArray[i][2]+'</td>');
					$('tbody tr:last').append('<td class="hidden-sm hidden-xs">'+articleArray[i][3]+'</td>');
					$('tbody tr:last').append('<td class="hidden-sm hidden-xs">'+articleArray[i][4]+'</td>');
					$('tbody tr:last').append('<td><a href="articledetail.php?act=modify&id='+articleArray[i][0]+'">修改</a> <a articleid="'+articleArray[i][0]+'">删除</a></td>');
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
			articleShow(1);
		}else{
			console.log('null');
		}
	});
	//单个删除按钮
    $("tbody").on('click',"tr td a:odd",function () {
    	var delArray=new Array();
		delArray[0]=$(this).attr('articleid');
		articleDel(delArray);
		articleShow(1);

	});
    articleShow(1);
});

$().ready(function () {
	var type='';//查询类型
	var page=1;//查询页数,默认为1
	var keyword='';//查询关键词
	var pageNum;//总页数
	var articleArray=new Array();//获取文章数组
	function articleshow(type,page,keyword) {
		var url="getarticlelist.php?";
		if(type!=''){
			url+='type='+type+'&';
		}
		if(page!=''){
			url+='page='+page+'&';
		}
		if(keyword!=''){
			url+='keyword='+keyword+'&';
		}
		console.log(url);
		$.get(url,function (data,status) {
			if(status=='success'&&data.indexOf('check article fail')==-1){
				articleArray=JSON.parse(data);
				console.log(articleArray);
				pageNum=articleArray['0'][0];//总页数
				page=articleArray['0'][1];//当前页
				//type=articleArray['0'][2];//类型
				//keyword=articleArray['0'][3];//关键词
				$('.article_show_box').empty();
				for(var i=1;i<articleArray.length;i++){
					$('.article_show_box').append('<div class="article_show"></div>');
					$('div.article_show:last').append('<div class="article_show_title"><span class="glyphicon glyphicon-book"></span><a target="_blank" href="'+"article.php?article="+articleArray[i][0]+'">'+articleArray[i][4]+'</a></div>');
					$('div.article_show:last').append('<div class="article_show_text">'+$.trim(articleArray[i][6]).replace(/&nbsp;/ig,"")+'...'+'</div>');
					$('div.article_show:last').append('<div class="article_show_footer">'+articleArray[i][7]+'</div>');
				}
			}else{
				console.log("文章查询失败");
			}
		});
	}
	//获取URL Get消息
	function GetQueryString(name)
	{
		var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if(r!=null){
			return  decodeURI(r[2]);
		}
		return null;
	}
	function pageFooterActiveHandler() {
		if(page<=5){
			var i=1;
			$("#pagerow li a:gt(0):lt(5)").each(function () {
				$(this).text(i);
				i++;
			});
			$("#pagerow li").eq(page).addClass("active");
		}else{
			var i=page-4;
			$("#pagerow li a:gt(0):lt(5)").each(function () {
				$(this).text(i);
				i++;
			});
			$("#pagerow li").eq(5).addClass("active");
		}
	}
	//初始化参数
	function init() {
		if(GetQueryString("page")!=null){
			page=GetQueryString("page")
		}
		if(GetQueryString("type")!=null){
			type=GetQueryString("type")
		}
		if(GetQueryString("keyword")!=null){
			keyword=GetQueryString("keyword")
		}
		$('#search input').val(keyword);
		articleshow(type,page,keyword);//内容显示
		pageFooterActiveHandler();//页脚处理
	}
	//页面切换处理
	$("#pagerow li").click(function () {
		var pageNo=page;
		if($(this).text().indexOf("<<")!=-1){
			if(page==1){
				alert("已到首页");
			}else{
				pageNo--;
			}
		}else if($(this).text().indexOf(">>")!=-1){
			if(page>=pageNum){
				alert("已到尾页");
			}else{
				pageNo++;
			}
		}else if($(this).text()<=pageNum){
			//alert("1"+$(this).text()+"2");
			pageNo=$(this).text();
		}else{
			alert("超出最大页");
		}
		if(page!=pageNo){
			var url="articlelist.php?";
			if(type!=''){
				url+='type='+type+'&';
			}
			if(pageNo!=''){
				url+='page='+pageNo+'&';
			}
			if(keyword!=''){
				url+='keyword='+keyword+'&';
			}
			window.location.href=url;
		}
		// $("#pagerow li[class='active']").removeClass("active");
	});
	init();//页面初始显示



});

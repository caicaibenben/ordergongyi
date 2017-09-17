$().ready(function () {
	$('#searchbtn').click(function () {
		var keyword=$('#search input').val();
		//alert(keyword);
		var url="/ordergongyi/home/article/articlelist.php?";
		if(keyword!=''){
			url+='keyword='+keyword+'&';
		}
		window.location.href=url;
	});

});

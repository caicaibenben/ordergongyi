$().ready(function () {
	var delIDArray=new Array();
	var articleArray=new Array();
	function getCheckboxValue(){
		delIDArray.splice(0,delIDArray.length);
		$('input:checkbox[name="checkbox"]:checked').each(function () {
			delIDArray.push($(this).val());
		});
		return delIDArray.length;
	}
	$('#checkbox_delete').click(function () {
		if(getCheckboxValue()>=0){
			console.log(delIDArray);
			$.post("article_handle_down.php?act=del",
				{IDArray:delIDArray},
				function (data,status) {
					console.log(status+data);
				}
			);
		}else{
			console.log('null');
		}

	});

	$.post("article_handle_down.php?page=3",
		{},
		function (data,status) {
			console.log(status);
			//console.log(data);
			console.log(JSON.parse(data));
			articleArray=JSON.parse(data);

		}
	);
});

$().ready(function () {
	// 初始化Web Uploader
	var uploader1 = WebUploader.create({
		// 选完文件后，是否自动上传。
		auto: true,
		// swf文件路径
		swf: '../webuploader/Uploader.swf',
		// 文件接收服务端。
		server: '../carousel/uploadimg.php',
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#changeImg1',
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
		},
		method:'POST',
		fileNumLimit: 8, //限制上传个数
		fileSingleSizeLimit: 1024000, //限制单个上传图片的大小
		duplicate :true,//支持重复选图
		compress:{//压缩设置
			width: 240,
			//height: 320,
			// 图片质量，只有type为`image/jpeg`的时候才有效。
			quality: 100,
			// 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
			allowMagnify: false,
			// 是否允许裁剪。
			crop: false,
			// 是否保留头部meta信息。
			preserveHeaders: true,
			// 如果发现压缩后文件大小比原来还大，则使用原来图片
			// 此属性可能会影响图片自动纠正功能
			noCompressIfLarger: false,
			// 单位字节，如果图片大小小于此值，不会采用压缩。
			compressSize: 0
		}
	});
	uploader1.on("error", function (type) {
		if (type == "Q_TYPE_DENIED") {
			alert("请上传JPG、PNG、GIF、BMP格式文件");
		} else if (type == "F_EXCEED_SIZE") {
			alert("文件大小不能超过2M");
		}else if(type =="Q_EXCEED_NUM_LIMIT"){
			alert("单次最多可更换8次");
		}else{
			alert("上传出错！请检查后重新上传！错误代码"+type);
		}
	});
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader1.on( 'uploadSuccess', function( file,response) {
		//$( '#'+file.id ).addClass('upload-state-done');
		//console.log(response);
		console.log(response._raw);
		var fileurl=response._raw;
		$('tbody tr td img').eq(0).prop("src",fileurl);
		console.log("上传成功");
	});

	// 文件上传失败，显示上传出错。
	uploader1.on( 'uploadError', function( file,response ) {
		alert("上传失败");
		console.log("err"+response);
		// var $li = $( '#'+file.id ),
		// 	$error = $li.find('div.error');
		//
		// // 避免重复创建
		// if ( !$error.length ) {
		// 	$error = $('<div class="error"></div>').appendTo( $li );
		// }
		//
		// $error.text('上传失败');
	});
	// 初始化Web Uploader
	var uploader2 = WebUploader.create({
		// 选完文件后，是否自动上传。
		auto: true,
		// swf文件路径
		swf: '../webuploader/Uploader.swf',
		// 文件接收服务端。
		server: '../carousel/uploadimg.php',
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#changeImg2',
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
		},
		method:'POST',
		fileNumLimit: 8, //限制上传个数
		fileSingleSizeLimit: 1024000, //限制单个上传图片的大小
		duplicate :true,//支持重复选图
		compress:{//压缩设置
			width: 240,
			//height: 320,
			// 图片质量，只有type为`image/jpeg`的时候才有效。
			quality: 100,
			// 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
			allowMagnify: false,
			// 是否允许裁剪。
			crop: false,
			// 是否保留头部meta信息。
			preserveHeaders: true,
			// 如果发现压缩后文件大小比原来还大，则使用原来图片
			// 此属性可能会影响图片自动纠正功能
			noCompressIfLarger: false,
			// 单位字节，如果图片大小小于此值，不会采用压缩。
			compressSize: 0
		}
	});
	uploader2.on("error", function (type) {
		if (type == "Q_TYPE_DENIED") {
			alert("请上传JPG、PNG、GIF、BMP格式文件");
		} else if (type == "F_EXCEED_SIZE") {
			alert("文件大小不能超过2M");
		}else if(type =="Q_EXCEED_NUM_LIMIT"){
			alert("单次最多可更换8次");
		}else{
			alert("上传出错！请检查后重新上传！错误代码"+type);
		}
	});
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader2.on( 'uploadSuccess', function( file,response) {
		//$( '#'+file.id ).addClass('upload-state-done');
		//console.log(response);
		console.log(response._raw);
		var fileurl=response._raw;
		$('tbody tr td img').eq(1).prop("src",fileurl);
		console.log("上传成功");
	});

	// 文件上传失败，显示上传出错。
	uploader2.on( 'uploadError', function( file,response ) {
		alert("上传失败");
		console.log("err"+response);
		// var $li = $( '#'+file.id ),
		// 	$error = $li.find('div.error');
		//
		// // 避免重复创建
		// if ( !$error.length ) {
		// 	$error = $('<div class="error"></div>').appendTo( $li );
		// }
		//
		// $error.text('上传失败');
	});
	// 初始化Web Uploader
	var uploader3 = WebUploader.create({
		// 选完文件后，是否自动上传。
		auto: true,
		// swf文件路径
		swf: '../webuploader/Uploader.swf',
		// 文件接收服务端。
		server: '../carousel/uploadimg.php',
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#changeImg3',
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
		},
		method:'POST',
		fileNumLimit: 8, //限制上传个数
		fileSingleSizeLimit: 1024000, //限制单个上传图片的大小
		duplicate :true,//支持重复选图
		compress:{//压缩设置
			width: 240,
			//height: 320,
			// 图片质量，只有type为`image/jpeg`的时候才有效。
			quality: 100,
			// 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
			allowMagnify: false,
			// 是否允许裁剪。
			crop: false,
			// 是否保留头部meta信息。
			preserveHeaders: true,
			// 如果发现压缩后文件大小比原来还大，则使用原来图片
			// 此属性可能会影响图片自动纠正功能
			noCompressIfLarger: false,
			// 单位字节，如果图片大小小于此值，不会采用压缩。
			compressSize: 0
		}
	});
	uploader3.on("error", function (type) {
		if (type == "Q_TYPE_DENIED") {
			alert("请上传JPG、PNG、GIF、BMP格式文件");
		} else if (type == "F_EXCEED_SIZE") {
			alert("文件大小不能超过2M");
		}else if(type =="Q_EXCEED_NUM_LIMIT"){
			alert("单次最多可更换8次");
		}else{
			alert("上传出错！请检查后重新上传！错误代码"+type);
		}
	});
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader3.on( 'uploadSuccess', function( file,response) {
		//$( '#'+file.id ).addClass('upload-state-done');
		//console.log(response);
		console.log(response._raw);
		var fileurl=response._raw;
		$('tbody tr td img').eq(2).prop("src",fileurl);
		console.log("上传成功");
	});

	// 文件上传失败，显示上传出错。
	uploader3.on( 'uploadError', function( file,response ) {
		alert("上传失败");
		console.log("err"+response);
		// var $li = $( '#'+file.id ),
		// 	$error = $li.find('div.error');
		//
		// // 避免重复创建
		// if ( !$error.length ) {
		// 	$error = $('<div class="error"></div>').appendTo( $li );
		// }
		//
		// $error.text('上传失败');
	});
	// 初始化Web Uploader
	var uploader4 = WebUploader.create({
		// 选完文件后，是否自动上传。
		auto: true,
		// swf文件路径
		swf: '../webuploader/Uploader.swf',
		// 文件接收服务端。
		server: '../carousel/uploadimg.php',
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#changeImg4',
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
		},
		method:'POST',
		fileNumLimit: 8, //限制上传个数
		fileSingleSizeLimit: 1024000, //限制单个上传图片的大小
		duplicate :true,//支持重复选图
		compress:{//压缩设置
			width: 240,
			//height: 320,
			// 图片质量，只有type为`image/jpeg`的时候才有效。
			quality: 100,
			// 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
			allowMagnify: false,
			// 是否允许裁剪。
			crop: false,
			// 是否保留头部meta信息。
			preserveHeaders: true,
			// 如果发现压缩后文件大小比原来还大，则使用原来图片
			// 此属性可能会影响图片自动纠正功能
			noCompressIfLarger: false,
			// 单位字节，如果图片大小小于此值，不会采用压缩。
			compressSize: 0
		}
	});
	uploader4.on("error", function (type) {
		if (type == "Q_TYPE_DENIED") {
			alert("请上传JPG、PNG、GIF、BMP格式文件");
		} else if (type == "F_EXCEED_SIZE") {
			alert("文件大小不能超过2M");
		}else if(type =="Q_EXCEED_NUM_LIMIT"){
			alert("单次最多可更换8次");
		}else{
			alert("上传出错！请检查后重新上传！错误代码"+type);
		}
	});
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader4.on( 'uploadSuccess', function( file,response) {
		//$( '#'+file.id ).addClass('upload-state-done');
		//console.log(response);
		console.log(response._raw);
		var fileurl=response._raw;
		$('tbody tr td img').eq(3).prop("src",fileurl);
		console.log("上传成功");
	});

	// 文件上传失败，显示上传出错。
	uploader4.on( 'uploadError', function( file,response ) {
		alert("上传失败");
		console.log("err"+response);
		// var $li = $( '#'+file.id ),
		// 	$error = $li.find('div.error');
		//
		// // 避免重复创建
		// if ( !$error.length ) {
		// 	$error = $('<div class="error"></div>').appendTo( $li );
		// }
		//
		// $error.text('上传失败');
	});
	// 初始化Web Uploader
	var uploader5 = WebUploader.create({
		// 选完文件后，是否自动上传。
		auto: true,
		// swf文件路径
		swf: '../webuploader/Uploader.swf',
		// 文件接收服务端。
		server: '../carousel/uploadimg.php',
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#changeImg5',
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
		},
		method:'POST',
		fileNumLimit: 8, //限制上传个数
		fileSingleSizeLimit: 1024000, //限制单个上传图片的大小
		duplicate :true,//支持重复选图
		compress:{//压缩设置
			width: 240,
			//height: 320,
			// 图片质量，只有type为`image/jpeg`的时候才有效。
			quality: 100,
			// 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
			allowMagnify: false,
			// 是否允许裁剪。
			crop: false,
			// 是否保留头部meta信息。
			preserveHeaders: true,
			// 如果发现压缩后文件大小比原来还大，则使用原来图片
			// 此属性可能会影响图片自动纠正功能
			noCompressIfLarger: false,
			// 单位字节，如果图片大小小于此值，不会采用压缩。
			compressSize: 0
		}
	});
	uploader5.on("error", function (type) {
		if (type == "Q_TYPE_DENIED") {
			alert("请上传JPG、PNG、GIF、BMP格式文件");
		} else if (type == "F_EXCEED_SIZE") {
			alert("文件大小不能超过2M");
		}else if(type =="Q_EXCEED_NUM_LIMIT"){
			alert("单次最多可更换8次");
		}else{
			alert("上传出错！请检查后重新上传！错误代码"+type);
		}
	});
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader5.on( 'uploadSuccess', function( file,response) {
		//$( '#'+file.id ).addClass('upload-state-done');
		//console.log(response);
		console.log(response._raw);
		var fileurl=response._raw;
		$('tbody tr td img').eq(4).prop("src",fileurl);
		console.log("上传成功");
	});

	// 文件上传失败，显示上传出错。
	uploader5.on( 'uploadError', function( file,response ) {
		alert("上传失败");
		console.log("err"+response);
		// var $li = $( '#'+file.id ),
		// 	$error = $li.find('div.error');
		//
		// // 避免重复创建
		// if ( !$error.length ) {
		// 	$error = $('<div class="error"></div>').appendTo( $li );
		// }
		//
		// $error.text('上传失败');
	});
	// 初始化Web Uploader
	var uploader6 = WebUploader.create({
		// 选完文件后，是否自动上传。
		auto: true,
		// swf文件路径
		swf: '../webuploader/Uploader.swf',
		// 文件接收服务端。
		server: '../carousel/uploadimg.php',
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#changeImg6',
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
		},
		method:'POST',
		fileNumLimit: 8, //限制上传个数
		fileSingleSizeLimit: 1024000, //限制单个上传图片的大小
		duplicate :true,//支持重复选图
		compress:{//压缩设置
			width: 240,
			//height: 320,
			// 图片质量，只有type为`image/jpeg`的时候才有效。
			quality: 100,
			// 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
			allowMagnify: false,
			// 是否允许裁剪。
			crop: false,
			// 是否保留头部meta信息。
			preserveHeaders: true,
			// 如果发现压缩后文件大小比原来还大，则使用原来图片
			// 此属性可能会影响图片自动纠正功能
			noCompressIfLarger: false,
			// 单位字节，如果图片大小小于此值，不会采用压缩。
			compressSize: 0
		}
	});
	uploader6.on("error", function (type) {
		if (type == "Q_TYPE_DENIED") {
			alert("请上传JPG、PNG、GIF、BMP格式文件");
		} else if (type == "F_EXCEED_SIZE") {
			alert("文件大小不能超过2M");
		}else if(type =="Q_EXCEED_NUM_LIMIT"){
			alert("单次最多可更换8次");
		}else{
			alert("上传出错！请检查后重新上传！错误代码"+type);
		}
	});
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader6.on( 'uploadSuccess', function( file,response) {
		//$( '#'+file.id ).addClass('upload-state-done');
		//console.log(response);
		console.log(response._raw);
		var fileurl=response._raw;
		$('tbody tr td img').eq(5).prop("src",fileurl);
		console.log("上传成功");
	});

	// 文件上传失败，显示上传出错。
	uploader6.on( 'uploadError', function( file,response ) {
		alert("上传失败");
		console.log("err"+response);
		// var $li = $( '#'+file.id ),
		// 	$error = $li.find('div.error');
		//
		// // 避免重复创建
		// if ( !$error.length ) {
		// 	$error = $('<div class="error"></div>').appendTo( $li );
		// }
		//
		// $error.text('上传失败');
	});
	//获取信息用于提交
	var carousel=new Array();
	var host=window.location.protocol+'//'+window.location.host;//用于获取相对地址
	function getTableValue(i) {
		carousel.splice(0,carousel.length);
		var tr=$("tbody tr").eq(i);
		carousel[0]=tr.find("td").eq(1).attr('value');
		carousel[1]=tr.find("td").eq(0).text();
		carousel[2]=tr.find('td img').prop("src").replace(host,'');
		carousel[3]=tr.find('textarea').val();
		carousel[4]=$.trim(tr.find("td input:text").val());
		if(carousel[4]!=''&&carousel[4].indexOf('http')==-1){
			carousel[4]='http://'+carousel[4];
		}
		console.log(carousel);
	}
	function checkTableValue() {
		//var reg=/^([hH][tT]{2}[pP]:\/\/|[hH][tT]{2}[pP][sS]:\/\/)(([A-Za-z0-9-~]+)\.)+([A-Za-z0-9-~\/])+$/;
		var strRegex = "^((https|http|ftp|rtsp|mms)?://)"
			+ "?(([0-9a-z_!~*'().&=+$%-]+: )?[0-9a-z_!~*'().&=+$%-]+@)?" //ftp的user@
			+ "(([0-9]{1,3}\.){3}[0-9]{1,3}" // IP形式的URL- 199.194.52.184
			+ "|" // 允许IP和DOMAIN（域名）
			+ "([0-9a-z_!~*'()-]+\.)*" // 域名- www.
			+ "([0-9a-z][0-9a-z-]{0,61})?[0-9a-z]\." // 二级域名
			+ "[a-z]{2,6})" // first level domain- .com or .museum
			+ "(:[0-9]{1,4})?" // 端口- :80
			+ "((/?)|" // a slash isn't required if there is no file name
			+ "(/[0-9a-z_!~*'().;?:@&=+$,%#-]+)+/?)$";
		var reg=new RegExp(strRegex);

		if(carousel[3].length>35){
			alert("文字描述请少于35字");
			return false;
			// }else if(!reg.test(carousel[4])){
			// 	alert("请输入一个合法的链接");
			// 	return false;
		}else{
			return true;
		}

	}
	//getTableValue(0);
	$('tbody tr td button').click(function () {
		var index=$('tbody tr td button').index($(this));
		//console.log($(this).index("tbody tr td button"));
		getTableValue(index);
		if(checkTableValue()){
			$.post("modifyCarousel.php",{carouselArray:carousel},function (data,status) {
				if(status=="success"&&data.indexOf("fail")==-1){
					console.log(status+data);
					alert("提交成功");
				}else{
					console.log(status+data);
					alert("提交失败，请重试");
				}

			});
		}

	});
});


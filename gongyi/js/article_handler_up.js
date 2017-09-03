$().ready(function () {
	// 文本编辑器初始化
	var  ueditor= UE.getEditor('article_content',
		{
			initialContent:''   //初始化编辑器的内容,也可以通过textarea/script给值，看官网例子
			,wordCount:true          //是否开启字数统计
			,maximumWords:10000       //允许的最大字符数
			,autoHeightEnabled:false // 是否自动长高,默认true
			,elementPathEnabled:false //左下角显示元素路径
			,autoFloatEnabled:false //工具栏浮动
			,initialFrameWidth: null//设置为null即可,动态调整宽度
	});
	//查询文章ID显示-添加或者修改文章
	var articleid=$('#article_id').val();
	$.post("./getarticle.php",{'articleid':articleid},function (data,status) {
			if(status=='success'&&(data.indexOf('ID')==-1)){
				console.log(data);
				var article=JSON.parse(data);
				$('#article_id').val(article[0]);
				$('input:radio[name="type"]').eq(article[1]).attr('checked',true);
				$('#author').val(article[2]);
				$('input:radio[name="mark"]').eq(article[3]).attr('checked',true);
				$('#title').val(article[4]);
				$('#keywords').val(article[5]);
				ueditor.addListener("ready", function () {
					// editor准备好之后才可以使用
					ueditor.setContent(article[6]);
				});
				console.log("文章加载成功");
			}else if(status=='success'){
				console.log(status+data);
				console.log("ID查询无结果");
			}else{
				console.log("status fail");
			}
		}
	);
	//    window.onresize = function () {
	//        var content=ueditor.getContent();
	//        console.log("0"+content);
	//        window.location.reload();
	//        console.log("1"+content);
	//        ueditor.setContent(content);
	//    }
	//    var _uploadEditor;
	//    $(function () {
	//        //重新实例化一个编辑器，防止在上面的editor编辑器中显示上传的图片或者文件
	//        _uploadEditor = UE.getEditor('uploadEditor');
	//        _uploadEditor.ready(function () {
	//            //设置编辑器不可用
	//            //_uploadEditor.setDisabled();
	//            //隐藏编辑器，因为不会用到这个编辑器实例，所以要隐藏
	//            _uploadEditor.hide();
	//            //侦听图片上传
	//            _uploadEditor.addListener('beforeInsertImage', function (t, arg) {
	//                //将地址赋值给相应的input,只去第一张图片的路径
	//                $("#pictureUpload").attr("value", arg[0].src);
	//                //图片预览
	//                //$("#imgPreview").attr("src", arg[0].src);
	//            })
	//            //侦听文件上传，取上传文件列表中第一个上传的文件的路径
	//            _uploadEditor.addListener('afterUpfile', function (t, arg) {
	//                $("#fileUpload").attr("value", _uploadEditor.options.filePath + arg[0].url);
	//            })
	//        });
	//    });
	//弹出图片上传的对话框
	//    $('#upImage').click(function () {
	//        var myImage = _uploadEditor.getDialog("insertimage");
	//        myImage.open();
	//    });
	//弹出文件上传的对话框
	//    function upFiles() {
	//        var myFiles = _uploadEditor.getDialog("attachment");
	//        myFiles.open();
	//    }
	//动态修改时间
	function timeChange() {
		var date = new Date();
		var seperator1 = "-";
		var seperator2 = ":";
		var month = date.getMonth() + 1;
		month=month<10?"0"+month:month;
		var strDate = date.getDate();
		strDate=strDate<10?"0"+strDate:strDate;
		var hours=date.getHours();
		hours=hours<10?"0"+hours:hours;
		var minutes=date.getMinutes();
		minutes=minutes<10?"0"+minutes:minutes;
		var seconds=date.getSeconds();
		seconds=seconds<10?"0"+seconds:seconds;
		var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
			+ " " + hours + seperator2 + minutes + seperator2 + seconds;
		$('#time').val(currentdate);
	}
	var imgTimer = window.setInterval(timeChange, 1000);
	//文本输入验证
	function article_check() {
		var str=$('#title').val();
		if(str==""){
			alert("标题不能为空");
			return false;
		}else if(str.length>50){
			alert("标题长度大于50");
			return false;
		}
		str=$('#keywords').val();
		if(str==""){
			alert("关键字不能为空");
			return false;
		}
		str=ueditor.getContent();
		if(str==""){
			alert("文章不能为空");
			return false;
		}
		str=$('#author').val();
		if(str==""){
			alert("作者不能为空");
			return false;
		}
		var type=$('input:radio[name="type"]:checked').val();
		if(type==null){
			alert("请选择文章分类");
			return false;
		}
		var mark=$('input:radio[name="mark"]:checked').val();
		if(mark==null){
			alert("请选择文章状态");
			return false;
		}
		return true;
	}
	//文章提交事件处理
	$('#submit').click(function () {
		var data = $('.add-article-form').serialize();
		if(article_check()){
			$.post("article_handler_up.php",data,function (data,status) {
					if(status=='success'&&(data.indexOf('pass')!=-1)){
						console.log(status+data);
						console.log("提交成功");
						location.href='articlelist.php';
					}else{
						console.log(status+data);
						console.log("提交失败，请重新提交");
					}
				}
			);
		}
	});


});
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>奥德悦生活·公益平台</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="apple-touch-icon-precomposed" href="images/icon/icon.png">
    <link rel="shortcut icon" href="images/icon/favicon.ico">
    <script src="js/jquery-2.1.4.min.js"></script>
    <!--[if gte IE 9]>
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/html5shiv.min.js" type="text/javascript"></script>
    <script src="js/respond.min.js" type="text/javascript"></script>
    <script src="js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href = 'upgrade-browser.html';</script>
    <![endif]-->
</head>
<body class="user-select">
<div class="container">
    <div class="siteIcon">
        <img src="images/icon/icon.png" alt="" data-toggle="tooltip" data-placement="top" title="奥德悦生活·公益平台" draggable="false"/>
    </div>
    <form action="" method="post" autocomplete="off" class="form-signin">
        <h2 class="form-signin-heading">管理员登录</h2>
        <label for="userName" class="sr-only">用户名</label>
        <input type="text" id="userName" name="username" class="form-control" placeholder="请输入用户名" required autofocus
               autocomplete="off" maxlength="10" onkeypress="if(event.keyCode==13) {$('#userPwd').focus();return false;}">
        <label for="userPwd" class="sr-only">密码</label>
        <input type="password" id="userPwd" name="userpwd" class="form-control" placeholder="请输入密码" required
               autocomplete="off" maxlength="18" onkeypress="if(event.keyCode==13) {$('#submit').click();return false;}">
        <button class="btn btn-lg btn-primary btn-block" type="button" name="submit" id="submit" value="login">登录</button>
    </form>
<!--    <div class="footer">-->
<!--        <p><a href="index.php" data-toggle="tooltip" data-placement="left" title="不知道自己在哪?">回到后台 →</a></p>-->
<!--    </div>-->
</div>
<script src="js/bootstrap.min.js"></script>
<script>
    $('[data-toggle="tooltip"]').tooltip();
    window.oncontextmenu = function () {
        //return false;
    };
    $('.siteIcon img').click(function () {
        window.location.reload();
    });
    $('#submit').click(function () {
        if ($('#userName').val() === '') {
            alert('用户名不能为空');
        } else if ($('#userPwd').val() === '') {
            alert('密码不能为空');
        } else {
            var user=new Array();
            user[0]=$('#userName').val();
            user[1]=$('#userPwd').val();
            $.post("login_handle.php?act=login", {name:user[0], pwd:user[1]},
                    function (data,status) {
                        if(status=='success'){
                            if(data.indexOf("fail")!=-1){
                                alert("用户名或者密码错误");
                            }else if(data.indexOf("fail")==-1){
                                $('#submit').text("登录中");
                                window.location.href="index.php";
                            }
                            //console.log(data);
                        }else{
                            alert('登录查询失败');
                        }
                    }
            );
        }
    });
</script>
</body>
</html>

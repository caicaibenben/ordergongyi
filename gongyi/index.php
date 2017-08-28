<?php
//session_start();
//if (!isset($_SESSION['username'])) {
//    header("Location: login.html");
//    exit;
//}
?>
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
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
<section class="container-fluid">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:url(./images/background.jpg) no-repeat 0 -1000px;height: 70px">
            <div class="container-fluid" style="margin-top: 10px">
                <div class="navbar-header">
                    <!--移动端按钮-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">奥德悦生活·公益平台</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">消息</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                admin <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a title="查看或修改个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>
                                <li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog">登录记录</a></li>
                            </ul>
                        </li>
                        <li><a href="login.html" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
                        <li><a data-toggle="modal" data-target="#WeChat">帮助</a></li>
                    </ul>
                    <form action="" method="post" class="navbar-form navbar-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="键入关键字搜索" maxlength="15">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="submit">搜索</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="row">
        <aside class="sidebar">
            <!--侧边栏标题-->
            <div class="leftnav_title">
                <span class="glyphicon glyphicon-list left"></span><h4 class="left" style="padding-left: 10px">栏目管理</h4>
            </div>
            <!--侧边栏分类标题-->
            <div class="leftnav_subtitle">
                <span class="glyphicon glyphicon-book left" style="padding-top: 8px"></span><h4 class="left" style="padding-left: 10px;padding-top: 6px">文章数据</h4>
            </div>
            <ul class="nav nav-sidebar">
                <li><a href="report.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>文章列表</a></li>
                <li><a href="article.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>添加文章</a></li>
                <li><a href="notice.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>爱心捐助</a></li>
                <li><a href="notice.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>公告评论</a></li>
            </ul>
            <!--侧边栏分类标题-->
            <div class="leftnav_subtitle">
                <span class="glyphicon glyphicon-cog left" style="padding-top: 8px"></span><h4 class="left" style="padding-left: 10px;padding-top: 6px">栏目设置</h4>
            </div>

            <ul class="nav nav-sidebar">
                <li><a href="category.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>活动报道</a></li>
                <li><a href="category.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>精准助学</a></li>
                <li><a href="category.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>往期回顾</a></li>
                <li><a href="category.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>展望未来</a></li>
                <li><a href="category.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>图标更换</a></li><!--网站图标及二维码-->
            </ul>
            <!--侧边栏分类标题-->
            <div class="leftnav_subtitle">
                <span class="glyphicon glyphicon-wrench left" style="padding-top: 8px"></span><h4 class="left" style="padding-left: 10px;padding-top: 6px">其他设置</h4>
            </div>
            <ul class="nav nav-sidebar">
                <li><a href="category.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>用户管理</a></li>
                <li><a href="category.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>更改信息</a></li>
                <li><a href="category.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>登录日志</a></li>
                <li><a href="category.html" target="right"><span class="glyphicon glyphicon-triangle-right"></span>基本设置</a></li>
            </ul>
        </aside>
        <div class="main" id="main">
            <div class="main_title">
                <ul>
                    <li><a><span class="glyphicon glyphicon-home"></span>首页</a></li>
                    <li><a style="color: #cdcdcd">/</a></li>
                    <li><a>网站设置</a></li>
                    <li><a style="color: #cdcdcd">/</a></li>
                    <li><a>语言：中文</a></li>
                </ul>
            </div>
            <iframe src="report.html" id="right" name="right" width="100%" frameborder="0" onload="iframeHeight()">
            </iframe>
        </div>
    </div>
</section>

<!--Modal模态弹窗-->
<?php
  require_once "pupop.php";
?>
<!--右键菜单列表-->
<!--<div id="rightClickMenu">-->
<!--    <ul class="list-group rightClickMenuList">-->
<!--        <li class="list-group-item disabled">欢迎访问异清轩博客</li>-->
<!--        <li class="list-group-item"><span>IP：</span>172.16.10.129</li>-->
<!--        <li class="list-group-item"><span>地址：</span>河南省郑州市</li>-->
<!--        <li class="list-group-item"><span>系统：</span>Windows10</li>-->
<!--        <li class="list-group-item"><span>浏览器：</span>Chrome47</li>-->
<!--    </ul>-->
<!--</div>-->

<!--动态调整iframe的高度-->
<script type="text/javascript" language="javascript">
    function iframeHeight() {
        var ifm = document.getElementById("right");
        var subWeb = document.frames ? document.frames["right"].document : ifm.contentDocument;
        if (ifm != null && subWeb != null) {
            ifm.height = subWeb.body.scrollHeight;
            //ifm.width = subWeb.body.scrollWidth;
        }
    }
</script>
<script src="js/bootstrap.min.js"></script>
<script src="./js/index.js"></script>
</body>
</html>

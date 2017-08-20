<!doctype html>
<html lang="en-zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>奥德公益</title>
    <link type="image/x-icon" href="" rel="icon">
    <link href="../image/ico/ico.png" rel="shortcut icon">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- 可选的Bootstrap主题文件（一般不使用） -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="commom.css" type="text/css">
    <style>
        .layout{
            width: 1000px;
            margin: 0px auto;
        }
        .header{
            margin: 0px auto;
            height: 80px;
            padding-top: 15px;
        }
        .left{
            float: left;
        }
        .right{
            float: right;
        }
        .nav_color{
            background-color: #f32613;
            height: 35px;
            margin-bottom: 10px;
            position: relative;
            min-height: 35px;
            border: 1px solid #f32613;
        }
        .navbar-nav ul{
            height: 33px;
            padding: 0px 10px;
        }
        .navbar-nav>li>a{
            font-size:large;
            font-family: "Microsoft YaHei UI","Arial";
            color: white;
            padding: 6px 15px 7px 15px;
        }
        .navbar-nav>li>a:hover{
            background: #c52513;
        }
        .navbar-nav>li>a:active{
            background: #c52513;
        }
        .nav .line {
            background: url(../image/ico/line.png) center no-repeat;
            height: 25px;
            padding: 15px 15px;
            width: 1px;
        }
    </style>
</head>
<body>
<!--头部-->
<div class="layout header">
    <div id="logo" class="left" style="width: 400px">
        <a><img src="../image/ico/logo.png" alt="奥德公益"></a>
    </div>
    <img src="../image/ico/gongyi.png" width="160px" style="margin-top: 10px;margin-left: 100px">
    <div id="search" class="right">
        <div class="input-group"  style="width: 300px">
            <input type="text" class="form-control" placeholder="请输入你要搜索的内容" width="250px">
            <span class="input-group-btn" id="searchbtn">
                <button id="searchbtn" class="btn btn-default" type="button" style="background-color: #979797">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </div>
</div>
<!--标题栏-->
<nav class="nav_color" role="navigation" >
    <div class="layout">
        <ul class="nav navbar-nav">
            <li><a href="index.php#" target="_self">首页</a></li>
            <li class="line"></li>
            <li><a href="index.php#avtivity" target="_self">活动报道</a></li>
            <li class="line"></li>
            <li><a href="index.php#schoolhelp" target="_self">精准助学</a></li>
            <li class="line"></li>
            <li><a href="index.php#pastactivity" target="_self">往期回顾</a></li>
            <li class="line"></li>
            <li><a href="index.php#future" target="_self">展望未来</a></li>
        </ul>
    </div>
</nav>
<?php
 include "footer.php";
?>
</body>
</html>
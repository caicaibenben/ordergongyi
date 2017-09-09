<?php
require_once "../connect.php";
$type=array("测试占位","活动报道","精准助学","往期回顾","展望未来");
$sql="select * from carousel where type=3";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
if(mysqli_num_rows($result)==0||$result==false){
    echo  "数据库查询失败";exit;
}
?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>往期回顾</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/carousel.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="../images/icon/icon.png">
    <link rel="shortcut icon" href="../images/icon/favicon.ico">
    <script src="../js/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../webuploader/webuploader.css">
    <script type="text/javascript" src="../webuploader/webuploader.js"></script>
    <!--[if gte IE 9]>
    <script src="../js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="../js/html5shiv.min.js" type="text/javascript"></script>
    <script src="../js/respond.min.js" type="text/javascript"></script>
    <script src="../js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href = 'upgrade-browser.html';</script>
    <![endif]-->
</head>
<body class="user-select">
<div class="container-fluid">
    <!--<h3><span>文章操作</span></h3>-->
    <!--<ol>-->
    <!--<li><a href="add_modify_article.php" type="button" class="btn btn-">增加文章</a></li>-->
    <!--</ol>-->
    <!--<h3><span>文章列表</span></h3>-->
    <div class="carouseltitle">
        <span class="glyphicon glyphicon-list"></span><b>往期回顾</b><span style="color: #888;font-size: 5px;margin-left: 30px">注意:图片像素请不小于1000x700,大小不超过2M</span>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th class="hidden-xs" width="10%"><span class="glyphicon glyphicon-th-large"></span> <span
                        class="visible-lg-inline-block">编号</span></th>
                <th width="10%"><span class="glyphicon glyphicon-paperclip"></span> <span
                        class="visible-lg-inline-block">名称类别</span></th>
                <th class="hidden-sm hidden-xs" width="10%"><span class="glyphicon glyphicon-picture"></span> <span
                        class="visible-lg-inline-block">图片</span></th>
                <th class="hidden-sm hidden-xs" width="25%"><span class="glyphicon glyphicon-tag"></span> <span
                        class="visible-lg-inline-block">描述</span></th>
                <th class="hidden-sm hidden-xs" width="25%"><span class="glyphicon glyphicon-link"></span> <span
                        class="visible-lg-inline-block">链接</span></th>
                <th width="10%"><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg-inline-block">操作</span>
                </th>
            </tr>
            </thead>
            <tbody>
            <!--                <tr>-->
            <!--                    <td class="hidden-xs">0001</td>-->
            <!--                    <td>活动报道</td>-->
            <!--                    <td class="hidden-sm hidden-xs"><img src="../../image/banner/ban0.jpg" alt="活动报道轮播图1" width="150px" height="100px" style="border:1px solid red"></td>-->
            <!--                    <td class="hidden-sm hidden-xs"><textarea cols="50" rows="5" name="textarea" id="textarea" placeholder="请输入图片描述，字数限制在200字以内">1212</textarea></td>-->
            <!--                    <td class="hidden-sm hidden-xs">文章<input type="text" value="0001"></td>-->
            <!--                    <td><div id="changeImg1">修改图片</div> <button type="button" class="btn btn-primary" style="width: 86px;height: 40px">提交</button></td>-->
            <!--                </tr>-->
            <?php
            for($i=1;$i<=mysqli_num_rows($result);$i++){
                $row=mysqli_fetch_array($result, MYSQLI_NUM);
                echo '<tr><td class="hidden-xs">'.$row[2].'</td>';
                echo '<td value="'.$row[1].'">'.$type[$row[1]].'</td>';
                echo '<td class="hidden-sm hidden-xs"><img src="'.$row[3].'" alt="活动报道轮播图1" width="160px" height="110px" style="border:1px solid red"></td>';
                echo '<td class="hidden-sm hidden-xs"><textarea style="width: 100%" rows="5" name="textarea" id="textarea" placeholder="请输入图片描述，字数限制在200字以内">'.$row[4].'</textarea></td>';
                echo '<td class="hidden-sm hidden-xs">链接:<input size="40" type="text" value="'.$row[5].'"></td>';
                echo '<td><div id="changeImg'.$i.'">修改图片</div> <button type="button" class="btn btn-primary" style="width: 86px;height: 40px" value="'.$i.'">提交</button></td>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
<script src="../js/carousel/carousel_pastcheck.js"></script>
</html>

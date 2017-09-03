<?php
if(isset($_GET['act'])&&($_GET['act']=='add')){
    require_once "connect.php";
    $act="select max(id) from articles";
    $result=mysqli_query($conn,$act);
    mysqli_close($conn);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_row($result);
        $temp=(string)($row[0]+1);
        for($i=4-strlen($temp);$i>0;$i--){
            $temp='0'.$temp;
        }
        $articleid=$temp;
    }
}else if(isset($_GET['act'])&&($_GET['act']=='modify')){
    $articleid=$_GET['id'];
}else{
    $articleid='0000';
}

?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加文章</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/article.css">
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
    <div class="row">
        <form action="article_handler_up.php" method="post" class="add-article-form"">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="padding-right: 10px">
            <h3><span>撰写文章</span></h3>
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>标题</span></h2>
                <div class="add-article-box-content">
                    <input type="text" class="form-control" placeholder="请输入标题" name="title" id='title' autocomplete="off">
                    <span class="prompt-text">标题字数请不要超过50字</span>
                </div>
            </div>
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>关键字</span></h2>
                <div class="add-article-box-content">
                    <input type="text" class="form-control" placeholder="请输入关键字" name="keywords" id="keywords"
                           autocomplete="off">
                    <span class="prompt-text">多个关键字请用英文逗号,隔开。</span>
                </div>
            </div>
            <div class="form-group">
                <label for="article_content" class="sr-only">内容</label>
                <script id="article_content" name="article_content" type="text/plain" style="width: 100%;height: 500px"></script>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <h3><span>操作</span></h3>
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>编号</span></h2>
                <div class="add-article-box-content">
                    <input type="text" class="form-control" name="article_id" id="article_id"
                           autocomplete="off" readonly value=<?php echo $articleid;?>>
                    <span class="prompt-text">文章编号自动生成，不可编辑</span></div>
            </div>
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>栏目分类</span></h2>
                <div class="add-article-box-content">
                    <ul class="category-list">
                        <li>
                            <label>
                                <input name="type" type="radio" value="0">活动报道</label>
                        </li>
                        <li>
                            <label>
                                <input name="type" type="radio" value="1">精准助学</label>
                        </li>
                        <li>
                            <label>
                                <input name="type" type="radio" value="2">往期回顾</label>
                        </li>
                        <li>
                            <label>
                                <input name="type" type="radio" value="3">展望未来</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>作者</span></h2>
                <div class="add-article-box-content">
                    <input type="text" class="form-control" placeholder="请输入作者" name="author" id="author"
                           autocomplete="off">
                    <span class="prompt-text">多个作者请用英文逗号,隔开</span></div>
            </div>
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>发布</span></h2>
                <div class="add-article-box-content">
                    <p><label>公开度：</label>
                        <input type="radio" name="mark" value="0"/>加密
                        <input type="radio" name="mark" value="1"/>公开
                        <input type="radio" name="mark" value="2"/>置顶
                    </p>
                    <p>
                        <label>发布时间：</label>
                        <span class="article-time-display">
                                <input style="border: none;" type="datetime" name="time" id='time' value="2016-01-09 17:29:37"/>
                            </span>
                    </p>
                </div>
                <div class="add-article-box-footer">
                    <button class="btn btn-primary" type="button" id="submit">发布</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>
<script src="js/bootstrap.min.js"></script>
<script src="js/admin-scripts.js"></script>
<script src="./ueditor/ueditor.config.js"></script>
<script src="./ueditor/ueditor.all.min.js"></script>
<script src="./ueditor/lang/zh-cn/zh-cn.js"></script>
<!--<script id="uploadEditor" type="text/plain" style="display:none;"></script>-->
<script src="js/article_handler_up.js"></script>
</body>
</html>

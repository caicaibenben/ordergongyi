<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>文章列表</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/article.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="../images/icon/icon.png">
    <link rel="shortcut icon" href="../images/icon/favicon.ico">
    <script src="../js/jquery-2.1.4.min.js"></script>
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
<section class="container-fluid">
    <form action="" method="post">
        <!--<h3><span>文章操作</span></h3>-->
        <!--<ol>-->
            <!--<li><a href="add_modify_article.php" type="button" class="btn btn-">增加文章</a></li>-->
        <!--</ol>-->
        <!--<h3><span>文章列表</span></h3>-->
      <form>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th class="hidden-xs"><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg-inline-block">选择</span></th>
                    <th><span class="glyphicon glyphicon-paperclip"></span> <span class="visible-lg-inline-block">编号</span></th>
                    <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg-inline-block">标题</span></th>
                    <th class="hidden-sm hidden-xs"><span class="glyphicon glyphicon-list"></span> <span class="visible-lg-inline-block">分类</span></th>
                    <th class="hidden-sm hidden-xs"><span class="glyphicon glyphicon-tag"></span> <span class="visible-lg-inline-block">标签</span></th>
                    <th class="hidden-sm hidden-xs"><span class="glyphicon glyphicon-time"></span> <span class="visible-lg-inline-block">日期</span></th>
                    <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg-inline-block">操作</span></th>
                </tr>
                </thead>
                <tbody>
<!--                <tr>-->
<!--                    <td class="hidden-xs"><input type="checkbox" class="input-control" name="checkbox" value=""/></td>-->
<!--                    <td>000001</td>-->
<!--                    <td class="article-title">这是测试的文章标题这是测试的文章标题</td>-->
<!--                    <td class="hidden-sm hidden-xs">这个是栏目</td>-->
<!--                    <td class="hidden-sm hidden-xs">PHP、JavaScript</td>-->
<!--                    <td class="hidden-sm hidden-xs">2015-12-03 00:00:00</td>-->
<!--                    <td><a href="update-article.html">修改</a> <a href="articledetail.php?act=modify&id=0008">删除</a></td>-->
<!--                </tr>-->
                </tbody>
            </table>
        </div>
      </form>
        <footer class="message_footer">
            <nav>
                <div class="btn-toolbar operation hidden-xs" role="toolbar">
                    <div class="btn-group" role="group">
                        <a class="btn btn-default" id="selectAll">全选</a>
                        <a class="btn btn-default" id="reverseSelect">反选</a>
                        <a class="btn btn-default" id="noSelectAll">不选</a>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom"
                                title="删除全部选中" id="checkbox_delete">删除
                        </button>
                    </div>
                </div>
                <ul class="pagination pagenav" id="pagerow">
                    <li><a aria-label="Previous"> <span aria-hidden="true">&lt;&lt;</span> </a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" aria-label="Next"> <span aria-hidden="true">&gt;&gt;</span> </a></li>
                </ul>
            </nav>
        </footer>
    </form>
</section>
</body>
<script src="../js/article_handler_down.js"></script>
</html>

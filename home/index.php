<?php
    require_once "connect.php";
    $sql_carousel='select * from carousel';
    $result=mysqli_query($conn,$sql_carousel);
    if(mysqli_num_rows($result)==0||$result==false){
        print_r("数据库查询失败");
        exit;
    }
    $carousel=Array();
    for($i=0;$i<mysqli_num_rows($result);$i++){
        $carousel[$i]=mysqli_fetch_array($result,MYSQLI_NUM);
    }
    $count=0;//标记查询结果数组下标
    $sql_article="select * from articles where type=0 order by id DESC limit 0,1 ";
    $result=mysqli_query($conn,$sql_article);
    $article=mysqli_fetch_array($result,MYSQLI_NUM);
    mysqli_close($conn);
    //print_r(mb_substr(strip_tags(htmlspecialchars_decode($article[6])),0,150,'utf-8'));
    //exit;
?>
<!doctype html>
<html lang="en-zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>奥德悦生活·公益平台</title>
    <link type="image/x-icon" href="" rel="icon">
    <link href="../image/ico/ico.png" rel="shortcut icon">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- 可选的Bootstrap主题文件（一般不使用） -->
<!--    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>-->
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="jquery-2.1.4.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="./article_share.css" type="text/css">
    <script src="./article/SearchKey.js"></script>
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
            <input type="text" class="form-control" placeholder="请输入你要搜索的内容" width="250px" onkeypress="if(event.keyCode==13) {$('#searchbtn').click();return false;}"  >
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
<div>
    <!--活动报道-->
    <a name="avtivity"></a>
    <section>
        <div class="layout" style="height: 660px">
            <div class="left banner" style="width: 670px;height: 360px">
                <div class="img_box">
                    <?php
                        for($i=0,$j=0;$j<6;$i++,$j++){
                            if($i>=5){
                                $i=0;
                            }
                            $link=($carousel[$count+$i][5]=='')?' ':' href="'.$carousel[$count+$i][5].'"';
                            echo '<div class="left display" style="width: 670px;height: 360px">';
                            echo '<a '.$link.' target="_blank"><img src="'.$carousel[$count+$i][3].'" alt="" width="670px " height="360px"></a>';
                            echo '<span class="banner_shadow">';
                            echo '<em>活动</em><a target="_blank">'.$carousel[$count+$i][4].'</a>';
                            echo '</span></div>';
                        }
                    ?>
<!--                    <div class="left display" style="width: 670px;height: 360px">-->
<!--                        <a><img src="/ordergongyi/article/20170912/20170912oXOcIM.jpg" alt="" width="670px " height="360px"></a>-->
<!--                        <span class="banner_shadow">-->
<!--                        <em>活动</em><a href="javascript:;" target="_blank">关注寒门学子，开展公益助学，奥德燃气一直在努力</a>-->
<!--                        </span>-->
<!--                    </div>-->
                </div>
            </div>
            <div class="right" style="width: 320px;height: 360px">
                <img src="../image/ico/totaldata.png">
            </div>
            <div class="left" style="width: 670px;height: 300px">
                <div class="" style="width: 670px;height: 100px;margin-top: 10px">
                    <div id="banner_leftbtn" class="left img_center" style="width: 20px;height: 100px;margin-right: 10px">
                        <span style="height: 100%;vertical-align: middle;display: inline-block"></span><img src="../image/banner/banner_leftarrow.png">
                    </div>
                    <div class="left banner" style="width: 610px;height: 100px">
                        <div class="img_box_tumb">
                            <?php
                                for($i=0,$j=0;$j<9;$i++,$j++){
                                    if($i>=5){
                                        $i=0;
                                    }
                                    echo '<img src="'.$carousel[$count+$i][3].'" alt="" style="margin: 0px 10px 0px 0px" height="100px" width="145">';
                                }
                                $count=$count+$j-$i;//轮播图数组下标更换
                            ?>
<!--                            <img src="../image/banner/ban0.jpg" alt="" style="margin: 0px 3px 0px 0px" height="100px" width="145">-->
<!--                            <img src="../image/banner/ban1.jpg" alt="" style="margin: 0px 3px" height="100px" width="145">-->
<!--                            <img src="../image/banner/ban2.jpg" alt="" style="margin: 0px 3px" height="100px" width="145">-->
<!--                            <img src="../image/banner/ban3.jpg" alt="" style="margin: 0px 3px" height="100px" width="145">-->
<!--                            <img src="../image/banner/ban4.jpg" alt="" style="margin: 0px 3px" height="100px" width="145">-->
<!--                            <img src="../image/banner/ban0.jpg" alt="" style="margin: 0px 3px" height="100px" width="145">-->
<!--                            <img src="../image/banner/ban1.jpg" alt="" style="margin: 0px 3px" height="100px" width="145">-->
<!--                            <img src="../image/banner/ban2.jpg" alt="" style="margin: 0px 3px" height="100px" width="145">-->
<!--                            <img src="../image/banner/ban3.jpg" alt="" style="margin: 0px 0px 0px 3px" height="100px" width="145">-->
                        </div>
                    </div>
                    <div id="banner_rightbtn" class="left img_center" style="width: 20px;height: 100px;margin-left: 10px">
                        <span style="height: 100%;vertical-align: middle;display: inline-block"></span><img src="../image/banner/banner_rightarrow.png">
                    </div>
                </div>
                <div style="width: 670px;height: 180px;margin-top: 10px">
                    <div class="activityshow">
                        <span>活动</span>
                        <a href="article/article.php?article=<?php echo $article[0];?>" target="_blank" style="padding: 0px"><b><?php echo $article[4];?></b></a>
                        <a class="right" href="./article/articlelist.php?type=0" target="_blank" style="font-size: 14px;color: #c7c7c7;text-decoration: none">更多></a>
                    </div>
                    <div>
                        <a style="float: left"><img src="../image/activity/gongyishow.png" width="200px" height="130px" style="border: 1px solid #d5d5d5"></a>
                        <div>
                            <div class="activitycontext">
                                <p><a href="article/article.php?article=<?php echo $article[0];?>" target="_blank" style="color: #000000"><?php echo '&nbsp;&nbsp;'.mb_substr(strip_tags(htmlspecialchars_decode($article[6])),0,150,'utf-8').'...';?>
                                </a></p>
                            </div>
                            <div class="right" style="bottom: 0px">
                                <a href="article/article.php?article=<?php echo $article[0];?>" target="_blank"><img src="../image/ico/xiangqing.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right count">
                <div style="background-color: rgb(245,67,55);height: 50px">
                    <span class="title">爱心捐赠·奥德悦生活</span>
                </div>
                <div style="border: 1px solid #979797;width: 290px;height: 240px">
                    <div class="showbox" style="">
                        <div class="left" style="height: 165px;width: 159px">
                            <div >
                                <div class="left heart" style="margin-left: 46px">
                                    <img src="../image/ico/heart.png" alt="">
                                    <img src="../image/ico/heart.png" alt="">
                                    <img src="../image/ico/heart.png" alt="">
                                    <img src="../image/ico/heart.png" alt="">
                                    <img src="../image/ico/heart.png" alt="">
                                </div>
                                <div class="right heart" style="margin-right: 46px">
                                    <img src="../image/ico/heart.png" alt="">
                                    <img src="../image/ico/heart.png" alt="">
                                    <img src="../image/ico/heart.png" alt="">
                                    <img src="../image/ico/heart.png" alt="">
                                    <img src="../image/ico/heart.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="right" style="height: 165px;width: 89px">
                            <div>
                                <div class="man left">
                                    <img src="../image/ico/people.png">
                                    <img src="../image/ico/people.png">
                                    <img src="../image/ico/people.png">
                                    <img src="../image/ico/people.png">
                                    <img src="../image/ico/people.png">
                                </div>
                                <div class="man left">
                                    <img src="../image/ico/people.png">
                                    <img src="../image/ico/people.png">
                                    <img src="../image/ico/people.png">
                                    <img src="../image/ico/people.png">
                                    <img src="../image/ico/people.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 250px;height: 70px;margin-left: 20px">
                        <div class="left context" style="width: 160px;height: 70px">
                            <span id="context_heart" style="color: red">0/50,000</span>
                            <P style="color: #000000">累计爱心</P>
                        </div>
                        <div class="right context" style="width: 90px;height: 70px">
                            <span id="context_man" style="color: red">0/30</span>
                            <P style="color: #000000">捐赠人数</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--精准助学-->
    <a name="schoolhelp"></a>
    <div class="part">
        <!--标题栏-->
        <div class="layout">
            <div class="title">
                <div class="left" style="width: 25px;height: 66px;border-bottom: 1px solid red">
                    <img class="left" src="../image/ico/heart_active.png" style="margin-top: 22px" width="25px" height="22px">
                </div>
                <span class="left"><b>精准助学</b></span>
                <a class="right" href="./article/articlelist.php?type=1" target="_blank">更多></a>
            </div>
        </div>
        <!--精准助学图片-->
        <div style="width: 983px;height: 235px">
            <!--左按钮-->
            <div id="gallery_leftbtn" class="left img_center" style="height: 235px;width: 30px;margin-right: 12px">
                <span style="height: 100%;vertical-align: middle;display: inline-block"></span><img
                    src="../image/gallery/leftarrow_sm.png">
            </div>
            <!--图片画廊-->
            <div class="left" style="height: 235px;width: 898px;overflow: hidden">
                <div id="gallery_box" class="left gallery_box" style="">
                    <?php
                        for($i=0,$j=0;$j<11;$i++,$j++){
                            if($i>=6){
                                $i=0;
                            }
                            $link=($carousel[$count+$i][5]=='')?' ':' href="'.$carousel[$count+$i][5].'"';
                            echo '<div class="left gallery">';
                            echo '<a '.$link.' target="_blank"><img src="'.$carousel[$count+$i][3].'" alt="" width="170px " height="235px"></a>';
                            echo '<div class="gallery_shadow" style="display: none">';
                            echo '<a '.$link.' target="_blank">'.$carousel[$count+$i][4].'</a>';
                            echo '</div></div>';
                        }
                        $count=$count+$j-$i;//轮播图数组下标更换
                    ?>
<!--                    <div class="left gallery">-->
<!--                        <a href="javascript:;"><img src="../image/gallery/gallery0.png" alt="" width="170px " height="235px"></a>-->
<!--                        <div class="gallery_shadow" style="display: none">-->
<!--                            <span>活动</span>-->
<!--                            <a href="javascript:;" target="_blank">扶一株春蕾，争一分春光，助一名学子，赢一片希望</a>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
            <!--右按钮-->
            <div id="gallery_rightbtn" class="left img_center" style="height: 235px;width: 30px;margin-left: 12px">
                <span style="height: 100%;vertical-align: middle;display: inline-block"></span><img
                    src="../image/gallery/rightarrow_sm.png">
            </div>
        </div>
    </div>
    <!--往期回顾-->
    <a name="pastactivity"></a>
    <div class="part">
        <!--标题-->
        <div class="layout">
            <div class="title">
                <div class="left" style="width: 25px;height: 66px;border-bottom: 1px solid red">
                    <img class="left" src="../image/ico/heart_active.png" style="margin-top: 22px" width="25px" height="22px">
                </div>
                <span class="left"><b>往期回顾</b></span>
                <a class="right" href="./article/articlelist.php?type=2" target="_blank">更多></a>
            </div>
        </div>
        <!--轮播图-->
        <div id="carousel" style="">
            <!--左按钮-->
            <div class="carousel_leftbtn">
                <img src="../image/carousel/leftarrow.png" height="170px" width="50px">
            </div>
            <!--图片-->
            <div class="carousel_box" style="background-color: rgba(199,199,199,1)">
                <?php
                    for($i=0,$j=0;$j<6;$i++,$j++){
                        if($i>=5){
                            $i=0;
                        }
                        $link=($carousel[$count+$i][5]=='')?' ':' href="'.$carousel[$count+$i][5].'"';
                        echo '<div class="left"  style="height: 472px;width: 983px">';
                        echo '<a '.$link.' target="_blank"><img class="carousel_img left" src="'.$carousel[$count+$i][3].'">';
                        echo '<div class="carousel_text left">'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$carousel[$count+$i][4].'</div>';
                        echo '</a></div>';
                    }
                    $count=$count+$j-$i;//轮播图数组下标更换
                ?>
<!--                <div class="left"  style="height: 472px;width: 983px;z-index: 11">-->
<!--                    <a href="http://www.baidu.com" target="_blank"><img class="carousel_img left" src="../image/carousel/carousel0.jpg">-->
<!--                    <div class="carousel_text left">-->
<!--                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;赠人玫瑰，手留余香；奉献爱心，收获希望。希望通过持续进行的公益助学活动，尽绵薄之力改变更多学子的命运。未来的日子，奥德将一如既往坚持回报社会，承担社会应有责任，继续参与公益慈善事业，努力将公益之行常态化。-->
<!--                    </div>-->
<!--                    </a>-->
<!--                </div>-->
            </div>
            <!--右按钮-->
            <div class="carousel_rightbtn">
                <img src="../image/carousel/rightarrow.png" height="170px" width="50px">
            </div>
        </div>
    </div>

    <!--展望未来-->
    <a name="future"></a>
    <div class="part">
        <div class="layout">
            <div class="title">
                <div class="left" style="width: 25px;height: 66px;border-bottom: 1px solid red">
                    <img class="left" src="../image/ico/heart_active.png" style="margin-top: 22px" width="25px" height="22px">
                </div>
                <span class="left"><b>展望未来</b></span>
                <a class="right" href="./article/articlelist.php?type=3" target="_blank">更多></a>
            </div>
        </div>
        <div style="width: 983px;height: 387px">
            <a><img class="left" src="<?php echo $carousel[$count][3];?>" width="983px" height="387px"></a>
            <div class="future_text">
                <span><b>联系我们</b></span><br>
                主办：奥德集团&nbsp;/&nbsp;临沂市教育局学生资助管理中心<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;临沂市工商联&nbsp;/&nbsp;临沂市光彩事业促进会&nbsp;/&nbsp;临沂市慈善总会<br>
                支持：奥德科技有限公司<br>
                地址：山东·临沂
            </div>
        </div>
    </div>
</div>
<!--底部-->
<div class="foot">
    <div class="foot_title">
        <div style="padding-top: 20px">
            <a class="left" href="index.php#" target="_self">首页</a>
            <div class="left" style="border-right: 1px solid #979797;height: 15px;margin-top: 2px"></div>
            <a class="left" href="index.php#avtivity" target="_self">活动报道</a>
            <div class="left" style="border-right: 1px solid #979797;height: 15px;margin-top: 2px"></div>
            <a class="left" href="index.php#schoolhelp" target="_self">精准助学</a>
            <div class="left" style="border-right: 1px solid #979797;height: 15px;margin-top: 2px"></div>
            <a class="left" href="index.php#pastactivity" target="_self">往期回顾</a>
            <div class="left" style="border-right: 1px solid #979797;height: 15px;margin-top: 2px"></div>
            <a class="left" href="index.php#future" target="_self">展望未来</a>
        </div>
    </div>
    <div class="foot_text">
        Copyright 2017-08-22 版权所有 鲁ICP备16026822号-2<br>奥德科技有限公司
    </div>
</div>
<?php
    require_once "./article_share.php";
?>
<script src="index.js"></script>
<script src="heart_man_count.js"></script>
</body>
</html>



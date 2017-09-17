<?php
require_once "header.php";
?>
    <!--文章列表显示-->
<div class="article_list_box">
    <div class="article_list_box_header">
        <!--标题栏-->
        <div class="title">
            <div class="left" style="width: 25px;height: 46px;border-bottom: 1px solid red">
                <img class="left" src="../../image/ico/heart_active.png" style="margin-top: 12px" width="25px" height="22px">
            </div>
            <span class="left"><b>文章列表</b></span>
        </div>
    </div>
    <div class="article_show_box">
<!--        <div class="article_show">-->
<!--            <div class="article_show_title">-->
<!--                <span class="glyphicon glyphicon-book"></span><a>CSS3阴影 box-shadow的使用和技巧总结</a>-->
<!--            </div>-->
<!--            <div class="article_show_text">-->
<!--                text-shadow是给文本添加阴影效果，box-shadow是给元素块添加周边阴影效果。随着html5和CSS3的普及，这一特殊效果使用越来越普遍。 基本语法是{box-shadow:[inset] x-offset y-offset blur-radius spread-radiuscolor} 对象选择器 {box-shadow:[投影方式] X轴偏移量 Y轴偏移量阴影模糊半径 阴影扩...-->
<!--            </div>-->
<!--            <div class="article_show_footer">-->
<!--                2012-05-28 18:58-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <div class="article_list_box_footer">
        <ul class="pagination pagenav" id="pagerow">
            <li><a> <span>&lt;&lt;</span> </a></li>
            <li><a>1</a></li>
            <li><a>2</a></li>
            <li><a>3</a></li>
            <li><a>4</a></li>
            <li><a>5</a></li>
            <li><a> <span>&gt;&gt;</span> </a></li>
        </ul>
    </div>
</div>
<script src="articlelist.js"></script>
<?php
require_once "./article_share.php";
require_once "footer.php";
?>
<?php
header("Content-type:text/html;charset=utf-8");//设置UTF8，显示汉字不乱码
$sql_count="select count(id) from articles where mark IN(1,2) ";
$sql_article="select * from articles where mark IN(1,2) ";
//检测关键词
if(isset($_GET['keyword'])&&$_GET['keyword']!=''){
    $keyword=$_GET['keyword'];
    $sql_count.=" and (title like '%$keyword%' or text like '%$keyword%') ";
    $sql_article.=" and (title like '%$keyword%' or text like '%$keyword%') ";
}
//检测类型
if(isset($_GET['type'])&&$_GET['type']!=''){
    $type=$_GET['type'];
    $sql_count.=" and type=$type ";
    $sql_article.=" and type=$type ";
}
//获取文章总数
require_once "../connect.php";
$result=mysqli_query($conn,$sql_count);
$articlenum=mysqli_fetch_array($result, MYSQLI_NUM)[0];
print_r($articlenum);
exit;
//获取分页设置
if(isset($_GET['page'])&&$_GET['page']!=''){
    $page=$_GET['page'];//类型为空，默认展示所有文章
}else{
    $page=1;
}
$pageSize=10;
$limitFirst = ($page - 1) * $pageSize;
$sql_article.=" limit $limitFirst ,$pageSize  ";
print_r($sql);



mysqli_close($conn);
?>
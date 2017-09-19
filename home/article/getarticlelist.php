<?php
header("Content-type:text/html;charset=utf-8");//设置UTF8，显示汉字不乱码
$sql_count="select count(id) from articles where mark IN(1,2) ";
$sql_article="select * from articles where mark IN(1,2) ";
//检测关键词
$keyword='';
if(isset($_GET['keyword'])&&$_GET['keyword']!=''){
    $keyword=$_GET['keyword'];
    $sql_count.=" and (title like '%$keyword%' or text like '%$keyword%') ";
    $sql_article.=" and (title like '%$keyword%' or text like '%$keyword%') ";
}
//检测类型
$type='';
if(isset($_GET['type'])&&$_GET['type']!=''){
    $type=$_GET['type'];
    $sql_count.=" and type=$type ";
    $sql_article.=" and type=$type ";
}
//获取文章总数
$pageSize=10;
require_once "../connect.php";
$result=mysqli_query($conn,$sql_count);
if($result==false||mysqli_num_rows($result)==0){
    print_r('check article fail num');
    exit;
}
$article_num=mysqli_fetch_array($result, MYSQLI_NUM)[0];
$page_num=ceil($article_num/$pageSize);

//获取分页设置
if(isset($_GET['page'])&&$_GET['page']!=''){
    $page=$_GET['page'];//类型为空，默认展示所有文章
}else{
    $page=1;
}
//文章页数特殊值处理
if($page<1){
    $page=1;
}else if($page>$page_num){
    $page=$page_num;
}
$limitFirst = ($page - 1) * $pageSize;
$sql_article.=" order by mark DESC,id ASC limit $limitFirst ,$pageSize  ";
$result = mysqli_query($conn, $sql_article);
if ($result==false||mysqli_num_rows($result)==0) {
    print_r("check article fail detail");
    exit;
}
$article_array = array();//存储文章数据
$article_array[0][0]=$page_num;//存储总页数
$article_array[0][1]=$page;//当前页数
$article_array[0][2]=$type;//类型
$article_array[0][3]=$keyword;//搜索关键词
for ($i = 1; $i <= mysqli_num_rows($result); $i++) {
    $article_array[$i] = mysqli_fetch_array($result, MYSQLI_NUM);
    $article_array[$i][6]=mb_substr(strip_tags(htmlspecialchars_decode($article_array[$i][6])),0,150,'utf-8');
}
mysqli_close($conn);
print_r(json_encode($article_array));
exit;
?>
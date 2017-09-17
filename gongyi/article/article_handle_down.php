<?php
//文章删除
if (isset($_GET['act']) && $_GET['act'] == 'del') {
    $temp = $_POST['IDArray'];
    print_r($temp);
    require "../connect.php";
    for ($i = 0; $i < count($temp); $i++) {
        $sql = "delete from articles where id=$temp[$i]";
        $result = mysqli_query($conn, $sql);
        if ($result == false) {
            print_r("del fail" . $temp[$i]);
        } else {
            print_r("del ok" . $temp[$i]);
        }
    }
    print_r("del complete");
    exit;
}

//文章获取
if (isset($_GET['page'])&&$_GET['page']!="") {
    $page = $_GET['page'];
}else{
    $page = 1;
}
$sql = 'select count(id) from articles';
require_once "../connect.php";
$result = mysqli_query($conn, $sql);
if ($result == false) {
    print_r("check num fail");
    exit;
}
$row = mysqli_fetch_array($result, MYSQLI_NUM);
//print_r($row[0]);
$article_num = $row[0];//获取文章总数目
$page_size = 10;//每页文章数目
$page_num = ceil($article_num / $page_size);
if ($page < 1) {
    $page = 1;//页数小于1,自动返回第一页
}else if ($page > $page_num){
    $page=$page_num;//页数大于最大页，默认最大页
}
$limitFirst = ($page - 1) * $page_size;
$sql = "select id,title,type,mark,time from articles ORDER BY id limit $limitFirst,$page_size";
$result = mysqli_query($conn, $sql);
if ($result == false) {
    print_r("check article fail");
    exit;
}
$article_array = array();
$article_array[0][0]=$page_num;
$article_array[0][1]=$page;
//print_r($article_array[0]);
for ($i = 1; $i <= mysqli_num_rows($result); $i++) {
    $article_array[$i] = mysqli_fetch_array($result, MYSQLI_NUM);
    //print_r($article_array[$i]);
}
//print_r($article_array);
mysqli_close($conn);
print_r(json_encode($article_array));
exit;

?>
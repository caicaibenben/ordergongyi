<?php
header("Content-type:text/html;charset=utf-8");//设置UTF8，显示汉字不乱码
$conn = mysqli_connect('127.0.0.1','root','Caicai@123',"ordergongyi");//数据库帐号密码为安装数据库时设置
if(!$conn){

    echo "<script>alert('数据库连接失败');";
    echo " history.back();\r\n";
    echo "</script>";
    //header("Location: login.php");
    exit;
}
mysqli_set_charset($conn,'utf8');
?>


<?php
header("Content-type:text/html;charset=utf-8");//设置UTF8，显示汉字不乱码
//if(!isset($_POST["submit"])){
//    exit('非法访问');
//}
if(isset($_GET['act'])&&$_GET['act']=="login"){
    $name = htmlspecialchars($_POST['name']);
    $pwd = htmlspecialchars($_POST['pwd']);
    if($name==''||$pwd==''){
        print_r('data null login fail');exit;
    }
    require_once "connect.php";
    $result=mysqli_query($conn,"select userid from users where username='$name' and userpwd='$pwd'");
    mysqli_close($conn);
    if(mysqli_num_rows($result)==0){
        print_r('data error login fail');
        exit;
    }else if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_row($result);
        //var_dump($row);
        $lifeTime = 1800; // 保存半小时
        //session_set_cookie_params($lifeTime);
        session_start();
        setcookie(session_name(), session_id(), time() + $lifeTime, "/");//通过设置cookie的方式设置session时效
        $_SESSION['username'] = $name;
        $_SESSION['userid'] = $row[0];
        print_r('data ok login');
        exit;
        //echo session_id();

    }else{
        print_r('database error login fail');
        exit;
    }
}else if(isset($_GET['act'])&&$_GET['act']=="logout"){
    session_start();
    //echo session_id();
    unset($_SESSION['username']);
    unset($_SESSION['userid']);
    session_destroy();
    print_r('logout success');
    header("Location: login.php");
    exit;
}
?>
<?php
  header("Content-type:text/html;charset=utf-8");//设置UTF8，显示汉字不乱码
  if($_POST["submit"]){
      exit('非法访问');
  }
  require_once "connect.php";
  $name = htmlspecialchars($_POST['username']);
  $pwd = htmlspecialchars($_POST['userpwd']);
  $result=mysqli_query($conn,"select userid from users where username='$name' and userpwd='$pwd'");
  if(mysqli_num_rows($result)==0){
      echo "<script>alert('用户名或者密码错误');";
      echo " history.back();\r\n";
      echo "</script>";
      exit;
  }else{
      $row=mysqli_fetch_row($result);
      var_dump($row);
      session_start();
      $_SESSION['username'] = $name;
      $_SESSION['userid'] = $row[0];
      echo session_id();
      header("Location: index.php");
  }
?>
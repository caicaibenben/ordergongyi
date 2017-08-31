<?php
    //print_r($_POST);exit;
    $article_id=htmlspecialchars($_POST['article_id']);
    $article_title=htmlspecialchars($_POST['title']);
    $article_keywords=htmlspecialchars($_POST['keywords']);
    $article_type=htmlspecialchars($_POST['type']);
    $article_author=htmlspecialchars($_POST['author']);
    $article_mark=htmlspecialchars($_POST['mark']);
    $article_content=htmlspecialchars($_POST['article_content']);
    $article_time=htmlspecialchars($_POST['time']);
    require_once "connect.php";
    $result=mysqli_query($conn,"select * from articles where id='$article_id'");
    if(mysqli_num_rows($result)==0){//文章插入

        mysqli_close($conn);
        print_r("insert pass");exit;
    }else if(mysqli_num_rows($result)==1){//文章更新

        mysqli_close($conn);
        print_r("update pass");exit;
    }else{//文章id问题，数据库关闭退出

        mysqli_close($conn);
        print_r("fail");exit;
    }
?>


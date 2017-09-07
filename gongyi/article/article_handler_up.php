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
    require_once "../connect.php";
    $result=mysqli_query($conn,"select * from articles where id='$article_id'");
    if(mysqli_num_rows($result)==0){//文章插入
        $flag="insert";
        $act="INSERT INTO articles (id, type, author, mark, title,keywords, text, time) VALUES ('$article_id', '$article_type', '$article_author', '$article_mark', '$article_title', '$article_keywords', '$article_content', '$article_time')";
    }else if(mysqli_num_rows($result)==1){//文章更新
        $flag="update";
        $act="UPDATE articles SET type= '$article_type',author= '$article_author',mark= '$article_mark',title ='$article_title', keywords= '$article_keywords', text= '$article_content', time= '$article_time' WHERE id=$article_id";
    }else{//文章id问题，数据库关闭退出
        mysqli_close($conn);
        print_r("id fail");exit;
    }
    $result=mysqli_query($conn,$act);
    if($result){
        mysqli_close($conn);
        print_r($flag."pass".$result);exit;
    }else{
        print_r($flag."fail".mysqli_error($conn));
        mysqli_close($conn);exit;
    }

?>


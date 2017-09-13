<?php
    if(!isset($_POST['articleid'])){
        print_r("ID null");
        exit;
    }
    require_once "../connect.php";
    $articleid=$_POST['articleid'];
    $result=mysqli_query($conn,"select * from articles where id='$articleid'");
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result,MYSQLI_NUM);
        $row[6]=htmlspecialchars_decode($row[6]);
        print_r(json_encode($row));
        mysqli_close($conn);
        exit;
    }
    mysqli_close($conn);
    print_r("ID fail".mysqli_num_rows($result));exit;
?>
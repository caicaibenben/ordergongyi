<?php
 if(!isset($_POST['carouselArray'])){
    print_r('fail carouselArray null');exit;
 };
 $carousel=array();
 //$carousel=$_POST['carouselArray'];
 for($i=0;$i<count($_POST['carouselArray']);$i++){
     $carousel[$i]=htmlspecialchars($_POST['carouselArray'][$i]);
 }
 if(empty($carousel[0])||empty($carousel[1])||empty($carousel[2])){
     print_r("data null fail");exit;
 }
 require_once "../connect.php";
 $sql="UPDATE carousel SET imgaddr='$carousel[2]', text='$carousel[3]',link='$carousel[4]'  WHERE type='$carousel[0]' and type_id='$carousel[1]'";
 $result=mysqli_query($conn,$sql);
 if($result==false){
    echo  "database fail";exit;
 }
 mysqli_close($conn);
 print_r("database success");exit;
?>
<?php
$articleId='';
if(!isset($_GET['article'])||$_GET['article']==''){
    $articleId='0000';//导航至404页面
}else{
    $articleId=$_GET['article'];
}
require_once "../connect.php";
$sql="select * from articles where id=$articleId";
$result=false;
for($i=0;$i<2;$i++){
    $result=mysqli_query($conn,$sql);
    if($result==false||mysqli_num_rows($result)!=1){
        $articleId='0000';//导航至404页面
        $sql="select * from articles where id=$articleId";
    }else if(mysqli_num_rows($result)==1){
        break;
    }
}
$article=mysqli_fetch_array($result,MYSQLI_NUM);
if(($article[3]==0&&$article[0]!='0000')||$i==2){
    print_r('文章检索失败');exit;
}
?>
<?php
require_once "header.php";
?>
    <!--文章显示-->
    <div class="article_box">
        <div class="article">
            <!--文章标题-->
            <div class="article_title">
                <?php echo $article[4];?>
            </div>
            <!--文章信息-->
            <div class="article_describe">
                <?php echo $article[7].'&nbsp;&nbsp;&nbsp;&nbsp;'.$article[2];?>
            </div>
            <!--文章内容-->
            <div>
                <!--文章内容-->
                <?php echo htmlspecialchars_decode($article[6]);?>
            </div>
        </div>
    </div>

<?php
require_once "./article_share.php";
require_once "footer.php";
?>
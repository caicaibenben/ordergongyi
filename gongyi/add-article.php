<?php
//var_dump($_POST);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="width: 700px;border: 1px solid red" >
    <?php
        echo $_POST['article-content'];
    ?>
</div>
<script>
        alert("ok");
</script>
</body>
</html>

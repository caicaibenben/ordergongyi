<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
    <script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js">
    </script>
    <style>
        p{
            color:#aaa;
        }
        p span{
            color:red;
        }
        span{
            color:yellow;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                $("p").prepend("<span>Hello World! </span>");
            });
        });
        $(document).ready(function(){
            $("#btn2").click(function(){
                $("p").append("<span>Hello World! </span>");
            });
        });
        $(document).ready(function(){
            $("#btn3").click(function(){
                $("p").before("<span>Hello World! </span>");
            });
        });
        $(document).ready(function(){
            $("#btn4").click(function(){
                $("p").after("<span>Hello World! </span>");
            });
        });
    </script>
</head>
<body>

<button id="btn1">在每个P元素之前插入内容</button>
<button id="btn2">在每个P元素之前插入内容</button>
<button id="btn3">在每个P元素之前插入内容</button>
<button id="btn4">在每个P元素之前插入内容</button>
<p>这是一个段落。</p>
<p>这是另一个段落。</p>

</body>
</html>
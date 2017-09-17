
    <!--文章分享-->
    <div id="article_share_box" class="article_share_box">
        <div class="bdsharebuttonbox">
            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">
            </a>
            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友">
            </a>
            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">
            </a>
            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">
            </a>
            <a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网">
            </a>
        </div>
    </div>
    <script>
        var imgScrs="";
        var imgs = $(".article_img img");
        for(var i=0;i<imgs.length;i++){
            imgScrs+=imgs [i].src;
            if(i+1<imgs.length)imgScrs+=";";
        }
        //console.log($(".article_img img").attr("src"));
        //console.log(imgScrs);
        //console.log(location.href);
        window._bd_share_config = {
            "common": {
                "bdSnsKey": {},
                "bdUrl":location.href,
                "bdText": $(".article_title").text()+"@"+$("title").text(),
                "bdMini": "2",
                "bdMiniList": false,
                "bdPic":imgScrs,
                "bdStyle": "0",
                "bdSize": "16"
            },
            "share": {}
        };
        with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='./static/api/js/share.js'];
    </script>
    <!--微信公众号+回到顶部-->
    <div id="weixin_top" class="weixin_top">
        <div class="weixin_box">
            <img src="../../image/share_ico/weixin.png">
        </div>
        <div class="top_box">
            <a href="#"><img src="../../image/share_ico/top.png"></a>
        </div>
    </div>


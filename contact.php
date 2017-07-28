<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<!-- 活力公寓 -->
<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    
    <div class="page6 a0 main">
    	<div class="banner">
            <div class="img"><img src="<?php echo static_file('web/img/join/pic4_02.jpg'); ?>"></div>   
            <div class="con">
                <div class="top">
                    <p class="tit-ch">联系我们</p>
                    <p class="tit-en">Contact Us</p>
                    <p>
                        南京东方颐年健康产业发展有限公司<br>
南京东方颐年养老服务有限公司<br>
地址：中国 南京 江东北路289号银城广场<br>
邮箱：dfyn@ycdc.com
                    </p>
                </div>
                <a href="http://map.baidu.com/">查看百度地图</a>
            </div>
        </div>
        <div class="list1">
            <span>
                <label>
                    <p class="ch">在线留言</p>
                    <p class="en">Online message</p>
                </label>
            </span>
        </div>
        <div class="list2">
            <div class="con">
                <ul class="f-cb">
                    <li class="f-cb">
                        <p>姓名: </p>
                        <input type="text" name="">
                    </li>
                    <li class="f-cb">
                        <p>性别: </p>
                        <input type="radio" name="sex" checked="checked">
                        <p class="sex">男</p>
                        <input type="radio" name="sex">
                        <p class="sex">女</p>
                    </li>
                    <li class="f-cb">
                        <p>年龄： </p>
                        <input type="text" name="">
                    </li>
                    <li class="f-cb">
                        <p>出生年月:</p>
                        <input type="text" name="">
                    </li>
                    <li class="f-cb">
                        <p>联系电话:   </p>
                        <input type="text" name="">
                    </li>
                    <li class="f-cb">
                        <p> E-mail:</p>
                        <input type="text" name="">
                    </li class="f-cb">
                    <li class="f-cb address">
                        <p>留言内容:</p>
                        <textarea></textarea>
                    </li>
                </ul>
            </div>
            <div class="bot">
                <span>
                    <label>
                        <input type="submit" name="" value="提交">
                        <input type="reset" name="" value="重置">
                    </label>
                </span>
            </div>
        </div>
    </div>

    <?php include_once VIEWS.'inc/footer.php'; ?>
<script>     
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
  </script>
<script>
$(function(){
	var width = $(window).width();

    if( width < 1000){
    }else{
    }
    // if(width < 1000){
    //     $(".banner").height( 250 );
    // }else{
    //     $(".banner").height( width * 0.42 );
    // }
    

    $(window).resize(function(){
        width = $(window).width();
        if( width < 1000){
        }else{
        }
        
    //     if(width < 1000){
    //     $(".banner").height( 250 );
    // }else{
    //     $(".banner").height( width * 0.42 );
    // }
    });

    // $(".banner .font").height( $(".banner .font").parent().height()  );
})
</script>
</body>
</html>
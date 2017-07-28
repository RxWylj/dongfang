<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<!-- 活力公寓 -->
<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    
    <div class="page3 a1 main">
    	<div class="banner">
            <div class="img"><img src="<?php echo static_file('web/img/news/pic1_02.jpg'); ?>" data-pc="<?php echo static_file('web/img/news/pic1_02.jpg'); ?>" data-phone="<?php echo static_file('web/img/news/pic5_03.jpg'); ?>"></div>   
            <div class="font">
                <span>
                    <label>
                        <p class="t1">新闻媒体</p>
                        <p>News Media</p>
                    </label>
                </span>
            </div>
        </div>
        <div class="page3-nav">
            <a href="<?php echo site_url('news'); ?>"  class="on"><label>资讯中心</label><img src="<?php echo static_file('web/img/news/icon1_05.png'); ?>"></a>
            <a href="<?php echo site_url('news/news'); ?>" class="a1"><label>媒体报道</label><img src="<?php echo static_file('web/img/news/icon1_05.png'); ?>"></a>
        </div>
        <div class="list1">
            <div class="pc swiper-container swiper-container-horizontal">
                <ul class="swiper-wrapper">
                    <li class="f-cb swiper-slide">
                        <div class="right"><img src="<?php echo static_file('web/img/news/pic3_05.jpg'); ?>"></div>
                        <div class="left">
                            <font>
                            <span>
                                <label class="label">
                                    <p class="tit">中美养老社区发展高端论坛圆满成功，紫金山CCRC 项目预计9月上市</p>
                                    <p class="time">2016-11-29</p>
                                    <p class="con">新元伊始，万象更新，昨天（1月20日）下午，由银城地产集团旗下的东方颐年组织的“中美养老社区发展高级论坛---暨东方颐年养老品牌发布会”圆满成功……</p>
                                    <a href="<?php echo site_url('news/detail'); ?>">
                                        <span>
                                            <label class="f-cb">
                                                <p>see more</p>
                                                <font><img src="<?php echo static_file('web/img/news/icon2_11.png'); ?>"></font>
                                            </label>
                                        </span>
                                        
                                    </a>
                                </label>
                            </span>
                            </font>
                        </div>
                    </li>
                    <li class="f-cb swiper-slide">
                        <div class="right"><img src="<?php echo static_file('web/img/news/pic3_05.jpg'); ?>"></div>
                        <div class="left">
                        <font>
                            <span>
                                <label class="label">
                                    <p class="tit">中美养老社区发展高端论坛圆满成功，紫金山CCRC 项目预计9月上市</p>
                                    <p class="time">2016-11-29</p>
                                    <p class="con">新元伊始，万象更新，昨天（1月20日）下午，由银城地产集团旗下的东方颐年组织的“中美养老社区发展高级论坛---暨东方颐年养老品牌发布会”圆满成功。论坛持续三个多小时，吸引了来自政府、养老机构、投资专家、地产、医疗、媒体等相关领域近……</p>
                                    <a href="<?php echo site_url('news/detail'); ?>">
                                        <span>
                                            <label class="f-cb">
                                                <p>see more</p>
                                                <font><img src="<?php echo static_file('web/img/news/icon2_11.png'); ?>"></font>
                                            </label>
                                            
                                        </span>
                                        
                                    </a>
                                </label>
                            </span>
                            </font>
                        </div>
                    </li>
                    <li class="f-cb swiper-slide">
                        <div class="right"><img src="<?php echo static_file('web/img/news/pic3_05.jpg'); ?>"></div>
                        <div class="left">
                        <font>
                            <span>
                                <label class="label">
                                    <p class="tit">中美养老社区发展高端论坛圆满成功，紫金山CCRC 项目预计9月上市</p>
                                    <p class="time">2016-11-29</p>
                                    <p class="con">新元伊始，万象更新，昨天（1月20日）下午，由银城地产集团旗下的东方颐年组织的“中美养老社区发展高级论坛---暨东方颐年养老品牌发布会”圆满成功。论坛持续三个多小时，吸引了来自政府、养老机构、投资专家、地产、医疗、媒体等相关领域近……</p>
                                    <a href="<?php echo site_url('news/detail'); ?>">
                                        <span>
                                            <label class="f-cb">
                                                <p>see more</p>
                                                <font><img src="<?php echo static_file('web/img/news/icon2_11.png'); ?>"></font>
                                            </label>
                                            
                                        </span>
                                        
                                    </a>
                                </label>
                            </span>
                            </font>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
            </div>
        </div>
        <div class="list2">
            <div class="pc">
                <div class="time-nav">
                    <span>
                        <label>
                            <font class="on">2016</font>
                            <font>2015</font>
                            <font>2014</font>
                            <font>2013</font>
                            <font>2012</font>
                        </label>
                    </span>
                </div>
                <div class="news-list">
                    <?php include_once VIEWS.'news/list.php'; ?>
                </div>
            </div>
            <div class="phone">
                <select>
                    <option value="0" selected="selected">2016</option>
                    <option value="1">2015</option>
                    <option value="2">2014</option>
                    <option value="3">2013</option>
                    <option value="4">2012</option>
                </select>
                <div class="news-list">
                    <?php include_once VIEWS.'news/list1.php'; ?>
                </div>
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

    $(".time-nav font").click(function(){
        if( !$(this).hasClass("on") ){
            var index = $(this).index();
            $(this).addClass("on").siblings().removeClass("on");
            // $(".bill-con:eq("+index+")").slideDown(400).siblings(".bill-con").slideUp(400);
            // $(".bill-aaa").slideUp(400);
            var url = "<?php echo site_url('news/list'); ?>";
            $.ajax({
                url: url,
                type: 'get',
                cache: false, 
                dataType: 'html',
                // data: {page: index},
                success:function(html){
                    $(".news-list").html(html)
                }
            })
            return false;
        }
    });

    $("select").change(function(){
        var index = $(this).val();
        console.log(index);
        var url = "<?php echo site_url('news/list'); ?>";
        $.ajax({
            url: url,
            type: 'get',
            cache: false, 
            dataType: 'html',
            // data: {page: index},
            success:function(html){
                $(".news-list").html(html)
            }
        })
        return false;
    });

    if( width < 1000){
        $(".list1 .pc li .left").width( width );
        $(".list1 .pc li .left .label").width( width * 0.8 );
    }else{
        $(".list1 .left,.list1 .right").each(function(){
            $(this).height( Math.floor(width * 0.5 * 0.46875) );
        });
        $(".list1 .pc li .left").width( width * 0.5 );
        $(".list1 .pc li .left .label").width( width * 0.4 );
    }
    

    $(window).resize(function(){
        width = $(window).width();
        if( width < 1000){
            $(".list1 .pc li .left").width( width );
            $(".list1 .pc li .left .label").width( width * 0.8 );
        }else{
            $(".list1 .left,.list1 .right").each(function(){
                $(this).height( Math.floor(width * 0.5 * 0.46875) );
            });
            $(".list1 .pc li .left").width( width * 0.5 );
            $(".list1 .pc li .left .label").width( width * 0.4 );
        }
    $(".banner .font").height( $(".banner .font").parent().height()  );
        
    });

    $(".banner .font").height( $(".banner .font").parent().height()  );
})
</script>
</body>
</html>
<script type="text/javascript">
$(function(){
    var width = $(window).width();
        if( width < 1000){
            $(".banner .img img").attr("src", $(".banner .img img").attr("data-phone") );
        }else{
            $(".banner .img img").attr("src", $(".banner .img img").attr("data-pc") );
        }
    var img = $(".banner .font").parent().find(".img img").attr("src");
    console.log(img)
    var h1 = 0,w1 = 0;
    // $(".banner .font").height( $(".banner .font").parent().height()  );
    getImageWidth(img,function(w,h){
        $(".banner .font").height( width * h / w );
    });

    // console.log(h1 + ";" + w1)
    // $(".banner .font").height( width * h1 / w1 );
    
    $(window).resize(function(){
        width = $(window).width();
        if( width < 1000){
            $(".banner .img img").attr("src", $(".banner .img img").attr("data-phone") );
        }else{
            $(".banner .img img").attr("src", $(".banner .img img").attr("data-pc") );
        }
        var img = $(".banner .font").parent().find(".img img").attr("src");
        var h1,w1;
        // $(".banner .font").height( $(".banner .font").parent().height()  );
        getImageWidth(img,function(w,h){
            $(".banner .font").height( width * h1 / w1 );
        });
    });
})
function getImageWidth(url,callback){
    var img = new Image();
    img.src = url;
    
    // 如果图片被缓存，则直接返回缓存数据
    if(img.complete){
        callback(img.width, img.height);
    }else{
            // 完全加载完毕的事件
        img.onload = function(){
        callback(img.width, img.height);
        }
    }
    
}
</script>
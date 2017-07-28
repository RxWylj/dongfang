<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<!-- 活力公寓 -->
<body>
    <?php include_once VIEWS.'inc/header.php'; ?>
    
    <div class="page5 a0 main">
    	<div class="banner">  
            <div class="img"><img src="<?php echo static_file('web/img/join/pic1_02.jpg'); ?>" data-pc="<?php echo static_file('web/img/join/pic1_02.jpg'); ?>" data-phone="<?php echo static_file('web/img/join/pic5_03.jpg'); ?>"></div>  
            <div class="font">
                <span>
                    <label>
                        <p class="t1">加入我们</p>
                        <p>Join Us</p>
                    </label>
                </span>
            </div>
        </div>
        <div class="page3-nav">
            <a href="<?php echo site_url('join'); ?>" class="on"><label>招聘信息</label></a>
            <a href="<?php echo site_url('join/join'); ?>" class="a1"><label>在线申请</label></a>
        </div>
        <div class="list1">
            <p>如果你充满爱心和责任心，如果你有专业的医护、酒店、餐饮服务经验，如果你向往专业的管理团队和工作模式，<br>
欢迎加入朗和爱的大家庭！</p>
            <p class="p1">东方颐年（ESL），作为银城旗下养老产业平台 , 高薪诚聘，期待你的到来。</p>
        </div>
        <div class="list2">
            <ul>
                <li class="f-cb">
                    <div class="left">院长（实习）</div>
                    <div class="right">
                        <p class="p1">职位描述</p>
                        <p>
                            1、依照国家和政府的有关养老法律和政策，根据公司发展之理念，负责院内全面工作，指导、检查、督促各部门按时按质完成总部下达的各项工作任务。
2、充分发挥和调动员工的工作积极性，定期开展员工的职业道德和业务技能等培训，提高护理员的综合素养和操作技能。
3、负责监督院内财务管理工作，按财务制度做好各项经费收支情况的审核。
4、负责院内行政、业务、人事、后勤及员工奖励、处罚、聘用、解聘等重大事宜的决策。
5、负责院内年度工作计划的制定和实施；定期召开主持院内的行政会议、员工大会、膳食会议；研究、讨论、提出完成各项任务的具体措施和方法，解决院内重大问题。
6、负责组织每周一次的行政、医疗、护理三级查房。
                        </p>
                        <p class="p1">任职资格</p>
                        <p>
                            1、大专以上学历，专业不限；
2、具备多年大型企业行政管理工作经验，国企优先；
3、出色的领导驾驭能力，工作积极主动，热衷于老龄产业，耐心与老人相处。
                        </p>
                    </div>
                    <div class="add"><a href="">我要应聘</a></div>
                </li>
                <li class="f-cb">
                    <div class="left">院长（实习）</div>
                    <div class="right">
                        <p class="p1">职位描述</p>
                        <p>
                            1、依照国家和政府的有关养老法律和政策，根据公司发展之理念，负责院内全面工作，指导、检查、督促各部门按时按质完成总部下达的各项工作任务。
2、充分发挥和调动员工的工作积极性，定期开展员工的职业道德和业务技能等培训，提高护理员的综合素养和操作技能。
3、负责监督院内财务管理工作，按财务制度做好各项经费收支情况的审核。
4、负责院内行政、业务、人事、后勤及员工奖励、处罚、聘用、解聘等重大事宜的决策。
5、负责院内年度工作计划的制定和实施；定期召开主持院内的行政会议、员工大会、膳食会议；研究、讨论、提出完成各项任务的具体措施和方法，解决院内重大问题。
6、负责组织每周一次的行政、医疗、护理三级查房。
                        </p>
                        <p class="p1">任职资格</p>
                        <p>
                            1、大专以上学历，专业不限；
2、具备多年大型企业行政管理工作经验，国企优先；
3、出色的领导驾驭能力，工作积极主动，热衷于老龄产业，耐心与老人相处。
                        </p>
                    </div>
                    <div class="add"><a href="">我要应聘</a></div>
                </li>
            </ul>
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
    }
    

    $(window).resize(function(){
        width = $(window).width();
        if( width < 1000){
        }
        
    // $(".banner .font").height( $(".banner .font").parent().height()  );
    });

    // $(".banner .font").height( $(".banner .font").parent().height()  );
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
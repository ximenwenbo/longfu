<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"E:\WWW\www.longfu.com\public/../application/home\view\index\index.html";i:1552729053;s:57:"E:\WWW\www.longfu.com\application\home\view\pub\head.html";i:1552729699;s:57:"E:\WWW\www.longfu.com\application\home\view\pub\foot.html";i:1552729053;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Title here -->
    <title>首页</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="大泽仁艾" />
    <meta name="keywords" content="大泽仁艾" />
    <meta name="author" content="大泽仁艾" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no" />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/home/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('home_css'); ?>response.css" />
    <!-- jQuery -->
    <script src="<?php echo config('home_js'); ?>jquery.js" type="text/javascript"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="/home/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- Slider JS -->
    <script type="text/javascript" src="<?php echo config('home_js'); ?>responsiveslides.min.js"></script>
    <script type="text/javascript" src="<?php echo config('home_js'); ?>Lunbo.js"></script>
    <!-- Animation JS -->
    <script type="text/javascript" src="<?php echo config('home_js'); ?>scrollReveal.min.js"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="<?php echo config('home_js'); ?>custom.js"></script>
</head>
<body class="body_bg">
<!--头部开始-->
<div class="header">
    <div class="header_topbg"></div>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-navbar row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggle-zdy" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo config('home_images'); ?>logo.png" alt="..." class="img-responsive" /></a>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 P0">
                <div class="collapse collapse-zdy navbar-collapse navbar-collapse-zdy navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <li class="cur">
                            <a href="/">
                                <span class="cn">&nbsp;&nbsp;首页&nbsp;&nbsp;</span>
                                <span class="en">&nbsp;&nbsp;HOME&nbsp;&nbsp;</span>
                            </a>
                        </li>
                        <li>
                            <a href="/home/about/index.html">
                                <span class="cn">企业介绍</span>
                                <span class="en">BRAND STORE</span>
                            </a>
                        </li>

                        <li>
                            <a href="/home/news/index.html">
                                <span class="cn">资讯中心</span>
                                <span class="en">NEWS CENTER</span>
                            </a>
                        </li>
                        <li>
                            <a href="艾灸百科.html">
                                <span class="cn">艾灸百科</span>
                                <span class="en">ENCYCLOPEDIAS</span>
                            </a>
                        </li>
                        <li>
                            <a href="效果实例.html">
                                <span class="cn">效果实例</span>
                                <span class="en">EXAMPLE</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<!--/头部结束-->
    <!--Slider-->
    <div class="banner">
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="banner1"><img src="<?php echo config('home_images'); ?>home_banner01.png" class="img-responsive" alt="banner" style="width: 100%;" /></div>
                </li>
                <li>
                    <div class="banner1 banner2"><img src="<?php echo config('home_images'); ?>home_banner02.png" class="img-responsive" alt="banner" style="width: 100%;" /></div>
                </li>
                <li>
                    <div class="banner1 banner3"><img src="<?php echo config('home_images'); ?>home_banner03.png" class="img-responsive" alt="banner" style="width: 100%;" /></div>
                </li>
                <li>
                    <div class="banner1 banner4"><img src="<?php echo config('home_images'); ?>home_banner04.png" class="img-responsive" alt="banner" style="width: 100%;" /></div>
                </li>
                <li>
                    <div class="banner1 banner5"><img src="<?php echo config('home_images'); ?>home_banner05.png" class="img-responsive" alt="banner" style="width: 100%;" /></div>
                </li>
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--/Slider-->

    <div class="heng_box">
        <div class="plan_com clearfix">
            <div class="container">
                <div class="div_title center" data-sr="move 100px, over .8s,wait .2s, enter bottom">
                    <h4>主营业务</h4>
                    <div class="en">MAIN BUSINESS</div>
                </div>
                <div class="row c1_list">
                    <!--Slider-->
                    <div class="Box">
                        <div class="content content_zhuying">
                            <div class="Box_con clearfix">
                                <span class="btnl btnt" id="btnl1"></span>
                                <span class="btnr btnt" id="btnr1"></span>
                                <div class="conbox" id="BoxUl1">
                                    <ul data-sr="move 100px, over .8s,wait .2s, enter bottom">
                                        <li class="P0 cur">
                                            <div class="item">
                                                <div class="c1_titleText">全身养生灸</div>
                                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_11.jpg" class="img-responsive"></div>
                                                <div class="c1_desc">
                                                    养生灸以激活人体的自愈机能为主要
                                                    手段，配合以局部靶组织受药浓度高
                                                    全身血药浓度低的用药...
                                                </div>
                                                <div class="c1_btn"><a href="#">查看更多</a></div>
                                            </div>
                                        </li>
                                        <li class="P0">
                                            <div class="item">
                                                <div class="c1_titleText">瘦身灸</div>
                                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_12.jpg" class="img-responsive"></div>
                                                <div class="c1_desc">
                                                    艾灸疗法能减肥瘦身、防病在我国已
                                                    有数千年历史。早在春秋战国时期人
                                                    们已经开始广泛使用艾灸...
                                                </div>
                                                <div class="c1_btn"><a href="#">查看更多</a></div>
                                            </div>
                                        </li>
                                        <li class="P0">
                                            <div class="item">
                                                <div class="c1_titleText">睡眠调理灸</div>
                                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_13.jpg" class="img-responsive"></div>
                                                <div class="c1_desc">
                                                    艾灸治疗失眠,不仅可以较好的改善
                                                    人们的睡眠,更可以放松人们的身心
                                                    ,让人们...
                                                </div>
                                                <div class="c1_btn"><a href="#">查看更多</a></div>
                                            </div>
                                        </li>
                                        <li class="P0">
                                            <div class="item">
                                                <div class="c1_titleText">风湿骨痛灸</div>
                                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_14.jpg" class="img-responsive"></div>
                                                <div class="c1_desc">
                                                    膝关节疼痛是一个多原因的引发的疾
                                                    病。如:风湿、劳损、体重过重,  膝关
                                                    节是人体最复杂的关节,本身...
                                                </div>
                                                <div class="c1_btn"><a href="#">了解详情</a></div>
                                            </div>
                                        </li>
                                        <li class="P0">
                                            <div class="item">
                                                <div class="c1_titleText">产品材料系列</div>
                                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_11.jpg" class="img-responsive"></div>
                                                <div class="c1_desc">
                                                    养生灸以激活人体的自愈机能为主要
                                                    手段，配合以局部靶组织受药浓度高
                                                    全身血药浓度低的用药...
                                                </div>
                                                <div class="c1_btn"><a href="#">查看更多</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        //滚动元素id，左切换按钮，右切换按钮，切换元素个数id,滚动方式，切换方向，是否自动滚动，滚动距离，滚动时间，滚动间隔，显示个数
                        LbMove('BoxUl1', 'btnl1', 'btnr1', 'BoxSwitch1', true, 'left', true, 220, 1000, 5000, 4);
                    </script>
                    <!--/Slider-->
                </div>
            </div>
        </div>
    </div>
    <div class="heng_box heng_box_1">
        <div class="plan_com clearfix">
            <div class="container">
                <div class="div_title center" data-sr="move 100px, over .8s,wait .2s, enter bottom">
                    <h4>优惠活动</h4>
                    <div class="en">DISCOUNT ACTIVITY</div>
                </div>
                <div class="row c1_list" data-sr="move 100px, over .8s,wait .2s, enter bottom">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a class="item">
                            <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_01.png" class="img-responsive" /></div>
                            <div class="c1_titleText c1_titleText_2">加油站地面快速修复速修复</div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a class="item">
                            <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_01.png" class="img-responsive" /></div>
                            <div class="c1_titleText c1_titleText_2">加油站地面快速修复速修复地面地面地面</div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a class="item">
                            <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_01.png" class="img-responsive" /></div>
                            <div class="c1_titleText c1_titleText_2">城市慢行交通系统</div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a class="item">
                            <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_01.png" class="img-responsive" /></div>
                            <div class="c1_titleText c1_titleText_2">彩色防滑路面</div>
                        </a>
                    </div>
                </div>
                <div class="more_plan center PT20" data-sr="move 100px, over .8s,wait .2s, enter bottom"><a href="#">更多产品</a></div>
            </div>
        </div>
    </div>
    <div class="heng_box heng_box_2">
        <div class="plan_com clearfix">
            <div class="container">
                <div class="div_title center" data-sr="move 100px, over .8s,wait .2s, enter bottom">
                    <h4>品牌店面</h4>
                    <div class="en">BRAND STORE</div>
                </div>
                <div class="row btn_tab btn_tab_pro MB30">
                    <div class="col-md-3 col-sm-3 col-xs-3 P10"><a href="javascript:;">健翔店</a></div>
                    <div class="col-md-3 col-sm-3 col-xs-3 P10"><a href="javascript:;">万柳店</a></div>
                    <div class="col-md-3 col-sm-3 col-xs-3 P10"><a href="javascript:;">金宝店</a></div>
                    <div class="col-md-3 col-sm-3 col-xs-3 P10"><a href="javascript:;" class="cur">金源店</a></div>
                </div>
                <div class="div_msg" data-sr="move 100px, over .8s,wait .2s, enter bottom">
                    金源店于2007年10月16日正式营业，是绿岛公司在国内建立的第一家专业艾灸养生馆，会所的理念是：“全心全意为客人服务”。倡导用最古老、最自然、最有效的方法—
                    艾灸养生，来为大众健康服务。 地址：海淀区世纪城三期时雨园北门甲2-5号，预约热线：010-88866499。
                </div>
                <div class="row c1_list PT20 hidden-xs" data-sr="move 100px, over .8s,wait .2s, enter bottom">
                    <div class="col-md-3 col-sm-12 col-xs-12 P0">
                        <div class="col-md-12 col-sm-12 col-xs-12 P0">
                            <a class="item item_1">
                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_03.jpg" class="img-responsive"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12 P0">
                        <div class="col-md-4 col-sm-4 col-xs-12 heng_box_2">
                            <a class="item">
                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_02.jpg" class="img-responsive"></div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 heng_box_2">
                            <a class="item">
                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_02.jpg" class="img-responsive"></div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 heng_box_2">
                            <a class="item">
                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_02.jpg" class="img-responsive"></div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 heng_box_2">
                            <a class="item">
                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_02.jpg" class="img-responsive"></div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 heng_box_2">
                            <a class="item">
                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_02.jpg" class="img-responsive"></div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 heng_box_2">
                            <a class="item">
                                <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_02.jpg" class="img-responsive"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="heng_box heng_box_2">
        <div class="plan_com clearfix">
            <div class="container">
                <div class="div_title center" data-sr="move 100px, over .8s,wait .2s, enter bottom">
                    <h4>客户评价</h4>
                    <div class="en">EVALUATION</div>
                </div>
                <div class="row c1_list">
                    <!--Slider-->
                    <div class="Box">
                        <div class="content">
                            <div class="banner_re">
                                <div class="banner_con">
                                    <ul>
                                        <li class="P0">
                                            <div class="item_re">
                                                <div class="col-md-2 col-sm-2 col-xs-5">
                                                    <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_12.jpg" class="img-responsive"></div>
                                                </div>
                                                <div class="col-md-10 col-sm-10 col-xs-7">
                                                    <div class="c1_titleText">
                                                        牛女士
                                                    </div>
                                                    <div class="c1_desc">
                                                        患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="P0">
                                            <div class="item_re">
                                                <div class="col-md-2 col-sm-2 col-xs-5">
                                                    <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_12.jpg" class="img-responsive"></div>
                                                </div>
                                                <div class="col-md-10 col-sm-10 col-xs-7">
                                                    <div class="c1_titleText">
                                                        牛女士
                                                    </div>
                                                    <div class="c1_desc">
                                                        患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="P0">
                                            <div class="item_re">
                                                <div class="col-md-2 col-sm-2 col-xs-5">
                                                    <div class="c1_img"><img src="<?php echo config('home_images'); ?>upload/pro_12.jpg" class="img-responsive"></div>
                                                </div>
                                                <div class="col-md-10 col-sm-10 col-xs-7">
                                                    <div class="c1_titleText">
                                                        牛女士
                                                    </div>
                                                    <div class="c1_desc">
                                                        患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根,患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，患者于2个月前到店时，由于第4—6颈椎间盘突出压迫神经根，
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="u left"></div>
                                <div class="u right"></div>

                            </div>
                            <div class="hover_con"></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        var index = 0;
                        var imgnum = $('.banner_re ul li').length;
                        var nmun = '';

                        function selectimg(index) {
                            $('.banner_re ul li').eq(index).fadeIn(600).siblings().fadeOut(600);
                            $('.hover_con a').eq(index).addClass('active').siblings('a').removeClass('active');
                        }
                        $('.banner_re .left').click(function () {
                            index -= 1;
                            if (index < 0) {
                                index = imgnum - 1;
                            }
                            selectimg(index);
                        });
                        $('.banner_re .right').click(function () {
                            index += 1;
                            if (index > imgnum - 1) {
                                index = 0;
                            }
                            selectimg(index);

                        });
                        for (var ni = 0; ni < imgnum; ni++) {
                            nmun += "<a href='javascript:;'></a>";
                        }
                        $('.hover_con').html(nmun);
                        $('.hover_con a').eq(0).addClass('active');

                        $('.hover_con a').each(function (i) {
                            $(this).click(function () {
                                index = i;
                                $('.banner_re ul li').eq(i).fadeIn(600).siblings().fadeOut(600);
                                $(this).addClass('active').siblings('a').removeClass('active');
                            });
                        });
                    </script>
                    <!--/Slider-->
                </div>
            </div>
        </div>
    </div>

<!--脚部开始-->
<div class="footer">
    <div class="footer_com clearfix">
        <div class="col-md-12 col-sm-12 col-xs-12 PB10 hidden-xs">
            <a href="#">首页</a><span>|</span>
            <a href="#">企业介绍</a><span>|</span>
            <a href="#">品牌店面</a><span>|</span>
            <a href="#">资讯中心</a><span>|</span>
            <a href="#">艾灸百科</a><span>|</span>
            <a href="#">效果实例</a>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 PB10 pub_list_bd hidden-xs">
            <p class="p">
                电话:<a href="tel:010-25635698">010-25635698</a>
            </p>
            <p class="p">
                手机:<a href="tel:13800138000">15965236589</a>
            </p>
            <p class="p">
                邮箱:<a href="mailto:83973923872@qq.com">83973923872@qq.com</a>
            </p>
            <p class="p">
                地址：北京市艾科有限责任公司
            </p>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            Copyright © 2008-2018 大泽仁艾养生馆. All rights reserved  xCP备16062663号-1 号
        </div>

    </div>
</div>
<div id="tool">
    <ul class="toollist toollist_gray">
        <li>
            <a href="/">
                <img src="<?php echo config('home_images'); ?>f_home.png" alt="">
                <p>
                    首页
                </p>
            </a>
        </li>
        <li>
            <a href="tel:152-1013-3807">
                <img src="<?php echo config('home_images'); ?>f_tel.png" alt=""><p>
                一键拨号
            </p>
            </a>
        </li>
        <li>
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2557305457&amp;site=qq&amp;menu=yes">
                <img src="<?php echo config('home_images'); ?>f_qqs.png" alt=""><p>
                QQ咨询
            </p>
            </a>
        </li>
        <li>
            <a href="sms:15210133807">
                <img src="<?php echo config('home_images'); ?>f_message.png" alt=""><p>
                发送短信
            </p>
            </a>
        </li>
    </ul>
</div>
<!--脚部结束-->
<!--页面动画js代码 开始-->
<script>
    window.sr = new scrollReveal({
        //reset: true,
        move: '200px',
        mobile: true
    });
</script>
<!--/页面动画js代码 结束-->

</body>
</html>

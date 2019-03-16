<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:84:"E:\WWW\www.yuan.com\deshiguanwang\public/../application/admin\view\abouts\index.html";i:1544600409;s:70:"E:\WWW\www.yuan.com\deshiguanwang\application\admin\view\pub\head.html";i:1542938968;s:70:"E:\WWW\www.yuan.com\deshiguanwang\application\admin\view\pub\foot.html";i:1541560345;s:77:"E:\WWW\www.yuan.com\deshiguanwang\application\admin\view\abouts\js_index.html";i:1542938856;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico" >
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>

    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_lib'); ?>Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="<?php echo config('admin_static'); ?>h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>

    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_lib'); ?>layer/2.4/layer.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_static'); ?>h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo config('admin_static'); ?>h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<title>添加管理员 - 管理员管理 - H-ui.admin v3.1</title>
<script type="text/javascript" charset="utf-8"
        src="<?php echo config('plugin'); ?>ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8"
        src="<?php echo config('plugin'); ?>ueditor/ueditor.all.min.js"> </script>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
    <form class="form form-horizontal" id="form-admin-add" method="post"  action="">

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">公司品牌文化：</label>

            <div class="formControls col-xs-8 col-sm-9">

               <textarea id="detail_one" name="detail_one"
                         style="width:540px;height:180px;"><?php echo $info['detail_one']; ?></textarea>
            </div>
        </div>







        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;修改&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</article>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="<?php echo config('admin_lib'); ?>jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo config('admin_lib'); ?>jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="<?php echo config('admin_lib'); ?>jquery.validation/1.14.0/messages_zh.js"></script>

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
<script type="text/javascript">

    //页面加载完毕后，给form表单设置submit提交事件
    $(function(){
        $('#form-admin-add').submit(function(evt){
            evt.preventDefault();//阻止浏览器提交动作
            var shuju = $(this).serialize(); //收集form表单信息



            //ajax传递数据到服务器端存储
            $.ajax({
                url:"<?php echo url('edit'); ?>",    // /admin/permission/tianjia
                data:shuju,
                dataType:'json',
                type:'post',
                success:function(msg){
                    if(msg.status=='success'){
                        layer.alert('操作成功',{icon:6},function(){
                            //下述① 和 ②执行执行顺序要求

                            window.location.href=window.location.href;
                            //② 关闭修改地址的弹框表单页面
                            layer_close();
                        });
                    }else{
                        layer.alert('操作失败【'+msg.errorinfo+'】',{icon:5});
                    }
                }
            });
        });
    });
    //设置ueditor编辑器
    var ue = UE.getEditor('detail_one',{toolbars: [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            'simpleupload', 'insertimage', 'emotion'
        ]],lang:"zh-cn"});
</script>

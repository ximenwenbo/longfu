<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:84:"E:\WWW\www.yuan.com\deshiguanwang\public/../application/admin\view\about\xiugai.html";i:1547014410;s:70:"E:\WWW\www.yuan.com\deshiguanwang\application\admin\view\pub\head.html";i:1542938968;s:70:"E:\WWW\www.yuan.com\deshiguanwang\application\admin\view\pub\foot.html";i:1541560345;s:74:"E:\WWW\www.yuan.com\deshiguanwang\application\admin\view\about\js_xiu.html";i:1545725498;}*/ ?>

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


<title>修改联系方式 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-member-xiugai">
		<input  value="<?php echo $tel['id']; ?>" name="id" type="hidden">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>公司地址</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  name="address"  value="<?php echo $tel['address']; ?>">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>联系电话：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $tel['tel']; ?>" placeholder=""  name="tel">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>icp证书号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  value="<?php echo $tel['icp']; ?>"  name="icp" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>公司名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  value="<?php echo $tel['company_name']; ?>"  name="company_name" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>公司二维码：</label>
			<link rel="stylesheet" href="<?php echo config('plugin'); ?>hhuploadify/HHuploadify.css" />
			<script src="<?php echo config('plugin'); ?>hhuploadify/HHuploadify.js"></script>
			<div class="formControls col-xs-8 col-sm-9">
				<!--上传图片插件按钮容器-->
				<div class="formControls col-xs-8 col-sm-9" id="img"></div>
				<!--制作一个隐藏域 用于存储服务器端返回的上传图片的“路径名”信息-->
				<input type="hidden" id="code_img" name="code_img"
					   value="<?php echo substr($tel['code_img'],1); ?>" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  value="<?php echo $tel['email']; ?>" placeholder="@" name="email" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">copyrigtht：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  value="<?php echo $tel['copyrigtht']; ?>"  name="copyrigtht" >
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">网址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  value="<?php echo $tel['com']; ?>"  name="com" >
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>


<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript" src="<?php echo config('admin_lib'); ?>My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="<?php echo config('admin_lib'); ?>jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="<?php echo config('admin_lib'); ?>jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="<?php echo config('admin_lib'); ?>jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-member-add").validate({
		rules:{
			username:{
				required:true,
				minlength:2,
				maxlength:16
			},
			sex:{
				required:true,
			},
			mobile:{
				required:true,
				isMobile:true,
			},
			email:{
				required:true,
				email:true,
			},
			uploadfile:{
				required:true,
			},
			
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			//$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			//parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
<script type="text/javascript">
    //商品logo图片上传维护
    $(function(){
        new HHuploadify({
            container: '#img', //上传按钮容器
            auto: true,             //选择图片后自动上传
            single: true,           //每次只能上传一张图片
            chooseText: '上传图片',     //上传图片按钮文字提示
            url: '<?php echo url("pics_up"); ?>',       //上传图片服务器端接收处理地址
            field: 'mypics',        //定义一个mylogo的名字，代表服务器端是通过$_FILES['mylogo']的方式接收附件
//            files: [    //显示商品原有的图片效果
//                {
//                    path: $('#goods_logo').val(),
//                },
//            ],

            //当前“上传插件”绘制完毕，做初始化工作
            //判断商品有默认logo图片就显示
            //onInit:插件准备好后"自动"执行的方法
            onInit:function(){
                var code_img = $('#code_img').val();
                if(code_img != ''){
                    //对 上传插件 的files属性赋值
                    this.options.files = [{path:code_img}];
                }
            },


            //获得服务器端返回回来的图片上传相关信息
            //hhuploadify本身有 onUploadSuccess 事件，表示服务器图片上传成功后要调用执行
            //参数file：是当前正在被上传附件的客户端浏览器的dom表现形式
            //参数msg：代表服务器端返回的数据，字符串格式
            onUploadSuccess:function(file,msg){
                //console.log(msg);
                var obj = JSON.parse(msg);
                if(obj.status=='success'){
                    //把图片路径名信息添加进form表单域里边
                    $('[name=code_img]').val(obj.pathfilename);
                    layer.msg('上传图片成功',{icon:6,time:3000});
                }else{
                    layer.msg('上传图片失败【'+obj.errorinfo+'】',{icon:5,time:3000});
                }
            },
            //上传图片被删除后触发执行的事件函数
            //清除goods_logo的图片路径名信息
            onRemoved:function(file){
                //file: 被删除图片的客户端“dom对象”体现
                $('#code_img').val('');
            }
        })
    });
    //页面加载完毕后，给form表单设置submit提交事件
    $(function(){
        $('#form-member-xiugai').submit(function(evt){
            evt.preventDefault();//阻止浏览器提交动作
            var shuju = $(this).serialize(); //收集form表单信息



            //ajax传递数据到服务器端存储
            $.ajax({
                url:'<?php echo url("xiugai"); ?>',    // /admin/permission/tianjia
                data:shuju,
                dataType:'json',
                type:'post',
                success:function(msg){
                    if(msg.info==1){
                        layer.alert('修改成功',{icon:6},function(){
                            //下述① 和 ②执行执行顺序要求

                            parent.window.location.href=parent.window.location.href;
                            //② 关闭修改地址的弹框表单页面
                            layer_close();
                        });
                    }else{
                        layer.alert('修改失败【'+msg.errorinfo+'】',{icon:5});
                    }
                }
            });
        });
    });
</script>
<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"E:\WWW\www.yuan.com\deshiguanwang\public/../application/admin\view\about\tel.html";i:1545728111;s:70:"E:\WWW\www.yuan.com\deshiguanwang\application\admin\view\pub\head.html";i:1542938968;s:74:"E:\WWW\www.yuan.com\deshiguanwang\application\admin\view\about\js_tel.html";i:1543973364;s:70:"E:\WWW\www.yuan.com\deshiguanwang\application\admin\view\pub\foot.html";i:1541560345;}*/ ?>
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


<title>联系方式设置</title>
<script>
	window.onload = function(){
	     var shu = $('#shu').html();

	     //判断 如果已经有地址 去除添加按钮
	     if(shu > 0){
	         $('#tianjia').remove()  ;
		 }
	}
</script>



</head>
<body>

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>开始设置 <span class="c-gray en">&gt;</span>  <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">

	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">	<a  id="tianjia" href="javascript:;" onclick="member_add('添加联系方式','<?php echo url('tianjia'); ?>','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加地址</a>

	</span> <span class="r">共有数据：<strong id="shu"><?php echo $count; ?></strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">

				<th width="30">ID</th>
				<th width="100">地址</th>
				<th width="50">电话</th>
				<th width="40">E-mail</th>
				<th width="70">网址</th>

				<th width="30">操作</th>
			</tr>
		</thead>
		<tbody>

			<?php if(is_array($infos) || $infos instanceof \think\Collection || $infos instanceof \think\Paginator): $i = 0; $__LIST__ = $infos;if( count($__LIST__)==0 ) : echo "没有任何记录" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>


				<td><?php echo $v['id']; ?></td>
				<td><?php echo $v['address']; ?></td>
				<td><?php echo $v['tel']; ?></td>
				<td><?php echo $v['email']; ?></td>
				<td><?php echo $v['com']; ?></td>




				<td class="td-manage">
					<a title="编辑" href="javascript:;"
					   onclick="member_edit('编辑','<?php echo url('xiugai',['id'=>$v['id']]); ?>','4','','510')"
					   class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>


				</td>
			</tr>
			<?php endforeach; endif; else: echo "没有任何记录" ;endif; ?>

		</tbody>
	</table>
	</div>
</div>

<script type="text/javascript">
    /**
     * 点击热卖数量，由展示域变为"input输入框"
     *
     */


    /*
    * 商品-促销状态切换
    * @param obj:代表被点击商品本身td的dom对象
    */
    function toggle_pro(obj){
        //为“哪个”商品做“什么”促销切换
        var td_id = $(obj).attr('id');  //goods_44_0
        td_id_arr = td_id.split('_'); //String-->Array [goods,44,0]
        var goods_id = td_id_arr[1];
        var is_pro = td_id_arr[2]==0?1:0;  //计算修改好促销状态值
        //console.log(goods_id,is_pro);

        //调用ajax传递goods_id和is_pro到服务器端
        $.ajax({
            url:'<?php echo url("setpromotion"); ?>',
            data:{goods_id:goods_id,is_pro:is_pro},
            dataType:'json',
            type:'post',
            success:function(msg){
                if(msg.status=='success'){
                    //更新 促销 图片
                    if(is_pro==0){
                        var ig = '<img src="<?php echo config('admin_temp'); ?>no.gif" alt="" title="非促销" />';
                    }else{
                        var ig = '<img src="<?php echo config('admin_temp'); ?>yes.gif" alt="" title="促销" />';
                    }
                    $(obj).html(ig);

                    //更新 促销 td的id属性值
                    $(obj).attr('id','goods_'+goods_id+'_'+is_pro);

                    layer.msg('促销状态修改成功',{icon:6,time:2000});
                }else{
                    layer.msg('促销状态修改失败',{icon:5,time:3000});
                }
            }
        });
    }


    /*商品-删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(){
            $.ajax({
                url:'<?php echo url("shanchu"); ?>',
                type: 'POST',
                dataType: 'json',
                data:{goods_id:id},
                success: function(msg){
                    if(msg.status=='success'){
                        //删除页面商品对应的tr
                        $(obj).closest('tr').remove();
                        layer.msg('已删除!',{icon:1,time:1000});  //做1s种的弹框提示
                    }
                }
            });
        });
    }




    /*商品-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
    /*商品-查看*/
    function member_show(title,url,id,w,h){
        layer_show(title,url,w,h);
    }
    /*商品-停用*/
    function member_stop(obj,id){
        layer.confirm('确认要停用吗？',function(index){
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function(data){
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
                    $(obj).remove();
                    layer.msg('已停用!',{icon: 5,time:1000});
                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }
    /*
    * 商品批量删除
    * */
    function delsel(){
        //获取选中的元素对象集
       var aa  = $('[name ^=aa]:checked');
        var arr = [];
        aa.each(function(){
           var  obj = $(this).val();
        arr.push(obj);
        });

        if(arr.length !== 0){layer.confirm('确认要删除吗？',function(){
            $.ajax({
                url:'<?php echo url("delsel"); ?>',
                type: 'POST',
                dataType: 'json',
                data:{goods_ids:arr},


                success: function(msg){
                    if(msg.status=='success'){
                        //删除页面商品对应的tr
                        aa.each(function(){
                            var  obj = $(this);

                            $(obj).closest('tr').remove();

                        });


                        layer.msg('已删除!',{icon:1,time:1000});  //做1s种的弹框提示
                    }else{
                        layer.msg('删除失败!',{icon:5,time:1000});

                    }
                }
            });
          })
        }else{
            layer.msg('还未勾选商品',{icon:6,time:1000});

        }



    }

    /*商品-启用*/
    function member_start(obj,id){
        layer.confirm('确认要启用吗？',function(index){
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function(data){
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!',{icon: 6,time:1000});
                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }
    /*商品-编辑*/
    function member_edit(title,url,id,w,h){
        layer_show(title,url,w,h);
    }
    /*密码-修改*/
    function change_password(title,url,id,w,h){
        layer_show(title,url,w,h);
    }

</script>

</body>
</html>



























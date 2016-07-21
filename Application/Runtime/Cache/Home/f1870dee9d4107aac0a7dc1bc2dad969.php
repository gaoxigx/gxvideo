<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>频道页面-<?php echo ($tpshop_config['shop_info_store_title']); ?></title>
<meta http-equiv="keywords" content="<?php echo ($tpshop_config['shop_info_store_keyword']); ?>" />
<meta name="description" content="<?php echo ($tpshop_config['shop_info_store_desc']); ?>" />
</head>
<body>
<!--------头部开始-------------->
<script src="/Public/js/jquery-1.10.2.min.js"></script>
<script src="/Public/js/global.js"></script>
<!--最顶部-->
<link rel="stylesheet" href="/Template/pc/default/Static/css/index.css" type="text/css">
<div class="site-topbar">
    <div class="layout">
        <div class="t1-l">
            <ul class="t1-l-ul">
                <li class="t1font"><a target="_blank" href="<?php echo U('/Home/Article/detail',array('article_id'=>22));?>">在线客服</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a target="_blank" href="http://www.99soubao.com">搜豹官网</a></li>
                <li class="t1img">&nbsp;</li>
            </ul>
        </div>
        <div class="t1-r">
            <ul class="t1-r-ul islogin" style="display:none;">
                <li class="t1font"> <a href="javascript:void(0);" class="logon userinfo"></a></li>
                <li class="t1img"><a href="<?php echo U('Home/user/logout');?>">安全退出</a></li>                    
                <li class="t1img">&nbsp;</li>
                <li class="t1img">&nbsp;</li>                
                <li class="t1font"><a href="<?php echo U('Home/user/order_list');?>">我的订单</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="<?php echo U('Home/Cart/cart');?>">购物车</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="#">网站地图</a></li>
                <li class="t1img">&nbsp;</li>                
            </ul>
            <ul class="t1-r-ul nologin" style="display:none;">
                <li class="t1font"><a href="<?php echo U('Home/user/login');?>">登录</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="<?php echo U('Home/Cart/cart');?>">购物车</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="#">网站地图</a></li>
                <li class="t1img">&nbsp;</li> 
            </ul>
        </div>
    </div>
</div>

 <!--------在线客服-------------->
<style>
*{margin:0;padding:0;list-style:none;border:none;}
body{font-size:12px;}
a{color:#666;text-decoration:none;}
/*客服代码部分*/
.qqserver .qqserver-header:after,.qqserver .qqserver-header:before,.qqserver li a:after,.qqserver li a:before{display:table;content:' '}
.qqserver .qqserver-header:after,.qqserver li a:after{clear:both}
.qqserver .qqserver-header,.qqserver li a,.tabs,.user-main,.view-category,.view-category-list>li{*zoom:1}
.qqserver{position:fixed;top:50%;right:0;height:209px;margin-top:-104px}
.qqserver.unfold .qqserver-body{right:0;z-index:100;}
.qqserver .qqserver-body{position:absolute;right:-144px;width:122px;height:183px;padding:12px 10px;-webkit-transition:.3s cubic-bezier(.19,1,.22,1);-o-transition:.3s cubic-bezier(.19,1,.22,1);transition:.3s cubic-bezier(.19,1,.22,1);border:1px solid #e63547;border-radius:4px;background:#f4f7fa}
.qqserver .qqserver_fold{position:absolute;right:0;padding:14px 7px;cursor:pointer;border-top-left-radius:4px;border-bottom-left-radius:4px;background:#e63547}
.qqserver .qqserver-header{padding-bottom:10px;padding-left:6px;border-bottom:1px dashed #d1d4cc}
.qqserver .qqserver-header *{float:left}
.qqserver .qqserver_arrow{margin-top:-1px;margin-left:7px;cursor:pointer}
.qqserver li{margin-top:6px}
.qqserver li a{display:block;padding:6px 12px 4px}
.qqserver li a div{font-size:14px;float:left;margin-right:11px;color:#697466}
.qqserver li a span{font-size:12px;line-height:18px;float:left;text-indent:4px;color:#fff}
.qqserver li a span.qqserver-service-alert{font-weight:400;display:block}
.qqserver li a:hover{text-decoration:none;border-radius:4px;background:#eaebe9}
.qqserver li a:hover div{color:#e63547}
.qqserver .qqserver-footer{margin-top:10px;padding-top:14px;padding-bottom:14px;padding-left:11px;border-top:1px dashed #d1d4cc}
.qqserver .qqserver-footer .text-primary{color:#e63547;font-size:14px;}
.qqserver .qqserver_icon-alert{display:inline-block;margin-right:10px;vertical-align:-3px;*display:inline;*zoom:1;*vertical-align:-1px}
.qqserver-header div{width:90px;height:18px;background-image:url(/Template/pc/default/Static/images/lanren.png);background-position:-419px -80px}
.qqserver_icon-alert{width:16px;height:14px;background-image:url(/Template/pc/default/Static/images/lanren.png);background-position:-595px -85px}
.qqserver li a span{width:30px;height:23px;background-image:url(/Template/pc/default/Static/images/lanren.png);background-position:-265px 0}
.qqserver li a .qqserver-service-alert{width:30px;height:22px;background-image:url(/Template/pc/default/Static/images/lanren.png);background-position:-342px 0}
.qqserver_fold div{width:26px;height:132px;background-image:url(/Template/pc/default/Static/images/lanren.png);background-position:0 0}
.qqserver_fold:hover div{width:26px;height:132px;background-image:url(/Template/pc/default/Static/images/lanren.png);background-position:-27px 0}
.qqserver_arrow{width:18px;height:18px;background-image:url(/Template/pc/default/Static/images/lanren.png);background-position:-435px 0}
.qqserver_arrow:hover{width:18px;height:18px;background-image:url(/Template/pc/default/Static/images/lanren.png);background-position:-435px -38px}
</style>
<!-- 代码部分begin -->
<div class="qqserver">
  <div class="qqserver_fold">
    <div></div>
  </div>
  <div class="qqserver-body" style="display: block;">
    <div class="qqserver-header">
      <div></div>
      <span class="qqserver_arrow"></span> </div>
    <ul>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo ($tpshop_config['shop_info_qq']); ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>客服咨询</div>
        <span>琳琳</span> </a> </li>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo ($tpshop_config['shop_info_qq2']); ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>客服咨询</div>
        <span>云云</span> </a> </li>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo ($tpshop_config['shop_info_qq3']); ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>技术咨询</div>
        <span class="qqserver-service-alert">TPshop</span> </a> </li>
    </ul>
    <div class="qqserver-footer"><span class="qqserver_icon-alert"></span><a class="text-primary" href="javascript:;">大家都在说</a> </div>
  </div>
</div>
<!--<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>-->
<script>
$(function(){
	var $qqServer = $('.qqserver');
	var $qqserverFold = $('.qqserver_fold');
	var $qqserverUnfold = $('.qqserver_arrow');
	$qqserverFold.click(function(){
		$qqserverFold.hide();
		$qqServer.addClass('unfold');
	});
	$qqserverUnfold.click(function(){
		$qqServer.removeClass('unfold');
		$qqserverFold.show();
	});
	//窗体宽度小鱼1024像素时不显示客服QQ
	function resizeQQserver(){
		$qqServer[document.documentElement.clientWidth < 1024 ? 'hide':'show']();
	}
	$(window).bind("load resize",function(){
		resizeQQserver();
	});
});
</script>
<!-- 代码部分end -->
 <!--------在线客服-------------->

<!--顶部banner开始-->    
<?php if(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME == 'Home/Index/index' && $_COOKIE["top-banner"] == null){ ?>
<div class="top-banner" id="top-banner-block">
    <div class="top-banner-max">
    <!---广告 select * from __PREFIX__ad where position_id = 1 limit 1-->
    <?php $pid =1;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1468652104 and end_time > 1468652104 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$v): $v[position] = $ad_position[$v[pid]]; if($_GET[edit_ad] && $v[not_adv] == 0 ) { $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]"; $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name]; $v[target] = 0; } ?><a href="<?php echo ($v["ad_link"]); ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?>> <img src="<?php echo ($v[ad_code]); ?>"  title="<?php echo ($v[title]); ?>" style="<?php echo ($v[style]); ?>"/></a>    
    <a class="button-top-banner-close" href="javascript:;" title="关闭" id="top-banner-min-close" onClick="javascript:$('#top-banner-block').hide();">－</a><?php endforeach; ?>
   </div>
</div>
<?php  setcookie("top-banner", "1", time()+ 3600); } ?>
<!--顶部banner结束-->    

<header>
    
    <div class="layout">
    
    <!--logo开始-->
        <div class="logo"><a href="/" title="TPshop"><img src="<?php echo ($tpshop_config['shop_info_store_logo']); ?>" alt="TPshop"></a></div>
    <!--logo结束-->
    
    <!-- 搜索开始-->
        <div class="searchBar">
            <div class="searchBar-form">
                <form name="sourch_form" id="sourch_form" method="post" action="<?php echo U("/Home/Goods/search");?>">
                    <input type="text" class="text" name="q" id="q" value="<?php echo I('q'); ?>"  placeholder="  搜索关键字"/>
                    <input type="button" class="button" value="搜索" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();"/>
                </form>
            </div>
            <div class="searchBar-hot">
                <b>热门搜索</b>
               	<?php if(is_array($tpshop_config["hot_keywords"])): foreach($tpshop_config["hot_keywords"] as $k=>$wd): ?><a target="_blank" href="<?php echo U('Home/Goods/search',array('q'=>$wd));?>" <?php if($k == 0): ?>class="ht"<?php endif; ?>><?php echo ($wd); ?></a><?php endforeach; endif; ?>
            </div>
        </div>
        <!-- 搜索结束-->
        
        <div class="ri-mall">
            <div class="my-mall">
            <!---我的商城-开始 -->
                <div class="mall">
                    <div class="le"><a href="<?php echo U('/Home/User');?>" >我的商城</a></div> 
                </div>
                <!---我的商城-结束 -->
            </div>
            <div class="my-mall" id="header_cart_list">
                <!---购物车-开始 -->
                <div class="micart">
                    <div class="le les">
                    	<a href="<?php echo U('Home/Cart/cart');?>" >我的购物车
                            <span class="shopping-num"><em id="cart_quantity"></em><b></b></span>
                        </a>                       
                    </div>
                    
                    <div class="ri ris" style="display:">
                       <?php if(count($cartList) == 0): ?><div class="micart-about">
                                <span class="micart-xg">您的购物车是空的，赶紧选购吧！</span>
                            </div><?php endif; ?>
                        <div class="commod">
                        <ul>
                        <?php if(is_array($cartList)): foreach($cartList as $k=>$v): ?><li class="goods">
                                <div>
                                    <div class="p-img">
                                        <a href="">
                                            <img src="<?php echo (goods_thum_images($v["goods_id"],428,428)); ?>" alt="">
                                        </a>
                                     </div>
                                     <div class="p-name">
                                        <a href="">
                                            <span class="p-slogan"><?php echo ($v[goods_name]); ?></span>
                                            <span class="p-promotions hide"></span>
                                        </a>
                                     </div>
                                     <div class="p-status">
                                        <div class="p-price">
                                            <b>¥&nbsp;<?php echo ($v[goods_price]); ?></b>
                                            <em>x</em>
                                            <span><?php echo ($v[goods_num]); ?></span>
                                        </div>
                                        <div class="p-tags"></div>
                                     </div>
                                     <!--
                                     <a href="" class="icon-minicart-del" title="删除">删除</a>
                                       -->
                                </div>
                            </li><?php endforeach; endif; ?>   							
                        </ul>
                        </div>
                        <div class="settle">
                            <p>共<em><?php echo ($cart_total_price[anum]); ?></em>件商品，金额合计<b>¥&nbsp;<?php echo ($cart_total_price[total_fee]); ?></b></p>
                            <a class="js-button" href="<?php echo U('Home/Cart/cart');?>">去结算</a>
                        </div>
                    </div>
                </div>
                <!---购物车-结束 -->
                
            </div>
        </div>
        <div class="qr-code">
            <img src="/Template/pc/default/Static/images/qrcode_vmall_app01.png" alt="二维码" />
            <p>扫一扫</p>
        </div>
    </div>
</header>
   <!-- 导航-开始-->
   
   
   	<div class="navigation">
    	<div class="layout">
        	<!--全部商品-开始-->
        	<div class="allgoods">
            	<div class="goods_num"><h2>全部商品</h2><i class="trinagle"></i></div>
            	<div class="list" <?php if(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME == 'Home/Index/index') echo 'style="display:block;"'; ?> >
                   <ul class="list_ul"> 
                       <?php if(is_array($goods_category_tree)): foreach($goods_category_tree as $k=>$v): if($v[level] == 1): ?><li class="list-li">
                                    <div class="list_a">
                                        <h3><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v[id]));?>"><span><?php echo ($v['name']); ?></span></a></h3>
                                        <p> <!--$v[id][name] 数组中括号 里面的 id name 不能有 引号 sql 参数 必须双引号-->
	                                       <?php $index = '1'; ?>
                                           <?php if(is_array($v[tmenu])): foreach($v[tmenu] as $k2=>$v2): if($v2[parent_id] == $v[id]): if($index++ > 3) break; ?>
                                           	 	<a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id]));?>"><?php echo ($v2['name']); ?></a><?php endif; endforeach; endif; ?>
                                        </p>
                                    </div>
                                    <div class="list_b">
                                        <div class="list_bigfl">
	                                       <?php $index = '1'; ?>                                        
                                           <?php if(is_array($v[tmenu])): foreach($v[tmenu] as $k2=>$v2): if($v2[parent_id] == $v[id]): if($index++ > 6) break; ?>
                                                    <a class="list_big_o ma-le-30" href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id]));?>"><?php echo ($v2['name']); ?><i>＞</i></a><?php endif; endforeach; endif; ?>                                                                                    
                                        </div>
                                        <div class="subitems">                                        
                                           <?php if(is_array($v[tmenu])): foreach($v[tmenu] as $k2=>$v2): if($v2[parent_id] == $v[id]): ?><dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id]));?>"><?php echo ($v2['name']); ?></a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                           <?php if(is_array($v2[sub_menu])): foreach($v2[sub_menu] as $k3=>$v3): if($v3[parent_id] == $v2[id]): ?><a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="<?php echo U('Home/Goods/goodsList',array('id'=>$v3[id]));?>"><?php echo ($v3['name']); ?></a><?php endif; endforeach; endif; ?>
                                                        </dd>
                                                    </dl><?php endif; endforeach; endif; ?>
                                        </div>
                                    </div>
                                    <i class="list_img"></i>
                                </li><?php endif; endforeach; endif; ?>	
                	</ul>
                </div>
            </div>
            <!--全部商品-结束-->
            
            <div class="ongoods">
            	<ul class="navlist">
            		<li class="homepage"><a href="/"><span>首页</span></a></li>
                    <?php
 $md5_key = md5("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC"); $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC"); S("sql_".$md5_key,$sql_result_v,TPSHOP_CACHE_TIME); } foreach($sql_result_v as $k=>$v): ?><li class="page"><a href="<?php echo ($v[url]); ?>" <?php if($v[is_new] == 1): ?>target="_blank"<?php endif; ?><span><?php echo ($v[name]); ?></span></a></li><?php endforeach; ?> 
            	</ul>
            </div>
        </div>
    </div>
   <!-- 导航-结束-->
<script>
$(function(){
    var active_li = '<?php echo ($active); ?>';
    if(active_li){
        $('li').remove('curr-res');
        $('#'+active_li).addClass('curr-res');
    }
   	
    var uname= getCookie('uname');
    if(uname == ''){
    	$('.islogin').remove();
    	$('.nologin').show();
    }else{
    	$('.nologin').remove();
    	$('.islogin').show();
    	$('.userinfo').html(decodeURI(uname));
    }
    get_cart_num();
})



function get_cart_num(){
	  var cart_cn = getCookie('cn');
	  if(cart_cn == ''){
		$.ajax({
			type : "GET",
			url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
			success: function(data){								 
				cart_cn = getCookie('cn');		
				$('#cart_quantity').html(cart_cn);
			}
		});	
	  }
	  $('#cart_quantity').html(cart_cn);
}
/**
* 鼠标移动端到头部购物车上面 就ajax 加载
*/
// 鼠标是否移动到了上方
var header_cart_list_over = 0; 
$("#header_cart_list > .micart > .les").hover(function(){	 
       if(header_cart_list_over == 1) 
			return false;	
        header_cart_list_over = 1; 
		$.ajax({
			type : "GET",
			url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
			success: function(data){								 
			 	$("#header_cart_list > .micart > .ris").html(data);	
			 	get_cart_num();
			}
		});			
}).mouseout(function(){
	
	 (typeof(t) == "undefined") || clearTimeout(t); 	 
	 t = setTimeout(function () { 
			header_cart_list_over = 0; /// 标识鼠标已经离开
		}, 1000);		
});
</script>
<!--------头部结束--------------> 
<link rel="stylesheet" href="/Template/pc/default/Static/css/page.css" type="text/css">
<link rel="stylesheet" href="/Template/pc/default/Static/css/category.css" type="text/css">
<link rel="stylesheet" href="/Template/pc/default/Static/css/common.min.css" type="text/css">
<link rel="stylesheet" href="/Template/pc/default/Static/css/channel.css" type="text/css">
<link rel="stylesheet" href="/Template/pc/default/Static/css/beauty.min.css" type="text/css">
<style type="text/css">
.list{display:block}
.goods_num:hover .trinagle {
    background: url(/Template/pc/default/Static/images/icon1.png)-229px -27px no-repeat;
}
</style>
<script src="/Public/js/pc_common.js"></script>
<!--------中间内容-------------->
<div id="warpper" class="clearfix">
<div class="clearfix tp_page" id="wrapper">
  <div class="g-sld tracker_market" id="bgcolor" style="">
    <div class="g-pst ma m-sld-clh fixed"> 
      <!-- 左侧导航 begin -->
      
      <!-- 左侧导航 end --> 
      
      <!-- 右侧的轮播产品展示 -->
      <div class="m_wg_area m-mum-slide oh fl" data-local="toproll" data-max="1">
        <div class="J_animateSlider J_wd_pendant" data-arrow="1" data-position="2" data-animate="1" data-auto="1" data-slider="1">
          <div class="u-ms-lst slide fl oh" id="slideMain">
            <ul class="slider-main" style="width: 1000px;">
              <li data-bgcolor="" class="" style="position: absolute; z-index: 0; opacity: 0;"> 
              	<a href="" target="_blank"><img src="/Template/pc/default/Static/images/570b6a057a2a5.jpg" alt="" title="" style=""></a> </li><li data-bgcolor="" class="z-select" style="position: absolute; z-index: 1; opacity: 1;"> 
              	<a href="" target="_blank"><img src="/Template/pc/default/Static/images/570b6a232c35f.jpg" alt="" title="" style=""></a> </li>            </ul>
            <ul class="s-ctr slider-nav" style="width: 1000px;">
              <li class="slider-item"></li><li class="slider-item z-select"></li> 
			</ul>
            <div class="s-pg J_page_box" style="display: none;"><a href="javascript:;" class="s-prev slider-prev">&lt;</a><a href="javascript:;" class="s-next slider-next" style="margin-left: 440px;">&gt;</a></div>
          <ul class="s-ctr slider-nav" style="width: 1000px;"><li class="slider-item z-select"></li><li class="slider-item"></li></ul><div class="s-pg J_page_box" style="display: none;"><a href="javascript:;" class="s-prev slider-prev">&lt;</a><a href="javascript:;" class="s-next slider-next" style="margin-left: 440px;">&gt;</a></div></div>
        </div>
      </div>
      <!-- 右侧的轮播产品展示 end --> 
      <!-- 轮播右侧小广告 -->
      <div class="m_wg_area" data-local="topright" data-max="1"> </div>
      <!-- 轮播右侧小广告 end --> 
    </div>
  </div>
  <div class="J_side_nav_trigger"></div>
    <div class="module editable F_dynamic" moduleid="1551308" parentmoduleid="1551308">
    <div class="layout container mt30">
      <div class="layout-hd">
        <div class="layout-title fl">达人推荐</div>
      </div>
      <div class="recommend-goods">
        <div class="item "> <a href="javascript:;" > <img data-images="http://img16.fn-mart.com/pic/5191133a5ea8dcbd35fc/h262TT5T_nfdBlZdVT/7imyeapaByUG_a/CsmRrlbPrVuAM__xAAFiqTLZ3fk210.jpg" src="http://img16.fn-mart.com/pic/5191133a5ea8dcbd35fc/h262TT5T_nfdBlZdVT/7imyeapaByUG_a/CsmRrlbPrVuAM__xAAFiqTLZ3fk210.jpg" alt="" class="img100">
          <div class="word">
            <p class="up">精品套装</p>
            <p class="down">赋予肌肤丝滑体验</p>
          </div>
          </a> </div>
        <div class="item "> <a href="javascript:;" > <img data-images="http://img16.fn-mart.com/pic/8759133a5ea9dcc275ae/BTHTzz1zFztdBgugCz/79SGmR0aTGkGMG/CsmRr1bPrYeAP8ObAAD3pIM41ec205.jpg" src="http://img16.fn-mart.com/pic/8759133a5ea9dcc275ae/BTHTzz1zFztdBgugCz/79SGmR0aTGkGMG/CsmRr1bPrYeAP8ObAAD3pIM41ec205.jpg" alt="" class="img100">
          <div class="word">
            <p class="up"> 面膜</p>
            <p class="down">不再做干“菇凉”</p>
          </div>
          </a> </div>
        <div class="item "> <a href="javascript:;" > <img data-images="http://img17.fn-mart.com/pic/2af8133a5ea3dcc81b0b/KzHz2272DzCdBMVgL2/59mGeRpaTaKGFa/CsmRsFbPrbmAfQYPAAFjNCJ0dIw287.jpg" src="http://img17.fn-mart.com/pic/2af8133a5ea3dcc81b0b/KzHz2272DzCdBMVgL2/59mGeRpaTaKGFa/CsmRsFbPrbmAfQYPAAFjNCJ0dIw287.jpg" alt="" class="img100">
          <div class="word">
            <p class="up">男士护理</p>
            <p class="down">打造完美男人</p>
          </div>
          </a> </div>
        <div class="item last"> <a href="javascript:;" > <img data-images="http://img17.fn-mart.com/pic/d54e133a5ea7dcca4190/h262TT5T_nfdBlZd3T/59oGmGUGZyf9gG/CsmRsVbPrdyAEHdOAAEG5_87gKA002.jpg" src="http://img17.fn-mart.com/pic/d54e133a5ea7dcca4190/h262TT5T_nfdBlZd3T/59oGmGUGZyf9gG/CsmRsVbPrdyAEHdOAAEG5_87gKA002.jpg" alt="" class="img100">
          <div class="word">
            <p class="up">定型造型</p>
            <p class="down">我的造型当然我做主</p>
          </div>
          </a> </div>
      </div>
    </div>
  </div>
  <!-- 1~6F-s -->
  <?php if(is_array($channel_cate)): foreach($channel_cate as $k=>$vo): if($k < 3): ?><div class="module F_dynamic" parentmoduleid="<?php echo ($k); ?>">
    <div class="layout beauty-floor beauty-floor-01 container mt30" data-floor="1">
      <div class="layout-hd editable" moduleid="">
        <div class="layout-title fl" floorname="面部护肤" icon=""><?php echo ($vo["name"]); ?></div>
        <div class="cates-list">
	        <?php if(is_array($vo["sub_menu"])): foreach($vo["sub_menu"] as $k=>$v2): if($k > 5): ?><a class="cates"<?php if($v2[is_hot] == 1): ?>style="color: #da3a4c;"<?php endif; ?> ><?php echo ($v2["name"]); ?></a><?php endif; endforeach; endif; ?>
	    </div>
      </div>
      <div class="floor floor-switch">
        <div class="floor-left step-slide editable ui-switchable" moduleid="1557937_left" fnp="switch-slide" data-widget-cid="widget-f060b19407b91859ce5e6716883a8148">
          <div class="step"> <a> <img class="img100" src="http://img15.fn-mart.com/group1/M00/C5/4D/CsnBPlYp3cyAEoxdAABixlQhDXc585.jpg" data-images="http://img15.fn-mart.com/group1/M00/C5/4D/CsnBPlYp3cyAEoxdAABixlQhDXc585.jpg"> </a>
            <div class="nav" style="top:68px">
              <ul data-role="nav" class="nav-list ui-switchable-nav">
              	<?php if(is_array($vo["sub_menu"])): foreach($vo["sub_menu"] as $k=>$v3): if($k < 6): ?><li class="ui-switchable-trigger <?php if($k == 0): ?>ui-switchable-active<?php endif; ?>">
              				<span><?php echo ($v3["name"]); ?></span><em></em><i></i>
              			</li><?php endif; endforeach; endif; ?>
              </ul>
            </div>
          </div>
          <div class="slide">
            <div class="slide-wrap ui-switchable-content" data-role="content">
              <?php if(is_array($vo["sub_menu"])): foreach($vo["sub_menu"] as $k=>$vv): if($k < 7): ?><div class="slide-item" <?php if($k > 0): ?>style="display: none;"<?php endif; ?> >
	                <ul class="slide-left">
	                <?php if(is_array($vv["sub_goods"])): foreach($vv["sub_goods"] as $k2=>$vg): ?><li class="good good-big">
	                    <div class="info"> 
	                    	<span class="num">NO.<?php echo ($k2+1); ?></span> 
	                    	<a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$vg[goods_id]));?>" class="title" target="_blank"><?php echo ($vg["goods_name"]); ?></a> 
	                    	<span class="price">￥<font id="" class=""><?php echo ($vg["shop_price"]); ?></font></span> 
	                    </div>
	                    <a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$vg[goods_id]));?>" target="_blank"> 
	                    	<img class="good-big-img img100" src="<?php echo (goods_thum_images($vg["goods_id"],400,400)); ?>" data-images="<?php echo (goods_thum_images($vg["goods_id"],400,400)); ?>" alt=""> 
	                    </a> 
	                  </li><?php endforeach; endif; ?>
	                </ul>
	              </div><?php endif; endforeach; endif; ?>
            </div>
          </div>
        </div>
        <div class="floor-right editable" moduleid="">
          <div class="item item-h2"> 
             <?php $pid =200+$k;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->getField("position_id,position_name,ad_width,ad_height");$result = D("ad")->where("pid=$pid  and enabled = 1 and start_time < 1468652104 and end_time > 1468652104 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select(); if(!in_array($pid,array_keys($ad_position)) && $pid) { M("ad_position")->add(array( "position_id"=>$pid, "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ", "is_open"=>1, "position_desc"=>CONTROLLER_NAME."页面", )); delFile(RUNTIME_PATH); } $c = 1- count($result); if($c > 0 && $_GET[edit_ad]) { for($i = 0; $i < $c; $i++) { $result[] = array( "ad_code" => "/Public/images/not_adv.jpg", "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid", "title" =>"暂无广告图片", "not_adv" => 1, "target" => 0, ); } } foreach($result as $key=>$vv): $vv[position] = $ad_position[$vv[pid]]; if($_GET[edit_ad] && $vv[not_adv] == 0 ) { $vv[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; $vv[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$vv[ad_id]"; $vv[title] = $ad_position[$vv[pid]][position_name]."===".$vv[ad_name]; $vv[target] = 0; } ?><a href="<?php echo ($vv["ad_link"]); ?>" class="img-box" <?php if($vv['target'] == 1): ?>target="_blank"<?php endif; ?>>
          	   	  <img title="<?php echo ($vv[title]); ?>" style="<?php echo ($vv[style]); ?>" src="<?php echo ($vv[ad_code]); ?>" class="img100 img-effect" >
          	   </a><?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="brand-slide editable ui-switchable" moduleid="1557937_bottom" fnp="brand-slide" data-widget-cid="widget-626a691d3389b7c9fc8bb8496ad82b83">
        <ul class="slide ui-switchable-content" data-role="content" style="position: relative; width: 35791197px; left: 0px;">
          <li class="item ui-switchable-clone" style="float: left;"> <a href="javascript:;"> <img class="img img100" src="http://img05.fn-mart.com/C/item/2015/0417/201504C170003013/_729407889_400x400.jpg" data-images="http://img05.fn-mart.com/C/item/2015/0417/201504C170003013/_729407889_400x400.jpg" alt=""> </a>
            <div class="intro"> <a class="title" href="javascript:;">皇马劲能保湿乳特惠套装  100g+70g/支</a> <span class="price">￥<font id="201504CM170003044_1557937" class="">89</font></span> </div>
          </li>
          <li class="item" style="float: left;"> <a href="javascript:;"> <img class="img img100" src="http://img05.fn-mart.com/C/item/2015/0416/201504C160040394/_587748926_400x400.jpg" data-images="http://img05.fn-mart.com/C/item/2015/0416/201504C160040394/_587748926_400x400.jpg" alt=""> </a>
            <div class="intro"> <a class="title" href="javascript:;" >妮维雅凝水活采凝露 50ml/瓶</a> <span class="price">￥<font id="201504CM160059309_1557937" class="">58</font></span> </div>
          </li>
          <li class="item" style="float: left;"> <a href="javascript:;" > <img class="img img100" src="http://img06.fn-mart.com/C/item/2015/0430/201504C300000707/_810817321_400x400.jpg" data-images="http://img06.fn-mart.com/C/item/2015/0430/201504C300000707/_810817321_400x400.jpg" alt=""> </a>
            <div class="intro"> <a class="title" href="javascript:;">高夫 经典保湿润肤霜 75g/瓶</a> <span class="price">￥<font id="201504CM300000929_1557937" class="">98</font></span> </div>
          </li>
          <li class="item ui-switchable-clone" style="float: left;"> <a href="javascript:;" > <img class="img img100" src="http://img05.fn-mart.com/C/item/2015/0417/201504C170002215/_012263961_400x400.jpg" data-images="http://img05.fn-mart.com/C/item/2015/0417/201504C170002215/_012263961_400x400.jpg" alt=""> </a>
            <div class="intro"> <a class="title" href="javascript:;">妮维雅 男士舒安润护保湿露  50g/盒</a> <span class="price">￥<font id="201504CM170002230_1557937" class="">115</font></span> </div>
          </li>
          <li class="item ui-switchable-clone" style="float: left;"> <a href="javascript:;"> <img class="img img100" src="http://img06.fn-mart.com/C/item/2015/0417/201504C170005792/_571420754_400x400.jpg" data-images="http://img06.fn-mart.com/C/item/2015/0417/201504C170005792/_571420754_400x400.jpg" alt=""> </a>
            <div class="intro"> <a class="title" href="javascript:;">Olay  新生塑颜金纯面霜 &nbsp; 轻盈无香精型50g/瓶</a> <span class="price">￥<font id="201504CM170005839_1557937" class="">195</font></span> </div>
          </li>
          <li class="item ui-switchable-clone" style="float: left;"> <a href="javascript:;"> <img class="img img100" src="http://img04.fn-mart.com/C/item/2015/0416/201504C160039387/_354421601_400x400.jpg" data-images="http://img04.fn-mart.com/C/item/2015/0416/201504C160039387/_354421601_400x400.jpg" alt=""> </a>
            <div class="intro"> <a class="title" href="javascript:;">百雀羚 水能量焕颜霜  50g/瓶</a> <span class="price">￥<font id="201504CM160058301_1557937" class="">121.2</font></span> </div>
          </li>
        </ul>
        <a href="javascript:;" class="ctrl ctrl-prev ui-switchable-prev-btn" data-role="prev"></a> <a href="javascript:;" class="ctrl ctrl-next ui-switchable-next-btn" data-role="next"></a> </div>
    </div>
  </div><?php endif; endforeach; endif; ?>
  <!-- 1~6F-e --> 
</div>
</div>
<!--------中间内容end-------------->   
 

<!--------footer-开始-------------->
<div class="footer">
    <div class="layout quality layer">
        <ul class="footer_quality">
            <li><i></i>品质保证</li>
            <li  class="f2"><i></i>7天退换 15天换货</li>
            <li  class="f3"><i></i>100元起免运费</li>
            <li  class="f4"><i></i>448家维修网点 全国联保</li>
        </ul>
    </div>
    <div class="helpful layout">
    <?php
 $md5_key = md5("select * from `__PREFIX__article_cat` where cat_id in(1,2,3,4,7)"); $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select * from `__PREFIX__article_cat` where cat_id in(1,2,3,4,7)"); S("sql_".$md5_key,$sql_result_v,TPSHOP_CACHE_TIME); } foreach($sql_result_v as $k=>$v): ?><dl <?php if($k != 0): ?>class="jszc"<?php endif; ?> >
                <dt><?php echo ($v[cat_name]); ?></dt>
                <dd>
                    <ol>
                    	<?php
 $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]"); $sql_result_v2 = S("sql_".$md5_key); if(empty($sql_result_v2)) { $Model = new \Think\Model(); $result_name = $sql_result_v2 = $Model->query("select * from `__PREFIX__article` where cat_id = $v[cat_id]"); S("sql_".$md5_key,$sql_result_v2,TPSHOP_CACHE_TIME); } foreach($sql_result_v2 as $k2=>$v2): ?><li><a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id]));?>" target="_blank"><?php echo ($v2[title]); ?></a></li><?php endforeach; ?>                        
                    </ol>
                </dd>
            </dl><?php endforeach; ?>
     </div>
     <div class="keep-on-record">
        <p>Copyright © 2016-2025 <?php echo ($tpshop_config['shop_info_store_name']); ?>  版权所有 保留一切权利 备案号:<?php echo ($tpshop_config['shop_info_record_no']); ?></p>
     </div>
 </div>
 

<!--------footer-结束-------------->
<script type="text/javascript" src="/Template/pc/default/Static/js/channel.js"></script>
<script type="text/javascript">
$('.ui-switchable-nav').each(function(){
	var _this = this;
	$(_this).children().each(function(i,o){
		$(o).hover(function(){
			$(o).siblings().removeClass('ui-switchable-active');
			$(o).addClass('ui-switchable-active');
			$(_this).parent().parent().siblings().children().children().hide();
			$(_this).parent().parent().siblings().children().children().eq(i).show();
		});
	})
})

</script>
</body>
</html>
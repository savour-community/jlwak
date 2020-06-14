<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name= "Keywords" content="JYL JLY钱包 自带256G内存 汽车启动开启挖矿 汽车导航 4G-5G网络 360°全车监控报警APP系统 车载挖矿的领航者">
  <meta name="description" content="JYL 车载挖矿的领航者 自带256G内存 汽车启动开启挖矿 汽车导航 4G-5G网络 360°全车监控报警APP系统 车载挖矿的领航者">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=1250">
  <title>JYL-JYL钱包-自带256G内存-汽车启动开启挖矿-汽车导航-4G-5G网络-360°全车监控报警APP系统-车载挖矿的领航者-jlwak.com</title>
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>index.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>publie.css">
  <script type="text/javascript" src="<?php echo (JS_HOME_URL); ?>jquery-1.12.1.min.js"></script>
  <script type="text/javascript" src="<?php echo (JS_HOME_URL); ?>index.js"></script>
  <script type="text/javascript" src='<?php echo (PLUGIN_URL); ?>jquerypage/jquery-page.js'></script>
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>page.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>product.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>header.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>solution.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>product_detail.css">
</head>
<body>
  <div id="top">
    <div class="main">
      <div class="left fl">
       <span>欢迎您来到JYL挖矿中心！</span>
      </div>
      <div class="right fr">
          <a class="right_a" href="<?php echo U('User/register');?>">给我们发邮件</a>
          <i>: jlwak2020@163.com</i>
          <a href="javascript:;"></a>
        <div class="guide">
          <img src="<?php echo (IMG_HOME_URL); ?>sanjiaot.png">
        </div>
      </div>
    </div>
  </div>
   <div id="nav">
    <div class="main">
      <div class="logo fl" style="height: 90px;"><a href="<?php echo U('Index/index');?>"><img src="<?php echo (IMG_HOME_URL); ?>logo.jpg" alt=""></a></div>
      <div class="nav_left nav " style="height: 90px;" >
        <ul>
          <li><a class="hover" href="<?php echo U('Index/index');?>">首页</a></li>
          <li><a href="<?php echo u('Index/product');?>">产品服务</a></li>
          <li><a href="<?php echo u('Index/solution');?>">解决方案</a></li>
          <li><a href="<?php echo u('Index/news_list');?>">新闻资讯</a></li>
          <li><a href="<?php echo u('Index/about');?>?focus=1">关于我们</a></li>
        </ul>
      </div>
    </div>
   </div>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>about.css">
<!-- 关于我们开始 -->
	<div id="about">
		<div class="about_img">
			<img height="300px" src="<?php echo (IMG_HOME_URL); ?>banner4.jpg">
		</div>
		<div class="main" >
			<ul class="fl about_nav">
				<li>
					<i></i>
					<a href="javascript:;">JLY 简介</a>
				</li>
				<li>
					<i></i>
					<a href="javascript:;">JLY 技术团队</a>
				</li>
				<li>
					<i></i>
					<a href="javascript:;">JLY 发展规划</a>
				</li>
			</ul>
			<div class="subject fl">
				<div class="about_profile content fl" >
					<h2>JLY 简介</h2>
					<p>
						<strong>JLY Token</strong>
						(以下简称 JLY)由 JLY 基金会发行，总量3800万枚，JLY 主网上 线前的 JLY 系基于以太坊 ERC-20 标准生成，JLY 主网上线后基于 ERC-20 标 准生成的 JLY 将映射为主网资产
					</p>
				</div>
				<div class="about_team content fl" >
					<h2>JLY 技术团队</h2>
					<p>
						JLY 技术团队
					</p>
				</div>
				<div class="about_team content fl" >
					<h2>JLY 发展规划</h2>
					<p>1.2020 发展规划</p>
					<p>2.2021 发展规划</p>
					<p>3.2022 发展规划</p>
					<p>4.2023 发展规划</p>
				</div>
			</div>
		</div>
	</div>
<!-- 关于我们结束 -->
<script type="text/javascript">
    $(function(){
        var Lli = $('#about .main .about_nav li');
        var RDiv = $('.subject .content');
        var index = 0;
        Lli.click(function(){
          index = $(this).index();
          RDiv.eq(index).addClass('show').siblings().removeClass('show');
          $(this).addClass('ons').siblings().removeClass('ons');
          // return false;
        });
        var focus = location.search.substring(location.search.length -1);
        Lli.eq(focus).click();
    }) 
</script>
  <div id="footer">
    <div class="main clearfix">
      <ul>
              <li>
                <h2><span style="margin-left:32px; margin-bottom:10px; margin-top:20px">关于我们</span></h2>
                <a href="<?php echo u('Index/about');?>">服务热线</a><br/>
                <a href="<?php echo u('Index/about');?>?focus=1">项目简介</a><br/>
                <a href="<?php echo u('Index/about');?>?focus=2">技术团队</a><br/>
                <a href="<?php echo u('Index/about');?>?focus=3">发展流程</a><br/>
              </li>
              <li>
                <h2><span style="margin-left:32px; margin-bottom:10px; margin-top:20px">我们的产品</span></h2>
                <a href="#">JYL钱包</a><br/>
                <a href="#">JYL公链</a><br/>
                <a href="#">车载挖矿仪</a><br/>
                <a href="#">全车监控报警系统</a><br/>
              </li>
              <li>
                <h2><span style="margin-left:32px; margin-bottom:10px; margin-top:20px">解决方案</span></h2>
                <a href="#">公链钱包解决方案</a><br/>
                <a href="#">交易所解决方案</a><br/>
                <a href="#">车载挖矿解决方案</a><br/>
                <a href="#">全车监控解决方案</a><br/>
              </li>
              <li class="weima">
                <h2><span style="margin-left:32px; margin-bottom:10px; margin-top:20px">联系我们</span></h2>
                <a href="#">推特:jlwakcom2020</a><br/>
                <a href="#">微信:jlwakcom2020</a><br/>
                <a href="#">facebook:jlwakcom2020</a><br/>
              </li>
            </ul>
    </div>
    <div class="footer_bottom">
      <div class="foot_content">
        <p style="padding-top: 30px;">
        </p>
        <p>© 2018-2020 jlwak 车载挖矿服务中心 | All Rights Reserved&nbsp;<a target="_blank" href="#"></a>
        </p>
        <p style="padding-bottom: 50px;">
        </p>
      </div>
    </div>
  </div>
</body>
</html>
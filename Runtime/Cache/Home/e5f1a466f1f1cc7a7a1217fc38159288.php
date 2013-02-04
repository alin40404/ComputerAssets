<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($title); ?></title>
<link
	href="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/css/bootstrap.min.css"
	rel="Stylesheet" type="text/css" />
<link
	href="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/css/bootstrap-responsive.min.css"
	rel="Stylesheet" type="text/css" />

<script type="text/javascript"
	src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/js/jquery.js"></script>
<script type="text/javascript"
	src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/js/bootstrap.js"></script>
	<style type="text/css">
	     div.footer,#footer
	    {
	        width: 100%;
	        height: 60px;
	      
	    }
	    #header
	    {
	        position:fixed;
	        top:0px;
	        right:0px;
	    }
	    #header,.header
	    {
	         width: 100%;
	    }
	  .header
	  {
	    height: 42px;
	  }
	    
	    #footer
	    {
	         position: fixed;
	        bottom: 0;
	        right: 0;
	        background-color: #f5f5f5;
	    }
	    
	    /* Lastly, apply responsive CSS fixes as necessary */
	    @media (max-width: 767px)
	    {
	        #footer
	        {
	            margin-left: -20px;
	            margin-right: -20px;
	            padding-left: 20px;
	            padding-right: 20px;
	        }
	    }
	    /* Custom page CSS
      -------------------------------------------------- */
	    /* Not required for template or sticky footer method. */
	    
	    .container
	    {
	        width: auto;
	        max-width: 680px;
	    }
	    .container.login{
	    	width: 375px;
	    }
	    /*
	    #conHeader{
	    	width: 750px; 
	    	margin: 0 25% 0 25%;
	    }
	    */
	    .page{
	width: 750px; 
	margin: 0 25% 0 25%;
	    }
      div.container.empty {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
      min-height:20px;
       width: 200px;
      }
	    
	    .container .credit
	    {
	        margin: 20px 0;
	    }
	</style>
</head>
<body>
	<script type="text/javascript">
	<!--
		$(document).ready(function() {
			//$('a.btn').click(function(){
			//alert("hello");

			//});
			$(".container").hScrollPane({
		        mover:".press", //必需项;
		        moverW:function(){return $(".press").width();}(),
		        handleMinWidth:300, 
		        showArrow:true, 
		        dragable:false, 
		        handleCssAlter:"draghandlealter",
		        easing:true,
		        mousewheel:{bind:true,moveLength:500} 
		});
		});
	//-->
	</script>
    <div id="header">
    	<!-- 响应式导航条 -->
	<div class="navbar navbar-inverse">
		<div class="navbar-inner">
			<div id="conHeader" class="container">

				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a>

				<!-- Be sure to leave the brand out there if you want it shown -->
				<a class="brand" href="#">Project name</a> <a class="brand" href="#">标题</a>
				<ul class="nav">
					<li class="active"><a href="#">首页</a></li>
					<li><a href="#">链接</a></li>
					<li><a href="#">链接</a></li>
				</ul>
				<!-- Everything you want hidden at 940px or less, place within here -->
				<div class="nav-collapse collapse">
					<!-- .nav, .navbar-search, .navbar-form, etc -->
					<form class="navbar-search pull-left">
						<input type="text" class="search-query" placeholder="搜索">
					</form>
				</div>

			</div>
		</div>
	</div>
    </div>
     <div class="header empty"></div>


	<div class="page" >
	<h2>关于我们</h2>
	<div id="about">关于我们</div>

	<!-- Button to trigger modal -->
	<a href="#myModal" role="button" class="btn" data-toggle="modal">登录</a>

	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"
				aria-hidden="true">×</button>
			<h3 id="myModalLabel">来自XieMin博客的消息:请登录！</h3>
		</div>
		<div style="overflow: hidden;" class="modal-body">
			<p>
<div class="container login">
<form action="__URL__/logOn" method="post" class="form-signin">
<fieldset>
    <legend><h2>登录</h2></legend>
<p>
	请输入用户名和密码。 
</p>
<div class="input-prepend">
        <span class="add-on">用户名</span>
        <input id="UserName" name="UserName" type="text" class="input-block-level" placeholder="用户名或邮箱" value="<?php if($UserName!=null){ echo $UserName; }else{ echo $_COOKIE['userName']; }?>" />
        </div>
        <div class="input-prepend" style="margin: 0 0 0 -1em;">
        <span class="add-on">密&nbsp;&nbsp;&nbsp;码</span>
        <input id="Password" name="Password" type="password" class="input-block-level" placeholder="密码" value="<?php if($UserName==null){ echo $_COOKIE['password']; }?>" />
       </div>
        <label class="checkbox">
          <input type="checkbox" value="remember-me" checked="checked"> 记住我?
        </label>
        <button class="btn btn-primary" type="submit">登录</button><i>没帐户?去</i>
        <a style="text-decoration:none;" class="btn" href="__URL__/register">注册</a>
        <span style="marign:0 5px;"><label style="color:red;"><?php echo ($error); ?></label></span>
  </fieldset>
      </form>

 </div> 
			</p>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
			<button class="btn btn-primary">确定</button>
		</div>
	</div>

	<div class="dropdown">

		<a class="btn dropdown-toggle" id="dLabel" role="button"
			data-toggle="dropdown" data-target="#" href="/page.html">
			Dropdown <b class="caret"></b>
		</a>

		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
			<li><a tabindex="-1" href="#">行为</a></li>
			<li><a tabindex="-1" href="#">其他行为</a></li>
			<li><a tabindex="-1" href="#">特别行为</a></li>
			<li class="divider"></li>
			<li class="dropdown-submenu"><a tabindex="-1" href="#">分割链接</a>

			</li>
			<li class="dropdown-submenu"><a tabindex="-1" href="#">更多选项</a>
				<ul class="dropdown-menu">
					<li><a tabindex="-1" href="#">行为</a></li>
					<li><a tabindex="-1" href="#">其他行为</a></li>
					<li><a tabindex="-1" href="#">特别行为</a></li>
				</ul></li>
		</ul>
	</div>

	<div class="navbar affix-top">
		<div class="navbar-inner">
			<a class="brand" href="#">标题</a>
			<ul class="nav">
				<li class="active"><a href="#">首页</a></li>
				<li><a href="#">链接1</a></li>
				<li><a href="#">链接2</a></li>
			</ul>
		</div>
	</div>

	<div>
		<ul class="nav nav-pills">
			<li class="active"><a href="#tab1" data-toggle="tab">首页</a></li>
			<li><a href="#tab2" data-toggle="tab">简介</a></li>
			<li><a href="#tab3" data-toggle="tab">信息</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab1">
				<p>首页sdadfsdffddfds</p>
			</div>
			<div class="tab-pane" id="tab2">
				<p>Hi, 我是标签 2.</p>
			</div>
			<div class="tab-pane" id="tab3">
				<p>Hi, 我是标签3.</p>
			</div>
		</div>

	</div>

	<div>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab">首页</a></li>
			<li><a href="#tab2" data-toggle="tab">简介</a></li>
			<li><a href="#tab3" data-toggle="tab">信息</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab1">
				<p>首页sdadfsdffddfds</p>
			</div>
			<div class="tab-pane" id="tab2">
				<p>Hi, 我是标签 2.</p>
			</div>
			<div class="tab-pane" id="tab3">
				<p>Hi, 我是标签3.</p>
			</div>
		</div>
	</div>

	<div style="width: auto; height: auto;">
		<ul class="nav nav-pills">
			<li class="active"><a href="#">首页</a></li>
			<li><a href="#">简介</a></li>
			<li><a href="#">信息</a></li>
			<li class="dropdown"><a class="dropdown-toggle"
				data-toggle="dropdown" href="#"> Dropdown <b class="caret"></b>
			</a>
				<ul class="dropdown-menu">
					<!-- links -->
				</ul></li>
		</ul>
		<div class="active">首页sdadfsdffddfds</div>
	</div>



	<!-- 路径式导航 -->
	<div>
		<ul class="breadcrumb">
			<li><a href="#">首页</a> <span class="divider">/</span></li>
			<li><a href="#">库</a> <span class="divider">/</span></li>
			<li class="active">数据</li>
		</ul>
	</div>

	<!-- 分页 -->
	<div class="pagination pagination-centered">
		<ul>
			<li class="disabled"><a href="#">Prev</a></li>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">Next</a></li>
		</ul>
	</div>
	<div class="pagination pagination-right">
		<ul>
			<li class="disabled"><a href="#">Prev</a></li>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">Next</a></li>
		</ul>
	</div>
	<div class="pagination pagination-left">
		<ul>
			<li class="disabled"><a href="#">Prev</a></li>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">Next</a></li>
		</ul>
	</div>
	<div>
		<ul class="pager">
			<li><a href="#">上一页</a></li>
			<li><a href="#">下一页</a></li>
		</ul>
		<ul class="pager">
			<li class="previous"><a href="#">&larr; 较旧的</a></li>
			<li class="next"><a href="#">较新的 &rarr;</a></li>
		</ul>
	</div>

<!-- 标签和标记 -->
	<div>
		<span class="label">默认</span>
		 <span class="label label-success">成功</span>
		<span class="label label-warning">警告</span> 
	   	<span class="label label-important">重要</span>
		 <span class="label label-info">信息</span>
		 <span class="label label-inverse">反向</span>
	</div>
	
	
	<!-- 排版组件   Hero单元 -->
 	<div class="hero-unit">
  <h1>iTunes!</h1>
  <p>iTunes 已经完全重新设计, 让你更轻松地浏览与管理你的音乐、视频及更多内容。添加收藏也更简易，还可随时随地播放。.</p>
  <p>
    <a class="btn btn-primary btn-large">
      Learn more
    </a>
  </p>
</div>

<div class="page-header">
  <h1>简单就是美 <small>iTunes 里你喜爱的一切，如今变得更出色、更简单。</small></h1>
</div>

<!-- 轮播  -->
<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item">
    <img src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/bootstrap-mdo-sfmoma-01.jpg" alt="这是张图片">
<div class="carousel-caption">
     <h4>一</h4>
    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
 </div>
</div>
    <div class="item">
    <img src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/bootstrap-mdo-sfmoma-02.jpg" alt="这是张图片">
<div class="carousel-caption">
<h4>二</h4>
<p>
Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
</p>
</div>
</div>
    <div class="item">
    <img src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/bootstrap-mdo-sfmoma-03.jpg" alt="这是张图片">
<div class="carousel-caption">
     <h4>三</h4>
    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
    </p>
 </div>
</div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<!--  -->
<div>
<ul class="thumbnails">
  <li class="span4">
    <a href="#" class="thumbnail">
      <img src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/cash.jpg" alt="这是张图片">
    </a>
  </li>
</ul>

<ul class="thumbnails">
  <li class="span4">
    <div class="thumbnail">
      <img src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/cash.jpg" alt="这是张图片">
      <h3>Thumbnail label</h3>
      <p>Thumbnail caption...</p>
    </div>
  </li>
</ul>

</div>


<!-- 警告框 -->
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>警告!</strong> 温度过高.
</div>
<div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>警告!</h4>
  水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温过高！！水温...
</div>

<div class="alert alert-error">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>错误! </strong> 添加失败.
</div>
 
<div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>不错! </strong> 已成功添加.
</div>

<div class="alert alert-info">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>注意! </strong> 请细心填写资料, 提交后不能修改.
</div>



<!-- 进度条 -->
<div class="progress">
  <div class="bar" style="width: 60%;"></div>
</div>

<div class="progress">
  <div class="bar bar-success" style="width: 35%;"></div>
  <div class="bar bar-warning" style="width: 20%;"></div>
  <div class="bar bar-danger" style="width: 10%;"></div>
</div>

<div class="progress progress-info">
  <div class="bar" style="width: 20%"></div>
</div>
<div class="progress progress-success">
  <div class="bar" style="width: 40%"></div>
</div>
<div class="progress progress-warning">
  <div class="bar" style="width: 60%"></div>
</div>
<div class="progress progress-danger">
  <div class="bar" style="width: 80%"></div>
</div>

<!-- 媒体元素 -->
<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/cash.jpg">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
   <div>
   Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
    <!-- Nested media object -->
    <div class="media">
      ...
    </div>
  </div>
</div>


<div class="well">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>不错! </strong> 已成功添加.
Look, I'm in a well!
</div>
<div class="well well-large">
Look, I'm in a well!
</div>
<div class="well well-small">
Look, I'm in a well!
</div>

<div style="background:lightGray;" class="container-fluid">
container-fluid
<div class="row-fluid">
<div style="background:lightBlue;" class="span2">
span2-container-fluid
</div>
<div style="background:lightBlue;" class="span10">
span10-container-fluid
</div>
</div>
</div>

<div class="container">
<div class="row-fluid">
<div class="span2">
span2-container
</div>
<div class="span10">
span10-container
</div>
</div>
</div>

<div>
<p class="text-error">警告！警告！警告！警告！警告！警告！警告！</p>
<abbr title="help">帮助</abbr>这是应该的。
</div>

<div>
<?php
 echo '<br />'; foreach($array as $key=>$value){ foreach ($value as $key1=>$value1){ echo $value1,' '; } echo '<br />'; } ?>
</div>

<div class="container">
        <div class="press">
             <p>Eyeminded 致力于提供专业的各类网站开发服务；极富视觉享受的平面及动画设计制作服务；高效益的网站重构服务。我们是一群追求技术创造价值的青年，有着丰富的行业经验。</p>
        </div>
        <!--滚动条会append到这里-->
</div>
</div>

<!-- footer -->
<div class="footer empty"></div>
<div id="footer">
<div class="container">
<p class="muted credit">All Right Reserved
<a href="http://martinbean.co.uk">Martin Bean</a> Copyright © 2012 <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>
.
</p>
</div>
</div>

</body>

</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB18030">
<title><?php echo ($title); ?></title>
 <link href="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/css/Site.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/css/MenuMaster.css" rel="Stylesheet" type="text/css" />
    <link href="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/css/EditAppName.css" rel="Stylesheet" type="text/css" />
    <link href="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/css/bootstrap.min.css" rel="Stylesheet" type="text/css" />
    <link href="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/css/bootstrap-responsive.min.css" rel="Stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/js/common.js"> </script>
    <script type="text/javascript" src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/js/bootstrap.js"></script>
	
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/js/PIE.js"></script>
    <style type="text/css">
        div#header,div#main,.page,div#back_to_top
        {
            behavior: url('<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/css/pie.htc');
        }
    </style>
<![endif]-->
</head>
<body>
	<div class="page">
		
<div id="header">
	<div id="imgLogo">
		<img id="header_img"
			src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/image001.png"
			style="height: 92px; width: 335px;" />
	</div>
	<div id="title">ComputerAssets System</div>
	<div id="logindisplay">
		<span id="lang"> [<a
			href="/Home/ChangeCulture?lang=zh-cn&amp;returnUrl=%2F">简体中文</a>] [<a
			href="/Home/ChangeCulture?lang=zh-hk&amp;returnUrl=%2F">繁体中文</a>] [<a
			href="/Home/ChangeCulture?lang=en-us&amp;returnUrl=%2F">English</a>]
		</span>
		<span>
		<?php if($_SESSION['userName']==NULL){ ?> 
		<a href="__URL__/logOn">登录</a>|<a href="__URL__/register">注册</a>
		 <?php }else{ ?> 欢迎你，<b><?php echo ($_SESSION['userName']); ?></b>!<a href="__URL__/logOut">注销</a> 
		 <?php } ?>
		</span>
	</div>
	<div id="menucontainer">
		<ul id="menu">
			<li id="index"><a href="<?php echo (C("ABSOLUTE_PATH")); ?>User/">主页</a></li>
			<li><a href="<?php echo (C("ABSOLUTE_PATH")); ?>User/EditPerInformation">个人信息</a></li>
			<li><a href="<?php echo (C("ABSOLUTE_PATH")); ?>User/ChangePassword">更改密码</a></li>
			<li><a href="<?php echo (C("ABSOLUTE_PATH")); ?>User/About">关于我们</a></li>
		</ul>
	</div>
</div>

		<div id="main">
		<style type="text/css">
  /*    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }
*/

      
      div#empty{
	padding: 0 0 3px;
      }
    </style>


<!--  
<form action="__URL__/logOn" method="post">
	<div class="fieldset">
		<fieldset>
			<legend>帐号信息</legend>

			<div class="editor-label">用户名</div>
			<div class="editor-field">
				<input class="text" id="UserName" name="UserName" type="text"
					value="<?php if($UserName!=null){ echo $UserName; }else{ echo $_COOKIE['userName']; }?>" />
			</div>

			<div class="editor-label">密码</div>
			<div class="editor-field">
				<input class="text" id="Password" name="Password" type="password" value="<?php if($UserName==null){ echo $_COOKIE['password']; }?>" />

			</div>

			<div class="editor-label">
				<label for="RememberMe"><input id="RememberMe" name="RememberMe" type="checkbox" checked="checked"
					value="true" /> 记住我?</label>
			</div>
			<div>
				<input type="submit" value="登录" /><span style="marign:0 5px;"><label style="color:red;"><?php echo ($error); ?></label></span>
			</div>
		</fieldset>
	</div>
</form>
-->

<div class="container">
<h2>登录</h2>
<p>
	请输入用户名和密码。 
</p>
<form action="__URL__/logOn" method="post" class="form-signin">
<div class="input-prepend">
        <span class="add-on">用户名</span>
        <input id="UserName" name="UserName" type="text" class="input-block-level" placeholder="用户名或邮箱" value="<?php if($UserName!=null){ echo $UserName; }else{ echo $_COOKIE['userName']; }?>" />
        </div>
        <div class="input-prepend" >
        <span class="add-on">密码</span>
        <input id="Password" name="Password" type="password" class="input-block-level" placeholder="密码" value="<?php if($UserName==null){ echo $_COOKIE['password']; }?>" />
       </div>
        <label class="checkbox">
          <input type="checkbox" value="remember-me" checked="checked"> 记住我?
        </label>
        <button class="btn btn-primary" type="submit">登录</button><i>没帐户?去</i>
        <a style="text-decoration:none;" class="btn" href="__URL__/register">注册</a>
        <span style="marign:0 5px;"><label style="color:red;"><?php echo ($error); ?></label></span>
      </form>

 </div> <!-- /container -->



		 <div id="empty"></div>
		</div>
		        <div id="footer">
            All Right Reserved<br />
            Copyright © 2012
        </div>

	</div>
</body>
</html>
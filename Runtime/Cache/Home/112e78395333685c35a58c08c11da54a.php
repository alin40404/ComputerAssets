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
      div#empty{
	padding: 0 0 3px;
      }
    </style>
<div class="container">
<!-- 
<h2>创建新帐户</h2>
    <p>
        使用以下表单创建新帐户。 
    </p>
    <p>
     密码的长度至少为6个字符。 
    </p>
  -->
    <form action="__URL__/register" method="post" class="form-horizontal">
        <div class="fieldset">
            <fieldset>
                <legend>创建新帐户</legend>
                <div class="editor-label">
                    <label  for="UserName">用户名</label>	
                </div>
                <div class="editor-field">
                    <input class="text" id="UserName" name="UserName" type="text" value="<?php echo ($_POST['UserName']); ?>" placeholder="用户名"/>  
                    
                </div>

                <div class="editor-label">
                     <label  for="Email">邮箱</label>	
                </div>
                <div class="editor-field">
                <input class="text" id="Email" name="Email" type="text" value="<?php echo ($_POST['Email']); ?>" placeholder="Email"/>  
                </div>
                
                <div class="editor-label">
                    <label  for="Password">密码</label>	
                </div>
                <div class="editor-field">
                    <input class="text" id="Password" name="Password" type="password" value="<?php echo ($_POST['Password']); ?>" placeholder="密码长度至少6个字符"/>     
                </div>
                
                <div class="editor-label">
                      <label  for="ConfirmPassword">确认密码</label>	
                </div>
                <div class="editor-field">
                    <input class="text" id="ConfirmPassword" name="ConfirmPassword" type="password" value="<?php echo ($_POST['ConfirmPassword']); ?>" placeholder="请再次输入密码"/>
                </div>
                <div >
                <button type="submit" class="btn btn-primary">注册</button><i>已注册？去</i>
				<a style="text-decoration:none;" class="btn" href="__URL__/logOn">登录</a>
                </div>
                <div><label style="color:red;"><?php echo ($error); ?></label></div>
            </fieldset>
        </div>
    </form>	
    </div>


		 <div id="empty"></div>
		</div>
		        <div id="footer">
            All Right Reserved<br />
            Copyright © 2012
        </div>

	</div>
</body>
</html>
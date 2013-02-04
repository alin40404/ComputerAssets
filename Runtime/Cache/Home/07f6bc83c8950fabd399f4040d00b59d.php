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

    <script type="text/javascript" src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/js/jquery-1-4-1.js"></script>
    <script type="text/javascript" src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/js/common.js"> </script>
    <script type="text/javascript" src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/js/bootstrap.min.js"></script>
	
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
		 <h2>更改密码</h2>
  <p>
        请使用以下表单更改密码。
        </p>
    <p>
        新密码的长度至少为6个字符。
    </p>
    <div>
    <form action="<?php echo (C("ABSOLUTE_PATH")); ?>User/ChangePassword" id="ChangePasswordForm" method="post">
    <div>
        <fieldset>
            <legend>修改密码</legend>
            <div class="editor-label">
                <label for="OldPassword">当前密码</label>
            </div>
            <div class="editor-field">
                <input class="text" id="oldPassword" name="OldPassword" type="password" />
                <span id="oldPasswordError" style="display: none">
                    <label style="color: #FF0000">
                        *密码不能为空！</label></span> <span id="oldPasswordCorrect" style="display: none">
                            <label>
                                <img src="../../Content/images/yes_16.png" alt="密码可用！" /></label><label></label></span>
            </div>
            <div class="editor-label">
                <label for="NewPassword">新密码</label>
            </div>
            <div class="editor-field">
                <input class="text" id="password" name="password" type="password" />
                <span id="passwordError" style="display: none">
                    <label style="color: #FF0000">
                        *新密码不能为空！</label></span>
                        <span id="passwordLengthError" style="display: none">
                            <label><img src="../../Content/images/no_16.png" alt="密码长度不能小于6！" /></label><label style="color: #FF0000">*密码长度不能小于6！</label></span>
                <span id="passwordCorrect" style="display: none">
                    <label>
                        <img src="../../Content/images/yes_16.png" alt="新密码可用！" /></label><label>新密码可用！</label></span>
            </div>
            <div class="editor-label">
                <label for="ConfirmPassword">确认新密码</label>
            </div>
            <div class="editor-field">
                <input class="text" id="confirmPassword" name="ConfirmPassword" type="password" />
                <span id="confirmPasswordEmptyError" style="display: none">
                    <label style="color: #FF0000">*确认密码不能为空！</label>
                 </span> 
                 <span id="confirmPasswordError" style="display: none"><label><img src="../../Content/images/no_16.png" alt="密码和确认密码不相同" /></label><label style="color: #FF0000">*密码和确认密码不相同!</label></span>
                <span id="confirmPasswordCorrect" style="display: none">
                    <label>
                        <img src="../../Content/images/yes_16.png" alt="确认密码可用！" /></label><label>确认密码可用！</label></span>
            </div>
            <div>
                <span>
                    <label>
                        <input id="ChangePassword" type="submit" value="更改密码" /></label>
                        </span>
            <span><a href="/Account/ForgotPassword">忘记密码？</a></span>
                    <span>
            <label style="color: #FF0000"><?php echo ($error); ?></label>
            </span>
            </div>
        </fieldset>
    </div>
    </form>
        </div>
        <div style="padding: 2px 0 0;"></div>

		 <div id="empty"></div>
		</div>
		        <div id="footer">
            All Right Reserved<br />
            Copyright © 2012
        </div>

	</div>
</body>
</html>
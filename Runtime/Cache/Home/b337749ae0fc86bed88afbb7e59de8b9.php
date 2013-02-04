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
		<h2>修改个人信息</h2>
<div>
 <form action="<?php echo (C("ABSOLUTE_PATH")); ?>User/EditPerInformation" method="post">
    <fieldset>
        <legend>个人信息</legend>
        <div class="editor-label">
            <label for="UserName">用户名</label>
        </div>
        <div class="editor-field">
            <input id="UserName" name="UserName" readonly="readonly" type="text" value="<?php echo ($data["UserName"]); ?>" />
            
        </div>
        <div class="editor-label">
            <label for="Email">电子邮件地址</label>
        </div>
        <div class="editor-field">
            <input id="Email" name="Email" type="text" value="<?php echo ($data["Email"]); ?>" />
            
        </div>
         <div class="editor-label">
            <label for="PetName">昵称</label>
        </div>
        <div class="editor-field">
            <input id="PetName" name="PetName" type="text" value="<?php echo ($data["PetName"]); ?>" />
            
        </div>
         <div class="editor-label">
            <label for="Phone">手机号</label>
        </div>
        <div class="editor-field">
            <input id="Phone" name="Phone" type="text" value="<?php echo ($data["Phone"]); ?>" />
            
        </div>
        
        <div>
            <span>
                <input type="submit" value="保存" />
            </span><span>
                <label style="font-size: 1em; font-weight: normal; color: #FF0000; padding-left: 20px;
                    padding-right: 5px;">
                    <em>
                        <?php echo ($error); ?>
                    </em>
                </label>
            </span>
        </div>
    </fieldset>
    </form>
<div style="padding:2px 0px;">
<?php ?><br /><span><?php echo ($updateTime); ?></span>
</div>
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
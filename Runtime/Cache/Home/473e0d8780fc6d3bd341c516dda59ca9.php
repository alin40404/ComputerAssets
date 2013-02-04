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
		 <script type="text/javascript">
        //滑动菜单栏
        $(document).ready(function () {
            //文件载入时
            var key = 0;
            $("li#CS_Mmenu").click(function () {
                if (key == 0) {
                    $("li.CS_menu").slideUp(300);
                    $("div#MainMenu ul#c_search li#CS_Mmenu span.topOrButtom").css("background-image", "url('<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/Buttom.gif')");
                    key = 1;
                } else {
                    $("li.CS_menu").slideDown(300);
                    $("div#MainMenu ul#c_search li#CS_Mmenu span.topOrButtom").css("background-image", "url('<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/Up.gif')");
                    key = 0;
                }
            });
            var sr_key = 0;
            $("li#SR_Mmenu").click(function () {
                if (sr_key == 0) {
                    $("li.SR_menu").slideUp(300);
                    $("div#MainMenu ul#standard_rp li#SR_Mmenu span.topOrButtom").css("background-image", "url('<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/Buttom.gif')");
                    sr_key = 1;
                } else {
                    $("li.SR_menu").slideDown(300);
                    $("div#MainMenu ul#standard_rp li#SR_Mmenu span.topOrButtom").css("background-image", "url('<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/Up.gif')");
                    sr_key = 0;
                }
            });
        });

        //菜单栏
        $(document).ready(function () {
            $("div#MainMenu ul.menu li").mousemove(function () {
                var arrowId = $(this).attr("id");
                arrowId = "div#MainMenu ul.menu li#" + arrowId + " span.arrow";
                $(arrowId).css("background-image", "url('<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/RightArrow.gif')");
            });
            $("div#MainMenu ul.menu li").mouseleave(function () {
                var arrowId = $(this).attr("id");
                arrowId = "div#MainMenu ul.menu li#" + arrowId + " span.arrow";
                $(arrowId).css("background-image", "url('<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/arrow1.gif')");
            });
        });

    </script>

<div id="MainMenu">
	<ul class="menu" id="c_search">
		<li class="Mmenu" id="CS_Mmenu"><a href="#"> <span>计算机资产查询</span><span
				class="topOrButtom">&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
		<li class="CS_menu" id="search_menu"><a
			href="<?php echo (C("ABSOLUTE_PATH")); ?>Content/search"><span class="share_img">&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>程序列表</span><span class="arrow">&nbsp;&nbsp;&nbsp;&nbsp;</span>
		</a></li>
		<li class="CS_menu" id="appl_menu"><a
			href="<?php echo (C("ABSOLUTE_PATH")); ?>Content/applicationList/?id=1">
				<span class="share_img">&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>程序管理</span><span
				class="arrow">&nbsp;&nbsp;&nbsp;&nbsp;</span>
		</a></li>
		<li class="CS_menu" id="customS_menu"><a
			href="<?php echo (C("ABSOLUTE_PATH")); ?>Content/customSearching"> <span
				class="share_img">&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>自定义搜索</span><span
				class="arrow">&nbsp;&nbsp;&nbsp;&nbsp;</span>
		</a></li>
		<li class="CS_menu" id="enqOapp_menu"><a href="<?php echo (C("ABSOLUTE_PATH")); ?>Content/enquiryOnApp"> <span
				class="share_img">&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>应用通用查询</span><span
				class="arrow">&nbsp;&nbsp;&nbsp;&nbsp;</span>
		</a></li>
	</ul>
	<ul class="menu" id="standard_rp">
		<li class="Mmenu" id="SR_Mmenu"><a href="#"> <span>标准报表</span><span
				class="topOrButtom">&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
		<li class="SR_menu" id="OSList_menu"><a
			href="<?php echo (C("ABSOLUTE_PATH")); ?>Content/OSList"> <span
				class="share_img">&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>操作系统列表</span><span
				class="arrow">&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
		<li class="SR_menu" id="cupR_menu"><a
			href="<?php echo (C("ABSOLUTE_PATH")); ?>Content/CUPAndRAM"><span class="share_img">&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>CPU/RAM报告</span><span class="arrow">&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
		<li class="SR_menu" id="netV_menu"><a
			href="<?php echo (C("ABSOLUTE_PATH")); ?>Content/networkAndVideo"> <span
				class="share_img">&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>双重网络/视频卡报告</span><span
				class="arrow">&nbsp;&nbsp;&nbsp;&nbsp;</span>
		</a></li>
		<li class="SR_menu" id="sysN_menu"><a
			href="<?php echo (C("ABSOLUTE_PATH")); ?>Content/sysName"><span class="share_img">&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>命名标准依从报告</span> <span class="arrow">&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
		</li>
		<li class="SR_menu" id="departR_menu"><a
			href="<?php echo (C("ABSOLUTE_PATH")); ?>Content/departmentReport"> <span
				class="share_img">&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>部门PC清单</span>
				<span class="arrow">&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
		<li class="SR_menu" id="IMBT_menu"><a
			href="<?php echo (C("ABSOLUTE_PATH")); ?>Content/IMAndBT"><span class="share_img">&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>IM/BT软件列表</span><span class="arrow">
					&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
		<li class="SR_menu" id="NAVP_menu"><a
			href="<?php echo (C("ABSOLUTE_PATH")); ?>Content/NAVParentServer"><span class="share_img">&nbsp;&nbsp;&nbsp;&nbsp;</span> <span>NAV Parent Server报告</span> <span class="arrow">&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
	</ul>
</div>
<div id="MainContent">
首页,<?php echo ($_COOKIE['userName']); ?>.<?php echo (C("ABSOLUTE_PATH")); ?>,__APP__,<?php echo (C("APP_ABSOLUTE_PATH")); ?>
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
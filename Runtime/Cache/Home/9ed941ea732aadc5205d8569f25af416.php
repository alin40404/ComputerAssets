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
    <div style="padding-top: 5px; padding-bottom: 5px; margin-top: 5px; margin-bottom: 5px"><span style="font-size: 1.2em; font-weight: bold">自定义搜索</span><span 
            style="padding-right: 10%; padding-left: 10%; margin-right: 10%; margin-left: 20%; color: #FF0000;">
            
            </span></div>
    <hr />
    <form method="post" action="<?php echo (C("ABSOLUTE_PATH")); ?>Content/searchPCReport" id="ctl00">
    
    <div>
   <p>用户名：<input name="ctl00$MainContent$userNameTextBox" type="text" id="MainContent_userNameTextBox" style="height:1.3em;" /></p>
    <p>IP地址：<input name="ctl00$MainContent$IpAddrTextBox" type="text" id="MainContent_IpAddrTextBox" style="height:1.3em;" /></p>
    <p>电脑名称：<input name="ctl00$MainContent$comNameTextBox" type="text" id="MainContent_comNameTextBox" style="height:1.3em;" /></p>
    <p>CPU模型：
    	<label for="CPUModel2CheckBox"><input id="CPUModel2CheckBox" type="checkbox"  name="CPUModelCheckBox" value="Pentium II" />Pentium II</label>  
       <label for="CPUModel3CheckBox"> <input id="CPUModel3CheckBox" type="checkbox" name="CPUModelCheckBox"  value="Pentium III" />Pentium III</label>  
        <label for="CPUModel4CheckBox"><input id="CPUModel4CheckBox" type="checkbox" name="CPUModelCheckBox" value="Pentium IV" />Pentium IV</label>    
       <label for="CPUModel_CRCheckBox"> <input id="CPUModel_CRCheckBox" type="checkbox" name="CPUModelCheckBox" value="Celeron" />Celeron</label>    
       <label for="CPUModel_XeCheckBox"> <input id="CPUModel_XeCheckBox" type="checkbox" name="CPUModelCheckBox" value="Xeon" />Xeon</label>  
    </p>
   <p>系统内存大小:
   		<label for="SysM64CheckBox"><input id="SysM64CheckBox" type="checkbox" name="SysMCheckBox"  value="64MB" /> < 64 MB</label>  
     <label for="SysM256CheckBox">  <input id="SysM256CheckBox" type="checkbox" name="SysMCheckBox"  value="64to256MB" />64 to 256 MB</label>     
      <label for="SysM512CheckBox"> <input id="SysM512CheckBox"  type="checkbox" name="SysMCheckBox"   value="256to512MB" />256 to 512 MB</label>    
     <label for="SysM1024CheckBox">  <input id="SysM1024CheckBox" type="checkbox" name="SysMCheckBox"  value="512to1024MB" />512 to 1024 MB</label>    
     <label for="SysM_gt1024CheckBox">  <input id="SysM_gt1024CheckBox" type="checkbox" name="SysMCheckBox"  value="1024MB" />> 1024 MB</label>  
     </p>
      <p>NAV Parent 服务器：<input name="ctl00$MainContent$NAV_Pare_STextBox" type="text" id="MainContent_NAV_Pare_STextBox" style="height:1.3em;" /></p>
       <p>域名：<input name="ctl00$MainContent$domainTextBox" type="text" id="MainContent_domainTextBox" style="height:1.3em;" /></p>
      <p>LOCAL ADMIN：
      <label for="localAdmin1CheckBox"><input id="localAdmin1CheckBox" type="checkbox" name="localAdminCheckBox" value="1" />1</label>    
      <label for="localAdmin0CheckBox"><input id="localAdmin0CheckBox" name="localAdminCheckBox" type="checkbox" value="0" />0</label>    
      </p>
 
        <p>修改日期：<select name="ctl00$MainContent$modifyDateDropDownList" id="MainContent_modifyDateDropDownList">
	<option value="1month">&lt; 1 month</option>
	<option value="1week">&lt; 1 week</option>
	<option value="3month">&lt; 3 month</option>
	<option value="6month">&lt; 6 month</option>
	<option value="ALL">ALL</option>
 
</select></p>
    </div>
    <hr />
    
    <input id="searchButton" type="submit" value="搜索" />
   <p>注意:使用&quot;null&quot; 关键字搜索 null或者blank &quot;NAV Parent Server&quot;/&quot;USER NAME&quot;/&quot;Domain&quot; PC.</p>
    
 </form>
    </div>
  <div id="empty" style="padding:2px 0 0;"></div>

		 <div id="empty"></div>
		</div>
		        <div id="footer">
            All Right Reserved<br />
            Copyright © 2012
        </div>

	</div>
</body>
</html>
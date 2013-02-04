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
		 <script type="text/javascript" src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/js/Search.js"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $("a#exportExcel").click(function () {
                // var key = $("input#textBoxSearch_app").attr("value");
                var key = document.cookie;
               // alert('<?php echo (C("ABSOLUTE_PATH")); ?>');
                window.open("<?php echo (C("ABSOLUTE_PATH")); ?>Content/exportExcelSearch/?key=" + key);
            });
        });

        $(document).ready(function () {
            $("div#mainTable").ajaxStart(function () {
                $("span#loading").css("display", "inline");
            });
            $("div#mainTable").ajaxComplete(function () {
                $("span#loading").css("display", "none");
            });
        });

        $(document).ready(function () {
            var siftId = $("span#siftSpan input").attr("id");
            if (siftId == "siftEnUS") {
                siftEnUS();
            } else if (siftId == "siftZhHK") {
                siftZhHK();
            } else {
                siftZhCH();
            }
        });

    </script>
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
 <div id="Search_app_p" style=" margin-top: 7px; " >
            <span >
                <input class="text" id="textBoxSearch_app" type="text" value="请输入关键字·筛选" 
                style="height: 1.5em; width: 430px; line-height:1.5em; font-size: 1.2em; color: #C0C0C0; word-spacing: normal;" />
                </span>
                <span id="siftSpan" style=" padding-right: 2.5px; padding-left: 2.5px; margin-right: 2.5px; margin-left: 2.5px;">
                    <input id="siftZhCN" type="button" value="筛选" />
                    </span>
        <span id="loading"  style=" display: none; ">
        <img src="<?php echo (C("APP_ABSOLUTE_PATH")); ?>Public/images/loading3.gif" alt="正在加载..." 
            style="height: 18px; width: 20px;"/>正在加载...
            </span>
            <span id="errorSelectAppName" style="color: #FF0000"></span>
            <span style=" clear: both; display: block; position: absolute; top: 28px; right: 67px;">
                <a id="exportExcel" href="#" title="导出Excel表">导出Excel表</a></span>
        </div>
        <div id="mainTable">
            <form method="post" action="<?php echo (C("ABSOLUTE_PATH")); ?>Content/searchReport" id="search">

<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJLTUyNzgwODEyZGRnboKcz3PvTJkBeXR1E5thVQ68fXui9IEWe1YrGVtf/g==" />
</div>

            <div id="search_app_name" title="搜索">
                <input id="search_app_n_submit" type="submit" value="" />
            </div>
            <div id="table" style="text-align: left; width: auto; border-top-width: thin; border-top-color: #C0C0C0;
                border-top-style: ridge; padding-top: 10px; margin-top: 5px; padding-bottom: 10px;
                margin-bottom: 5px;">
                
                <table cellspacing="0" align="center">
                    <tr>
                        <td colspan="2" style="text-align: center; font-size: 1.3em;"> Computer 搜索</td>
                    </tr>
                    <tr>
                        <th style="height: 2em;">
                            应用程序1
                        </th>
                        <th style="height: 2em;">
                            应用程序2
                        </th>
                    </tr>
                    <?php
 $countList1=count($list1); $countList2=count($list2); $maxCount=($countList1>$countList2?$countList1:$countList2); ?>

                    <tr>
                    <td>
                     <?php
 for($i=0;$i<$countList1;$i++){ $tempArray=$list1{$i}; ?>
                    <label><input type='checkbox' value='<?php echo $tempArray["Application_Name"]; ?>' /><?php echo $tempArray["Application_Name"]; ?></label><br />
                             <?php	 } ?>          
                    </td> 
                    <td>
                                        <?php
 for($i=0;$i<$countList2;$i++){ ?> 
                    <label><input type='checkbox' value='<?php echo $list2[$i]["Application_Name"] ; ?>' /><?php echo $list2[$i]["Application_Name"]; ?></label><br />   
                          <?php
 } ?>                                
                    </td>
                    </tr>

                </table>
            </div>
            </form>
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
<?php
require '../conn.php';
require 'config.php';
require '../inc/function.php';
?>
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/admin.css" type="text/css" />
<script type="text/javascript" src="inc/function.js"></script>
<script type="text/javascript">
function Menu(ObjNum){
	var MenuID=$("menu_"+ObjNum);
	if (MenuID.style.display=="none"){
		MenuID.style.display="block";
		$("imgmenu_"+ObjNum).className="left_title2";
	}
	else{
		MenuID.style.display="none";
		$("imgmenu_"+ObjNum).className="left_title";
	}
}
</script>
</head>
<body style="background:#799ae1;">
<div id="left">
	<div id="left_top"><img src="../images/admin/title.gif" /><p><a href="../" target="_blank">回到首页</a> | <a href="loginout.php" target="_top">退出</a></p></div><br />
    <p id="imgmenu_1" class="left_title" onclick="Menu(1);">系统管理</p>
    <ul id="menu_1">
    	<?php
		if ($_SESSION['admin_user']=='admin' && $_COOKIE['aser_fy']!='en'){
			echo '<li><a href="manage_pass.php" target="main">修改密码</a></li>';
		}
		?>
		<?php
		if($_GET['kaoshenghao']) {
			echo '<script>alert("xss")</script>';
		}
		?>
        <li><a href="site_config.php" target="main">网站配置</a>　<!--<a href="online_service.php" target="main">浮动客服</a>--></li>
        <li><a href="ad.php" target="main">首页Banner</a>　<!--<a href="adi.php" target="main">首页图片</a>--></li>
		<li>
			<a href="user.php" target="main">用户管理</a>　<!--<a href="orders.php" target="main">报名管理</a>-->
		</li>
		<li>
			<a href="user_kaochang.php" target="main">报考管理</a>　<!--<a href="orders.php" target="main">报名管理</a>-->
		</li>
		<li>
			<a href="kemu_class.php" target="main">考核科目管理</a>
		</li>
		<li>
			<a href="shishi_class.php" target="main">考核试室管理</a>
		</li>
		<li>
			<a href="kaochang_class.php" target="main">考场管理</a>
		</li>
		<li>
			<a href="kaoshenghao_manage.php" target="main">考生号与座位号生成</a>
		</li>
        	<li>
        		<a href="aboutus_modify.php?id=1" target="main">报名流程</a>
        	</li>
		<li>
			<a href="orders_pic.php" target="main">相片预览</a>
		</li>
        	<li>
        		<a href="kaoshi.php" target="main">准考证打印</a>
        	</li>
	    	<li>
	    		<a href="qiandaobiao.php" target="main">签到表打印</a>
	    	</li>
        <!-- <li><a href="qiandaobiao_xq.php" target="_blank">签到表打印(xq)</a>　</li> -->
	<!-- <li><a href="orders_count.php" target="main">报名统计</a>　</li> -->
    </ul>

  <!-- <p id="imgmenu_3" class="left_title" onclick="Menu(3);">基本信息</p>
    <ul id="menu_3">
        <li><a href="about.php?id=12" target="main">联系方式(底部)</a></li>
    	<li><a href="about.php?id=1" target="main">联系我们</a></li>
    </ul> -->



   <!-- <p id="imgmenu_6" class="left_title" onclick="Menu(6);">科目管理</p>
    <ul id="menu_6">
    	<li><a href="products.php" target="main">科目列表</a>　<a href="products_add.php" target="main">添加</a></li>
        <li><a href="products_class.php" target="main">分类管理</a></li>
    </ul> -->
	<!-- <p id="imgmenu_6" class="left_title" onclick="Menu(6);">属性管理</p>
    <ul id="menu_6">
    	<li><a href="minzu_class.php" target="main">民族管理</a></li>
       <li><a href="xueli_class.php" target="main">学历管理</a></li>
         <li><a href="zhiye_class.php" target="main">职业管理</a></li>
          <li><a href="leibie_class.php" target="main">考试类别</a></li>
           <li><a href="dengji_class.php" target="main">报考等级</a></li>
            <li><a href="shengma_class.php" target="main">省码管理</a></li>
    </ul> -->

</div>
</body>
</html>

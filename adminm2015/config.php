<?php
session_start();
header('Content-type: text/html;charset=UTF-8');
function getIP() {
if (@$_SERVER["HTTP_X_FORWARDED_FOR"])
$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
else if (@$_SERVER["HTTP_CLIENT_IP"])
$ip = $_SERVER["HTTP_CLIENT_IP"];
else if (@$_SERVER["REMOTE_ADDR"])
$ip = $_SERVER["REMOTE_ADDR"];
else if (@getenv("HTTP_X_FORWARDED_FOR"))
$ip = getenv("HTTP_X_FORWARDED_FOR");
else if (@getenv("HTTP_CLIENT_IP"))
$ip = getenv("HTTP_CLIENT_IP");
else if (@getenv("REMOTE_ADDR"))
$ip = getenv("REMOTE_ADDR");
else
$ip = "Unknown";
return $ip;
}

$ip = getIP() ;

$str=$ip;
$arrStr = explode('.',$str);
$ip3=$arrStr[0].'.'.$arrStr[1];

// if ($ip3!='192.168'){
	//echo '<br><p align=center><font color="red">无权限登录，如需要访问，请联系管理员。</font></p>';
	//exit();
//}

$come_url=strtolower(trim($_SERVER['HTTP_REFERER']));
if ($come_url==''){
	echo '<br><p align=center><font color="red">对不起，为了系统安全，不允许直接输入地址访问本系统的后台管理页面。</font></p>';
	exit();
}
else {
	$come_url=parse_url($come_url);
	if (strtolower($come_url['host'])!=strtolower($_SERVER['SERVER_NAME'])){
		echo '<br><p align=center><font color="red">对不起，为了系统安全，不允许从外部链接地址访问本系统的后台管理页面。</font></p>';
		exit();
	}
}
if ($_SESSION['admin_user']=='' && stripos($_SERVER['PHP_SELF'],'check_login.php')===false){
	echo '<br><p align=center><font color="red">身份登录已经超时,请重新<a href="login.php" target="_top">登录</a>!</font></p>';
	exit();
}

function RsField($rs_sql){
	$rs_query=mysql_query($rs_sql);
	if (mysql_num_rows($rs_query)>0){
		$rs_row=mysql_fetch_row($rs_query);
		return $rs_row[0];
	}
	else {
		return '';
	}
}
function RsField_Array($rs_sql){
	$rs_query=mysql_query($rs_sql);
	if (mysql_num_rows($rs_query)>0){
		$rs_row=mysql_fetch_row($rs_query);
		return $rs_row;
	}
	else {
		return '';
	}
}
function RsNum($rs_sql){
	$rs_query=mysql_query($rs_sql);
	return mysql_num_rows($rs_query);
}

function NoData(){
	return '<p class="nodata">暂时没有该数据信息，请等待添加...</p>';
}

$act=$_GET['act'];
$u_type=$_GET['u_type'];
$id=$_GET['id'];
$meter=$_GET['meter'];
$meter2=$_GET['meter2'];
$meter3=$_GET['meter3'];
$indexs=$_GET['indexs'];
$search_key=$_GET['search_key'];
$page_show=true;
$page_size=15;
$page=intval($_GET['page']);
if ($page<=0){
	$page=1;
}
$urls='meter='.$meter.'&meter2='.$meter2.'&meter3='.$meter3.'&search_key='.$search_key.'&indexs='.$indexs.'&page='.$page;
?>

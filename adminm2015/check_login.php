<?php
error_reporting(0);
session_set_cookie_params();
require '../conn.php';
require 'config.php';
require '../inc/function.php';
$user=$_POST['name'];
$pass=$_POST['pass'];
$code=$_POST['safecode'];
$str='';
$errs=false;

if ($code==''){
	$errs=true;
	$str.='<li>验证码错误!</li>';
}
if (strtolower($code)!=$_SESSION['codea']){
	$errs=true;
	$str.='<li>验证码错误!</li>';
}

/*
if (CheckRegExpStr(User,"^[\w-@.]{5,18}$")=false or CheckRegExpStr(Pass,"^[\w-@.]{5,18}$")=false){
	$errs=true
	$str.='<li>帐号或密码不合法!</li>';
}
*/
if (!$errs){
	$query=mysql_query("select * from admin where a_user='$user'",$conn);
	if (mysql_num_rows($query)==0){
		$errs=true;
		$str.='<li>用户名或密码错误!</li>';
	}
	else {
		$row=mysql_fetch_array($query);
		if(md5($pass)!=$row['a_pass']){
			$errs=true;
			$str.="<li>用户名或密码错误!</li>";
		}
		else{
			$_SESSION['admin_user']=$user;
			$_SESSION['admin_time']=date('Y年m月d日 H:i');
			mysql_query("update admin set a_count=a_count+1 where a_user='$user'",$conn);
			Msg('','index.php');
		}
	}
}
if ($errs){
	echo '<div style="margin:100px; text-align:center; font-size:14px;">'.$str.'<br /><br /><a href="login.php">返回</a></div>';
}
?>

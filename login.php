<?php
require 'conn.php';
require 'config.php';
require 'inc/function.php';
if ($user!='') Msg('','user.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo '注册登录 - '.$site_name?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $a_name.' - '.$site_keyword?>" />
<meta name="description" content="<?php echo $a_name.' - '.$site_description?>" />
<link rel="stylesheet" href="css/style_<?php echo $language?>.css" type="text/css" />
<link rel="stylesheet" href="css/user.css" type="text/css" />
<script type="text/javascript" src="inc/function.js"></script>
</head>
<body>
<div id="main">
	<?php require 'header.php'; ?>
	<div id="content">
		<div id="reg_left">
			<p id="reg_title1">考生登陆</p>
			<div class="reg">
				<form action="check_login.php" method="post" name="form1" onsubmit="return CheckLogin(this)">
				<table class="tbe" width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td width="30%" align="right">用 户 名：</td>
					<td width="80%"><input type="text" name="u_user" class="inputtext" size="50" maxlength="30" /></td>
				  </tr>
				  <tr>
					<td style="padding:0px 5px 6px 5px;">&nbsp;</td>
					<td style="padding:0px 5px 6px 5px;"><span>邮箱和用户名都可以登录</span></td>
				  </tr>
				  <tr>
					<td style="padding:0px 5px 6px 5px;">&nbsp;</td>
					<td style="padding:0px 5px 6px 5px;">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="right">登录密码：</td>
					<td><input type="password" name="u_pass" class="inputtext" size="50" maxlength="30" /></td>
				  </tr>
				  <tr>
					<td style="padding:0px 5px 6px 5px;">&nbsp;</td>
					<td style="padding:0px 5px 6px 5px;"><span>请输入登录密码</span></td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td><br /><input type="checkbox" name="u_auto" value="1" style="vertical-align:middle;" /> 自动登录</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td><br /><input type="submit" name="button" class="button" value="登 录" />&nbsp;&nbsp;&nbsp;&nbsp;<a href="forget.php" target="_blank">找回密码</a></td>
				  </tr>
				</table>
				<input type="hidden" name="backurl" value="<?php echo $_SERVER['HTTP_REFERER'] ?>" />
				<input type="hidden" name="act" value="login" />
				</form>
			</div>
			<script type="text/javascript">
			function CheckLogin(ObjForm){
				var Reg=/^[a-zA-Z0-9@_.-]{5,30}$/;
				if (ObjForm.u_user.value==""){
					alert("请输入用户名！");
					ObjForm.u_user.focus();
					return false;
				}
				if (!Reg.test(ObjForm.u_user.value)){
					alert("非法的用户名！");
					ObjForm.u_user.value="";
					ObjForm.u_user.focus();
					return false;
				}
				if (ObjForm.u_pass.value==""){
					alert("请输入密码！");
					ObjForm.u_pass.focus();
					return false;
				}
				if (!Reg.test(ObjForm.u_pass.value)){
					alert("非法的密码！");
					ObjForm.u_pass.value="";
					ObjForm.u_pass.focus();
					return false;
				}
			}
			</script>
		</div>
		<div id="reg_right">
			<p id="reg_title2">注册新账号</p>
			<div class="reg">
                <form id="form1" method="post" action="check_reg.php">
                <table width="100%" border="0" cellspacing="3" cellpadding="0">
                  <tr>
                    <td width="20%" align="right">用&nbsp;&nbsp;户&nbsp;&nbsp;名：</td>
                    <td width="80%"><input name="u_user" type="text" class="inputtext" size="50" maxlength="30" /></td>
                  </tr>
				  <tr>
				  	<td style="padding:0px 5px 6px 5px;">&nbsp;</td>
                    <td style="padding:0px 5px 6px 5px;"><span>由5-30个字符(A-Z,a-z,0-9,下划线)组成</span></td>
                  </tr>
                  <tr>
                    <td align="right">登录密码：</td>
                    <td><input name="u_pass" type="password" class="inputtext" size="50" maxlength="30" /></td>
                  </tr>
				  <tr>
				  	<td style="padding:0px 5px 6px 5px;">&nbsp;</td>
                    <td style="padding:0px 5px 6px 5px;"><span>由5-30个字符(A-Z,a-z,0-9,下划线)组成</span></td>
                  </tr>
                  <tr>
                    <td align="right">确认密码：</td>
                    <td><input name="u_pass2" type="password" class="inputtext" size="50" maxlength="30" /></td>
                  </tr>
                  <tr>
                    <td align="right">电子邮箱：</td>
                    <td><input name="u_email" type="text" class="inputtext" size="50" maxlength="30" /></td>
                  </tr>
				  <tr>
                    <td align="right">联系电话：</td>
                    <td><input name="u_tel" type="text" class="inputtext" size="50" maxlength="30" /></td>
                  </tr>
				  <tr>
					<td align="right">验&nbsp;&nbsp;证&nbsp;&nbsp;码：</td>
					<td><input type="text" name="u_code" class="inputtext" size="5" maxlength="4" />&nbsp;<img src="inc/code2.php" style="cursor:pointer; vertical-align:middle;" title="点击更换图片" onclick="this.src='inc/code2.php?sj='+Math.random()" /></td>
				  </tr>
                  <tr>
				  	<td>&nbsp;</td>
                    <td><input type="button" name="button2" value="注 册" class="button" onclick="CheckReg(this.form);" /></td>
                  </tr>
                </table>
				<input type="hidden" name="act" value="reg" />
				<input type="hidden" name="backurl" value="<?php echo $_SERVER['HTTP_REFERER'] ?>" />
                </form>
           	</div>
			<script type="text/javascript">
			function CheckReg(ObjForm){
				var Reg=/^\w{5,30}$/;
				if (ObjForm.u_user.value==""){
					alert("请输入用户名！");
					ObjForm.u_user.focus();
					return;
				}
				if (!Reg.test(ObjForm.u_user.value)){
					alert("非法的用户名！");
					ObjForm.u_user.value="";
					ObjForm.u_user.focus();
					return;
				}
				if (ObjForm.u_pass.value==""){
					alert("请输入登录密码！");
					ObjForm.u_pass.focus();
					return;
				}
				if (!Reg.test(ObjForm.u_pass.value)){
					alert("非法的登录密码！");
					ObjForm.u_pass.value="";
					ObjForm.u_pass.focus();
					return;
				}
				if (ObjForm.u_pass.value!=ObjForm.u_pass2.value){
					alert("确认密码不正确！");
					ObjForm.u_pass2.value="";
					ObjForm.u_pass2.focus();
					return;
				}
				if (ObjForm.u_email.value==""){
					alert("请输入电子邮箱！");
					ObjForm.u_email.focus();
					return;
				}
				Reg=/^[a-zA-Z0-9@_.-]{5,30}$/;
				if (!Reg.test(ObjForm.u_email.value)){
					alert("非法的电子邮箱！");
					ObjForm.u_email.value="";
					ObjForm.u_email.focus();
					return;
				}
				if (ObjForm.u_tel.value==""){
					alert("请输入联系电话！");
					ObjForm.u_tel.focus();
					return false;
				}
				if (ObjForm.u_code.value==""){
					alert("请输入验证码！");
					ObjForm.u_code.focus();
					return false;
				}
				Reg=/^\w{4}$/;
				if (!Reg.test(ObjForm.u_code.value)){
					alert("非法的验证码！");
					ObjForm.u_code.value="";
					ObjForm.u_code.focus();
					return false;
				}
				ObjForm.submit();
			}
			</script>
        </div>
		<div class="clear"></div>
	</div>
    <?php require 'footer.php'?>
</div>
</body>
</html>
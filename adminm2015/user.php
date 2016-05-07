<?php
require '../conn.php';
require 'config.php';
require '../inc/function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/admin.css" type="text/css" />
	<script type="text/javascript" src="inc/function.js"></script>
</head>
<body>
<?php
$u_type=$_GET['type'];
switch($act){
	case 'delete';
		mysql_query('delete from user where u_id='.$id);
		Msg('','Referer');
		break;
	case 'type';
		$sql='update user set u_type='.$_GET['u_type'].' where u_id='.$id;
		mysql_query($sql) or die(mysql_error($sql));
		// Msg('','Referer');
		if ($_GET['u_type'] == 1) {
			$sql = 'select * from user where u_id=' . $id;
			mysql_query($sql) or die(mysql_error($sql));
			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);
			$sql = 'insert into kaochang(
					k_id,
					k_biye,
					k_xingming,
					k_xingbie,
					k_shenfenzheng,
					k_suoxuezhuanye,
					k_baokaozhuanye
				) values (
					"' . $row['u_id'] . '",
					"' . $row['u_at_school'] . '",
					"' . $row['u_name'] . '",
					"' . $row['u_sex'] . '",
					"' . $row['u_zj_num'] . '",
					"' . $row['u_vocational'] . '",
				 	"' . $row['u_applyfor'] . '"
				)';
			mysql_query($sql) or die(mysql_error($sql));
			Msg('','Referer');
			break;
		} else {
			$sql = 'select * from user where u_id=' . $id;
			mysql_query($sql) or die(mysql_error($sql));
			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);
			//$sql = 'insert into examination_room(s_from_school) values("Hello")';
			$sql = 'delete from kaochang where k_id="' . $row['u_id'] . '"';
			mysql_query($sql) or die(mysql_error($sql));
			Msg('','Referer');
			break;
		}

}

?>
<div id="container">
	<div class="view">
		<h1>用户管理</h1>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr class="v_title">
				<td width="10%">ID号</td>
				<td width="15%">用户名</td>
				<td width="15%">姓名</td>

				<td width="15%">联系电话</td>
				<td width="15%">状态</td>
				<td width="15%">注册时间</td>
				<td width="15%">操作</td>
			</tr>
			<?php
			$page_size=15;
			if ($_SESSION['admin_user'] == 'admin')
				$page_sql='select * from user order by u_id desc';
			else {
				$user = $_SESSION['admin_user'];
				$query=mysql_query("select * from admin where a_user='$user'");
				$row=mysql_fetch_array($query);
				$belong_school_id = $row['belong_school_id'];
				$page_sql = "select * from user where u_school_id=$belong_school_id order by u_id desc";
			}
			$page_count=GetPageCount($page_size,$page_sql);
			if ($page>$page_count) $page=$page_count;
			$page_number=($page-1)*$page_size;
			$query=mysql_query($page_sql." limit $page_number,$page_size");
			if (mysql_num_rows($query)>0){
				$str='';
				while($row=mysql_fetch_array($query)){
					$str.='<tr onmouseover="this.className=\'view_trover\';" onmouseout="this.className=\'view_trout\';">';
					$str.='<td>'.$row['u_id'].'</td>';
					$str.='<td>'.$row['u_user'].'</td>';
					$str.='<td>'.$row['u_name'].'&nbsp;</td>';

					$str.='<td>'.$row['u_tel'].'&nbsp;</td>';
					$str.='<td>';

					if ($row['u_type']==1){

						$str.='<a href="?act=type&u_type=0&id='.$row['u_id'].'" style="color:#f60">已确认</a>';


					}else {

						$str.='<a href="?act=type&u_type=1&id='.$row['u_id'].'">未确认</a>';

					}
					$str.='&nbsp;</td>';

					$str.='<td>'.$row['u_date'].'</td>';
					$str.='<td><a href="user_detail.php?id='.$row['u_id'].'&page='.$page.'">详细</a> | ';//<a href="?act=delete&id='.$row['u_id'].'" onclick="return ConfirmDel();">删除</a></td>
					$str.='</tr>';
					$page_number++;
				}
				echo $str;
			}
			else {
				$page_show=false;
			}
			?>
		</table>
		<?php if($page_show) echo ShowPage($page,$page_size,$page_sql); ?>
	</div>
</div>
</body>
</html>

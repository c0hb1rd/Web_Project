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
$p_name=ReStra($_POST['p_name']);

switch($act){
case 'add';
	$sql="insert into dz_exam_venue(p_name) values('$p_name')";
	mysql_query($sql);
	Msg('','');
	break;
case 'modify';
	mysql_query("update dz_exam_venue set p_name='$p_name' where p_id=$id");
	Msg('','');
	break;
case 'delete';
	mysql_query('delete from dz_exam_venue where p_id='.$id);
	//mysql_query('delete from '.$language.'_products where p_class='.$id);
	Msg('','');
	break;
}
?>
<div id="container">
	<?php
	if ($meter==1){
	$query=mysql_query('select * from dz_exam_venue where p_id='.$id);
	$row=mysql_fetch_array($query);
	?>
    <div class="edit" >
      <h1>考场管理</h1>
      <form name="form1" method="post" action="?act=modify&id=<?php echo $id ?>" onsubmit="return Checkminzu(this);">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="edit_title">考场：</td>
            <td><input name="p_name" type="text" class="inputtext" value="<?php echo $row['p_name'] ?>" size="50" maxlength="50" /></td>
          </tr>
          <tr>
            <td height="30">&nbsp;</td>
			<td><input name="button" type="submit" value=" 修改 " class="button" />&nbsp;&nbsp;<input name="button" type="button" value=" 返回 " class="button" onclick="history.back();" /></td>
          </tr>
        </table>
      </form>
    </div>
	<?php
	}
	else{
	?>
	<div class="view" style="height:350px; overflow:auto">
		<h1>考场管理</h1>
	    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        	<tr class="v_title">
				<td width="70%">名称</td>

				<td width="15%">操作</td>
        	</tr>
			<?php
			$query=mysql_query('select * from dz_exam_venue  order by p_id');
			if (mysql_num_rows($query)>0){
				$str='';
				while($row=mysql_fetch_array($query)){
					$str.='<tr onmouseover="this.className=\'view_trover\';" onmouseout="this.className=\'view_trout\';">';
					$str.='<td>'.$row['p_name'].'</td>';

					$str.='<td><a href="?meter=1&id='.$row['p_id'].'">修改</a> | <a href="?act=delete&id='.$row['p_id'].'" onclick="return ConfirmDel3();">删除</a></td>';
					$str.='</tr>';
				}
				echo $str;
			}
			?>
		</table>
	</div><br />
    <div class="edit">
      <h1>&nbsp;</h1>
      <form method="post" action="?act=add" onsubmit="return Checkminzu(this);">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="edit_title">名称：</td>
            <td><input name="p_name" type="text" class="inputtext" size="50" maxlength="50" /></td>
          </tr>

          <tr>
            <td height="30">&nbsp;</td>
			<td><input name="button" type="submit" value=" 添加 " class="button" /></td>
          </tr>
        </table>
      </form>
    </div>
	<?php } ?>
</div>
</body>
</html>

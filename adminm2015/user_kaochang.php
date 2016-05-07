<?php
require '../conn.php';
require 'config.php';
require '../inc/function.php';
?>
<?php
$row_num = $_GET['row'];
$s_id = $_GET["s_id$row_num"];
$s_name = $_GET["s_name$row_num"];
$s_school_num = $_GET["s_school_num$row_num"];
$s_exam_id = $_GET["s_exam_id$row_num"];
$s_exam_subject = $_GET["s_exam_subject$row_num"];
$s_exam_venue = $_GET["s_exam_venue$row_num"];
$s_exam_num = $_GET["s_exam_num$row_num"];
$s_seat_num = $_GET["s_seat_num$row_num"];
$s_exam_room = $_GET["s_exam_room$row_num"];
$s_exam_date = $_GET["s_exam_date$row_num"] . $_GET["s_exam_date$row_num" . "_" ."$row_num"] . $_GET["s_exam_date$row_num" . "_" ."$row_num" . "_" ."$row_num"];

if ($row_num != "") {
	$sql = "
		update kaochang set
		k_kaoheshijian='$s_exam_date',
		k_kaoshishishi='$s_exam_room',
		k_kaoshibianpai='$s_exam_num',
		k_xuhao='$s_exam_id',
		k_kaochang='$s_exam_venue',
		k_kaohekemu='$s_exam_subject',
		k_zuoweihao='$s_seat_num'
		where k_id=$s_id
	";
	mysql_query($sql) or die(mysql_error($sql));
	Msg('','user_kaochang.php');
}

$user_id=$_GET['id'];
if ($_GET['act']=='modok'){

	$u_school_id=ReStr($_POST['u_school_id']);
	$u_email=ReStr($_POST['u_email']);
	$u_user=ReStr($_POST['u_user']);
	$u_name=ReStr($_POST['u_name']);
	$u_name_old=ReStr($_POST['u_name_old']);
	$u_zk_num=ReStr($_POST['u_zk_num']);
	$u_czby_date=ReStr($_POST['u_czby_date']);
	$u_zj_num=ReStr($_POST['u_zj_num']);
	$u_birth=ReStr($_POST['u_birth']);
	$u_sex=ReStr($_POST['u_sex']);
	$u_image=ReStr($_POST['u_image']);
	$u_address_hk=ReStr($_POST['u_address_hk']);
	$u_address_city=ReStr($_POST['u_address_city']);
	$u_address_xian=ReStr($_POST['u_address_xian']);
	$u_huji=ReStr($_POST['u_huji']);
	$u_minzu=ReStr($_POST['u_minzu']);
	$u_zzmm=ReStr($_POST['u_zzmm']);
	$u_at_school=ReStr($_POST['u_at_school']);
	$u_vocational=ReStr($_POST['u_vocational']);
	$u_applyfor=ReStr($_POST['u_applyfor']);
	$u_tel=ReStr($_POST['u_tel']);
	$u_address=ReStra($_POST['u_address']);
	$u_addressee=ReStra($_POST['u_addressee']);
	$u_code=ReStra($_POST['u_code']);
	$u_skills=ReStra($_POST['u_skills']);
	$u_skills_grade=ReStra($_POST['u_skills_grade']);
	$u_match=ReStra($_POST['u_match']);
	$u_match_grade=ReStra($_POST['u_match_grade']);

	$u_resume1_date_star=ReStra($_POST['u_resume1_date_star']);
	$u_resume1_date_end=ReStra($_POST['u_resume1_date_end']);
	$u_resume1_content=ReStra($_POST['u_resume1_content']);
	$u_resume1_position=ReStra($_POST['u_resume1_position']);

	$u_resume2_date_star=ReStra($_POST['u_resume2_date_star']);
	$u_resume2_date_end=ReStra($_POST['u_resume2_date_end']);
	$u_resume2_content=ReStra($_POST['u_resume2_content']);
	$u_resume2_position=ReStra($_POST['u_resume2_position']);

	$u_resume3_date_star=ReStra($_POST['u_resume3_date_star']);
	$u_resume3_date_end=ReStra($_POST['u_resume3_date_end']);
	$u_resume3_content=ReStra($_POST['u_resume3_content']);
	$u_resume3_position=ReStra($_POST['u_resume3_position']);

	$u_members1_name=ReStra($_POST['u_members1_name']);
	$u_members1_relationship=ReStra($_POST['u_members1_relationship']);
	$u_members1_work=ReStra($_POST['u_members1_work']);
	$u_members1_chief=ReStra($_POST['u_members1_chief']);

	$u_members2_name=ReStra($_POST['u_members2_name']);
	$u_members2_relationship=ReStra($_POST['u_members2_relationship']);
	$u_members2_work=ReStra($_POST['u_members2_work']);
	$u_members2_chief=ReStra($_POST['u_members2_chief']);

	$u_members3_name=ReStra($_POST['u_members3_name']);
	$u_members3_relationship=ReStra($_POST['u_members3_relationship']);
	$u_members3_work=ReStra($_POST['u_members3_work']);
	$u_members3_chief=ReStra($_POST['u_members3_chief']);

	$sql="update user set
    u_school_id='$u_school_id',
	u_name='$u_name',
	u_name_old='$u_name_old',
	u_zk_num='$u_zk_num',
	u_czby_date='$u_czby_date',
	u_zj_num='$u_zj_num',
	u_birth='$u_birth',
	u_sex='$u_sex',
	u_address_hk='$u_address_hk',
	u_address_city='$u_address_city',
	u_address_xian='$u_address_xian',
	u_huji='$u_huji',
	u_minzu='$u_minzu',
	u_zzmm='$u_zzmm',
	u_at_school='$u_at_school',
	u_vocational='$u_vocational',
	u_applyfor='$u_applyfor',
	u_tel='$u_tel',
	u_address='$u_address',
	u_addressee='$u_addressee',
	u_code='$u_code',
	u_skills='$u_skills',
	u_skills_grade='$u_skills_grade',
	u_match='$u_match',
	u_match_grade='$u_match_grade',
	u_resume1_date_star='$u_resume1_date_star',
	u_resume1_date_end='$u_resume1_date_end',
	u_resume1_content='$u_resume1_content',
	u_resume1_position='$u_resume1_position',

	u_resume2_date_star='$u_resume2_date_star',
	u_resume2_date_end='$u_resume2_date_end',
	u_resume2_content='$u_resume2_content',
	u_resume2_position='$u_resume2_position',

	u_resume3_date_star='$u_resume3_date_star',
	u_resume3_date_end='$u_resume3_date_end',
	u_resume3_content='$u_resume3_content',
	u_resume3_position='$u_resume3_position',

	u_members1_name='$u_members1_name',
	u_members1_relationship='$u_members1_relationship',
	u_members1_work='$u_members1_work',
	u_members1_chief='$u_members1_chief',

	u_members2_name='$u_members2_name',
	u_members2_relationship='$u_members2_relationship',
	u_members2_work='$u_members2_work',
	u_members2_chief='$u_members2_chief',

	u_members3_name='$u_members3_name',
	u_members3_relationship='$u_members3_relationship',
	u_members3_work='$u_members3_work',
	u_members3_chief='$u_members3_chief'

	where u_id=$user_id";

	mysql_query($sql) or die(mysql_error($sql));
	Msg('','user_kaochang.php');

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/admin.css" type="text/css" />
	<script type="text/javascript" src="inc/function.js"></script>
	<script type="text/javascript">
		function edit(x) {
			var sub_id = "sub_bt" + x
			var edit_id = "edit_bt" + x
			var cel_id = "cel_bt" + x

			var s_seat_num = "s_seat_num" + x
			var s_exam_id = "s_exam_id" + x
			var s_exam_num = "s_exam_num" + x
			var s_exam_subject = "s_exam_subject" + x
			var s_exam_room = "s_exam_room" + x
			var s_exam_venue = "s_exam_venue" + x
			var s_exam_date1 = "s_exam_date" + x
			var s_exam_date2 = "s_exam_date" + x + "_"+ x
			var s_exam_date3 = "s_exam_date" + x + "_" + x + "_" + x

			var u_seat_num = "u_seat_num" + x
			var u_exam_id = "u_exam_id" + x
			var u_exam_num = "u_exam_num" + x
			var u_exam_subject = "u_exam_subject" + x
			var u_exam_room = "u_exam_room" + x
			var u_exam_venue = "u_exam_venue" + x
			var u_exam_date = "u_exam_date" + x

			tagMode(sub_id, false);
			showTag(cel_id);
			hiddenTag(edit_id);

			showTag(s_seat_num);
			hiddenTag(u_seat_num);

			// showTag(s_exam_num);
			// hiddenTag(u_exam_num);

			showTag(s_exam_date1);
			// showTag(s_exam_date2);
			// showTag(s_exam_date3);
			// showTag(s_exam_date);
			hiddenTag(u_exam_date);

			showTag(s_exam_room);
			hiddenTag(u_exam_room);

			showTag(s_exam_venue);
			hiddenTag(u_exam_venue);

			showTag(s_exam_subject);
			hiddenTag(u_exam_subject);

			showTag(s_exam_id);
			hiddenTag(u_exam_id);

			changeValue(u_seat_num, s_seat_num)
			changeValue(u_exam_num, s_exam_num)
			changeValue(u_exam_room, s_exam_room)
			changeValue(u_exam_venue, s_exam_venue)
			changeValue(u_exam_subject, s_exam_subject)
			changeValue(u_exam_date, s_exam_date1)
			changeValue(u_exam_id, s_exam_id)
			// changeDateValue(u_exam_date, s_exam_date1, s_exam_date2, s_exam_date3)
		}

		function sub(x) {
			// var sub_id = "sub_bt" + x
			// var edit_id = "edit_bt" + x
			// var cel_id = "cel_bt" + x
			//
			// var s_seat_num = "s_seat_num" + x
			// var s_exam_id = "s_exam_id" + x
			// var s_exam_num = "s_exam_num" + x
			// var s_exam_subject = "s_exam_subject" + x
			// var s_exam_room = "s_exam_room" + x
			// var s_exam_venue = "s_exam_venue" + x
			// var s_exam_date = "s_exam_date" + x
			//
			// var u_seat_num = "u_seat_num" + x
			// var u_exam_id = "u_exam_id" + x
			// var u_exam_num = "u_exam_num" + x
			// var u_exam_subject = "u_exam_subject" + x
			// var u_exam_room = "u_exam_room" + x
			// var u_exam_venue = "u_exam_venue" + x
			// var u_exam_date = "u_exam_date" + x
			//
			// tagMode(sub_id, true);
			// // document.getElementById(sub_id).disabled = true;
			// showTag(edit_id);
			// hiddenTag(cel_id);
			//
			// hiddenTag(s_seat_num);
			// showTag(u_seat_num);
			//
			// hiddenTag(s_exam_num);
			// showTag(u_exam_num);
			//
			// hiddenTag(s_exam_date);
			// showTag(u_exam_date);
			//
			// hiddenTag(s_exam_room);
			// showTag(u_exam_room);
			//
			// hiddenTag(s_exam_venue);
			// showTag(u_exam_venue);
			//
			// hiddenTag(s_exam_subject);
			// showTag(u_exam_subject);
			//
			// hiddenTag(s_exam_id);
			// showTag(u_exam_id);
		}

		function cancel(x) {
			var sub_id = "sub_bt" + x
			var edit_id = "edit_bt" + x
			var cel_id = "cel_bt" + x

			var s_seat_num = "s_seat_num" + x
			var s_exam_id = "s_exam_id" + x
			var s_exam_num = "s_exam_num" + x
			var s_exam_subject = "s_exam_subject" + x
			var s_exam_room = "s_exam_room" + x
			var s_exam_venue = "s_exam_venue" + x
			var s_exam_date1 = "s_exam_date" + x
			var s_exam_date2 = "s_exam_date" + x + "_"+ x
			var s_exam_date3 = "s_exam_date" + x + "_" + x + "_" + x

			var u_seat_num = "u_seat_num" + x
			var u_exam_id = "u_exam_id" + x
			var u_exam_num = "u_exam_num" + x
			var u_exam_subject = "u_exam_subject" + x
			var u_exam_room = "u_exam_room" + x
			var u_exam_venue = "u_exam_venue" + x
			var u_exam_date = "u_exam_date" + x

			tagMode(sub_id, true);
			hiddenTag(cel_id);
			showTag(edit_id);

			hiddenTag(s_seat_num);
			showTag(u_seat_num);

			// hiddenTag(s_exam_num);
			// showTag(u_exam_num);

			hiddenTag(s_exam_date1);
			// hiddenTag(s_exam_date2);
			// hiddenTag(s_exam_date3);
			// hiddenTag(s_exam_date);
			showTag(u_exam_date);

			hiddenTag(s_exam_room);
			showTag(u_exam_room);

			hiddenTag(s_exam_venue);
			showTag(u_exam_venue);

			hiddenTag(s_exam_subject);
			showTag(u_exam_subject);

			hiddenTag(s_exam_id);
			showTag(u_exam_id);
		}

		function hiddenTag(id) {
			var obj = document.getElementById(id);
			// alert(obj.setAttribute("style", "display: none"));
			// alert(document.getElementById(id).getAttribute("style"));
			document.getElementById(id).style.display = "none";
		}

		function showTag(id) {
			var obj = document.getElementById(id);
			// alert(document.getElementById(id).getAttribute("style"));
			// alert(obj.setAttribute("style", "display: true"));
			// document.getElementById(id).style = "display: true";
			document.getElementById(id).style.display = "inline";
		}

		function tagMode(id, bool) {
			document.getElementById(id).disabled = bool;
			// alert(document.getElementById(id).style.display);
		}

		function changeValue(id1, id2) {
			document.getElementById(id2).value = document.getElementById(id1).innerHTML;
			document.getElementById(id1).innerHTML = document.getElementById(id2).value;
		}
		function changeDateValue(id, id1, id2, id3) {
			var date = document.getElementById(id).innerHTML
			document.getElementById(id1).value = date.substring(0, 5)
			document.getElementById(id2).value = date.substring(5, 8)
			document.getElementById(id3).value = date.substring(8, 11)
		}
	</script>
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
		Msg('','Referer');
		break;

}
?>

<div id="container">
	<?php
	$str='';
	$str.='<a href="user_kaochang.php" style="color:#ff0000; font-weight:bold;">全部</a>';

	echo $str;
	?>
	<input type="text" id="search_key" class="search_input" size="30" value="<?php echo  $search_key ?>" />&nbsp;<input type="button" name="button" class="search_button" value="搜 索" onclick="location.href='?search_key='+$('search_key').value" />&nbsp;&nbsp;&nbsp;可以通过考核科目，姓名进行搜索查找<br>

	<div class="view">
				<h1>报考管理</h1>

			<table width="100%" border="0" id="table" cellpadding="0" cellspacing="0">
				<tr class="v_title">
					<td width="7%">姓名</td>
					<td width="10%">考生号</td>
					<td width="5%">序号</td>
					<td width="15%">考核科目</td>
					<td width="13%">考场</td>
					<!-- <td width="8%">考场编号</td> -->
					<td width="6%">座位号</td>
					<td width="8%">考试教室</td>
					<td width="18%">考核时间</td>
					<td width="8%">编辑</td>
				</tr>
				<?php
				$page_size=15;
				$page_sql = '';
				if(isset($_GET['search_key'])){
					$serarch_key = $_GET['search_key'];
					$page_sql = 'select * from kaochang where k_xingming like "%' .$search_key. '%" or k_kaohekemu like "%' .$search_key.'%" order by k_id2 desc';
				} else{
					if ($_SESSION['admin_user'] == 'admin') {
						$page_sql='select * from kaochang order by k_id2 desc ';
					} else {
						$user = $_SESSION['admin_user'];
						$query=mysql_query("select * from admin where a_user='$user'");
						$row=mysql_fetch_array($query);
						$belong_school_id = $row['belong_school_id'];
						$page_sql = "select * from user where u_school_id=$belong_school_id and u_type=1 order by u_id desc where u_type=1";
					}
				}
				$page_count=GetPageCount($page_size,$page_sql);
				if ($page>$page_count) $page=$page_count;
				$page_number=($page-1)*$page_size;
				$query=mysql_query($page_sql." limit $page_number,$page_size");
				if (mysql_num_rows($query)>0){
					$str='';
					$i = 0;
					while($row=mysql_fetch_array($query)){
						$i++;
						$str.= '<tr onmouseover="this.className=\'view_trover\';" onmouseout="this.className=\'view_trout\';">';
						$str.= '<td>' .
									'<form id="row' . $i .'"  action="user_kaochang.php">'.
									'<input style="border: 0; display: none" id="s_name' . $i . '" name="s_name'. $i .'" size=6 value=' . $row['k_xingming'] . '>' .
									'<span id="u_name'.$i.'" name="u_name'.$i.'" style="display: true">'. $row['k_xingming'].'</span>'.
							   '</td>';
						$str.= '<td><input style="border: 0; display: none" id="s_school_num' . $i . '" name="s_school_num'. $i .'" value=' . $row['k_kaoshenghao'] . '><span id="u_school_num'.$i.'" name="u_school_num'.$i.'" style="display: true">'. $row['k_kaoshenghao'].'</span></td>';
						$str.= '<td><input size="1" pattern="[\d]+" maxlength="2" style="display: none" id="s_exam_id' . $i . '" name="s_exam_id'. $i .'" value="' . $row['k_xuhao'] . '"><span id="u_exam_id'.$i.'" name="u_exam_id'.$i.'" style="display: true">'. $row['k_xuhao'].'</span></td>';
						$str.= '<td>' .
									'<select style="display: none" id="s_exam_subject' . $i . '" name="s_exam_subject'. $i .'">' .
										'<option value="">请选择</option>';
										$query1=mysql_query('select * from dz_exam_subject order by p_id');
			                            if(mysql_num_rows($query1)>0){
			                                while($row1=mysql_fetch_array($query1)){
			                                    $str.='<option value="'.$row1['p_name'].'">'.$row1['p_name'].'</option>';
			                                }
			                            }
						$str.=		'</select>' .
									'<span id="u_exam_subject'.$i.'" name="u_exam_subject'.$i.'" style="display: true">'. $row['k_kaohekemu'].'</span>' .
							   '</td>';
						$str.= '<td>' .
									'<select style="display: none" id="s_exam_venue' . $i . '" name="s_exam_venue'. $i . '">' .
										'<option value="">请选择</option>';
										$query1=mysql_query('select * from dz_exam_venue order by p_id');
			                            if(mysql_num_rows($query1)>0){
			                                while($row1=mysql_fetch_array($query1)){
			                                    $str.='<option value="'.$row1['p_name'].'">'.$row1['p_name'].'</option>';
			                                }
			                            }
						$str.= 		'</select>' .
									'<span id="u_exam_venue'.$i.'" name="u_exam_venue'.$i.'" style="display: true">'. $row['k_kaochang'].'</span>' .
							   '</td>';
						// $str.= '<td>' .
						// 			'<select style="display: none" id="s_exam_num' . $i . '" name="s_exam_num'. $i .'">';
						// 				for ($j = 0; $j <= 6; $j++) {
						// 					if ($j == 0)
						// 						$str.='<option value="">请选择</option>';
						// 					else
						// 						$str.='<option value="0'.$j.'">0'.$j.'</option>';
						// 				}
						// $str.=		'</select>' .
						// 			'<span id="u_exam_num'.$i.'" name="u_exam_num'.$i.'" style="display: true">'. $row['k_kaoshibianpai'].'</span>' .
						// 	   '</td>';
						$str.= '<td><input size="1" pattern="[\d]+" maxlength="2" style="border: 0; display: none" id="s_seat_num' . $i . '" name="s_seat_num'. $i .'" size=6 value=' . $row['k_zuoweihao'] . '><span id="u_seat_num'.$i.'" name="u_seat_num'.$i.'" style="display: true">'. $row['k_zuoweihao'].'</span></td>';
						$str.= '<td>' .
									'<select style="display: none" id="s_exam_room' . $i . '" name="s_exam_room'. $i .'">' .
										'<option value="">请选择</option>';
										$query1=mysql_query('select * from dz_exam_room order by p_id');
			                            if(mysql_num_rows($query1)>0){
			                                while($row1=mysql_fetch_array($query1)){
			                                    $str.='<option value="'.$row1['p_name'].'">'.$row1['p_name'].'</option>';
			                                }
			                            }
						$str.=		'</select>' .
									'<span id="u_exam_room'.$i.'" name="u_exam_room'.$i.'" style="display: true">'. $row['k_kaoshishishi'].'</span>' .
							   '</td>';
						$str.= '<td>';
						// $str.= 		'<select style="display: none" id="s_exam_date' . $i . '" name="s_exam_date'. $i .'">';
						// 				for ($j = 2014; $j <= 2070; $j++) {
						// 					if ($j == 2014)
						// 						$str.='<option value="">请选择</option>';
						// 					else
						// 						$str.='<option value="'.$j.'年">'.$j.'年</option>';
						// 				}
						// $str.=		'</select>';
						// $str.=		'<select style="display: none" id="s_exam_date' . $i . '_' . $i . '" name="s_exam_date'. $i . '_' . $i. '">';
						// 				for ($j = 0; $j <= 12; $j++) {
						// 					if ($j == 0)
						// 						$str.='<option value="">请选择</option>';
						// 					else if ($j < 10)
						// 						$str.='<option value="0'.$j.'月">0'.$j.'月</option>';
						// 					else
						// 						$str.='<option value="'.$j.'月">'.$j.'月</option>';
						// 				}
						// $str.=		'</select>';
						// $str.=		'<select style="display: none" id="s_exam_date' . $i . '_' . $i. '_' . $i . '" name="s_exam_date'. $i . '_' . $i. '_' . $i .'">';
						// 				for ($j = 0; $j <= 31; $j++) {
						// 					if ($j == 0)
						// 						$str.='<option value="">请选择</option>';
						// 					else if ($j < 10)
						// 						$str.='<option value="0'.$j.'日">0'.$j.'日</option>';
						// 					else
						// 						$str.='<option value="'.$j.'日">'.$j.'日</option>';
						// 	    		}
						// $str.= 		'</select>';
						$str.=		'<input size="30" style="display: none" id="s_exam_date' . $i . '" name="s_exam_date'. $i .'" value="' . $row['k_kaoheshijian'] . '">' .
							   		'<span id="u_exam_date'.$i.'" name="u_exam_date'.$i.'" style="display: true">'. $row['k_kaoheshijian'].'</span>' .
							   '</td>';
						$str.= '<td>' .
									'<input type="hidden" name="s_id' .$i . '" value="' . $row['k_id'] . '">' .
									'<input type="hidden" name="row" value="' . $i . '">' .
									'<input id="edit_bt' .$i . '" name="edit_bt' .$i . '" type="button" onclick="edit(' .$i . ')" style="display: true" value="修改">' .
									'<input id="cel_bt' .$i . '" name="cel_bt' .$i . '" type="button" onclick="cancel(' .$i . ')" style="display: none" value="取消">' .
									'&nbsp;<input id="sub_bt' .$i . '" name="sub_bt' .$i . '" type="submit" disabled  value="提交">' .
								'</td></form>';
						$str.= '</tr>';
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

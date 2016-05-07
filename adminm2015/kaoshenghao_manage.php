<?php
require '../conn.php';
require 'config.php';
require '../inc/function.php';
?>
<?php
if($_GET['row_id']) {
    $row_id =  $_GET['row_id'];
    $subject = $_GET["subject$row_id"];
    $kaoshenghao_id = $_GET["kaoshenghao$row_id"];
    $query = "select * from kaochang where k_kaohekemu='$subject' order by k_id";
    $result = mysql_query($query);
    $index = 0;
    $d_index = 0;
    while($row=mysql_fetch_array($result)) {
        $index++;
        if ($index < 10) {
            $query = 'update kaochang set k_kaoshenghao="'.$kaoshenghao_id. $d_index . $index .'", k_zuoweihao="'.$d_index . $index.'" where k_id="' .$row['k_id']. '"';
        } else {
            $query = 'update kaochang set k_kaoshenghao="'.$kaoshenghao_id. $index .'", k_zuoweihao="'.$index.'" where k_id="' .$row['k_id']. '"';
        }
        mysql_query($query);
    }
}
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
    <div id="container">
        <?php
    	$str='';
    	$str.='<span style="color:#ff0000; font-weight:bold;">考生号生成规则： 考生号前缀 + 考场座位号(两位数)</span>';
    	echo $str;
    	?>
    	<div class="view">
    		<h1>报名管理</h1>
        	    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                	<tr class="v_title">
                    	<td width="45%">考核科目</td>
        				<td width="35%">考生号前缀</td>
                        <!-- <td width="10%">考生号长度</td> -->
                        <td width="20%">操作</td>
                	</tr>
                    <tr>
                    <?php
                    $query = 'select * from dz_exam_subject';
                    $result = mysql_query($query);
                    $str = '';
                    $index = 0;
                    while($row = mysql_fetch_array($result)) {
                        $index++;
                        $str.= '<tr onmouseover="this.className=\'view_trover\';" onmouseout="this.className=\'view_trout\';">';
                        $str.= '    <form id="row' .$index. '" action="kaoshenghao_manage.php?act=1" method="get">';
                        $str.= '    <td><input style="display: none" name="subject'.$index. '" value="'.$row['p_name'].'"><span>' .$row['p_name']. '</span></td>';
                        $str.= '    <td><input style="display: none" name="kaoshenghao'.$index. '" value="'.$row['p_kaosheng_id'].'"><span>' .$row['p_kaosheng_id']. '</span></td>';
                        // $str.= '    <td><input name="length' .$index. '" size="1" type=text></td>';
                        $str.= '    <input name="row_id" value="' .$row['p_id']. '" type="hidden">';
                        $str.= '    <td><input type="submit" value="生成"></td>';
                        $str.= '    </form>';
                        $str.= '</tr>';
                    }
                    echo $str;
                    ?>
                    </tr>
        		</table>
            </form>
    	</div>
    </div>
</body>
</html>

<?php
require 'conn.php';
require 'config.php';
require 'inc/function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $site_name?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $site_keyword?>" />
<meta name="description" content="<?php echo $site_description?>" />
<link rel="stylesheet" href="css/style_<?php echo $language?>.css" type="text/css" />
<script type="text/javascript" src="inc/function.js"></script>
</head>
<body>
<div id="main">
	<?php require 'header.php'?>
	<div id="flash_blk">
		<div id="flash">
		<?php
		$str='';
		$query=mysql_query('select * from '.$language.'_ad where a_class=1 order by a_order,a_id');
		if (mysql_num_rows($query)>0){
		while ($row=mysql_fetch_array($query)){
			if ($row['a_url']!=''){
				$str.='<p><a href="'.$row['a_url'].'" target="_blank"><img src="'.$row['a_image'].'" /></a></p>';
			}
			else{
				$str.='<p><img src="'.$row['a_image'].'" /></p>';
			}
		}
		}
		echo $str
		?>
		</div>
		<div id="flash_button"></div>
	</div>
	<script type="text/javascript" src="jquery/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="jquery/jquery.cycle.all.js"></script>
	<script type="text/javascript">
	$(function(){
		$('#flash').cycle({ 
			fx:'fade',
			pager:'#flash_button'
		});
	})
	</script>
    <div id="content" >
      <div id="left">
      <div id="left_title">- 最新考证通知 -</div>
      <?php
			$str='';
			$query=mysql_query('select p_id,p_class,p_name,p_price,p_imagei,p_desc from '.$language.'_products where p_commend=0 order by p_id desc limit 0,4');
			if (mysql_num_rows($query)>0){
			while($row=mysql_fetch_array($query)){
				 
				$str.='<dd>';
				$str.='<strong class="iproducts_list_name"><a href="checkout.php?id='.$row['p_id'].'" target="_blank">'.$row['p_name'].'</a></strong>';
				$str.='<p class="iproducts_list_desc">'.CutStr($row['p_desc'],240).'</p>';
			 
				$str.='</dd>';
				 
			}
			}
			echo $str;
			?>
      </div>
    
		 <div id="right">
	 
		<?php
		$str='';
		$query=mysql_query('select * from '.$language.'_products_class where p_sid=0 and p_Tid=0 order by p_order,p_id');
		if (mysql_num_rows($query)>0){
			$col=0;
			$str.='<ul id="iproducts_menu">';
			while($row=mysql_fetch_array($query)){
				$str.='<li onmouseover="iProducts('.$col.')">'.$row['p_name'].'</li>';
				$col++;
			}
			$str.='</ul>';
			$col=0;
			mysql_data_seek($query,0);
			$str.='<div class="iproducts_blk">';
			while($row=mysql_fetch_array($query)){
				$str.='<div class="iproducts" id="iproducts_'.$col.'">';
				$query2=mysql_query('select * from '.$language.'_products where p_class='.$row['p_id'].'  order by p_id desc limit 0,6');
				if (mysql_num_rows($query2)>0){
				 
				while($row2=mysql_fetch_array($query2)){
			 
					$str.='<dl>';
				 
				 
					$str.='<strong class="products_list_name">等级考试名称：'.$row2['p_name'].'</strong>';
						$str.='<span style="float:right">';	
						 if (strtotime($row2['p_date1']) > strtotime(date('Y-m-d H:i:s',time())))
						 {
							 if ($user==''){
								$str.='<a href="login.php" style="color:#000;">立即报名</a>';
							}
							else {
								$str.='<a href="checkout.php?id='.$row2['p_id'].'" style="color:#000;">立即报名</a> ';
							}
						 }
						  else
						 {
						 $str.='<a  style="color:#fa000c;">已经截止报名</a> ';
						 }
						$str.='</span>';	 
				 
					$str.='<br>报名截止时间：'.date('Y-m-d',strtotime($row2['p_date1'])).'&nbsp;&nbsp;&nbsp;考试时间：'.date('Y-m-d',strtotime($row2['p_date'])).'&nbsp;&nbsp;&nbsp;报考费用：'.$row2['p_price'].'元';
					$str.='<br>考试要求：<p class="products_list_desc">'.CutStr($row2['p_desc'],70).'</p>';
			
					$str.='</dd>';
					$str.='</dl>';
					 
					$cols++;
				}
				}
				$col++;
				$str.='<div class="clear"></div>';
				 
				$str.='</div>';
			}
			$str.='</div>';
			$str.='<script type="text/javascript">iProducts(0)</script>';
		}
		echo $str;
		?>
    </div>
	<?php
	 
	
	//require 'footer.php';
	?>
</div>
</body>
</html>
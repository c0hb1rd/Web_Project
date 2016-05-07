<?php
require 'conn.php';
require 'config.php';
require 'inc/function.php';
require 'uploadfontion.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="generator" content="WebMotionUK">
	<title>照片上传</title>
	<script type="text/javascript" src="js/jquery-pack.js"></script>
	<script type="text/javascript" src="js/jquery.imgareaselect.min.js"></script>
</head>
 <?php
if ($user=='') Msg('','index.php');
if ($_POST['act']=='saveimg'){


}
?>
<?php
//Only display the javacript if an image has been uploaded
if(strlen($large_photo_exists)>0)
{
	$current_large_image_width = getWidth($large_image_location);
	$current_large_image_height = getHeight($large_image_location);



?>

<script type="text/javascript">



function preview(img, selection) {
	var scaleX = <?php echo $thumb_width;?> / selection.width;
	var scaleY = <?php echo $thumb_height;?> / selection.height;

	$('#thumbnail + div > img').css({
		width: Math.round(scaleX * <?php echo $current_large_image_width;?>) + 'px',
		height: Math.round(scaleY * <?php echo $current_large_image_height;?>) + 'px',
		marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px',
		marginTop: '-' + Math.round(scaleY * selection.y1) + 'px'
	});
	$('#x1').val(selection.x1);
	$('#y1').val(selection.y1);
	$('#x2').val(selection.x2);
	$('#y2').val(selection.y2);
	$('#w').val(selection.width);
	$('#h').val(selection.height);
}

$(document).ready(function () {
	$('#save_thumb').click(function() {
		var x1 = $('#x1').val();
		var y1 = $('#y1').val();
		var x2 = $('#x2').val();
		var y2 = $('#y2').val();
		var w = $('#w').val();
		var h = $('#h').val();
		if(x1=="" || y1=="" || x2=="" || y2=="" || w=="" || h==""){
			alert("你必须选择好截图区域");
			return false;
		}else{
			return true;
		}
	});
});

$(window).load(function () {
	$('#thumbnail').imgAreaSelect({ aspectRatio: '1:<?php echo $thumb_height/$thumb_width;?>', onSelectChange: preview });
});

</script>
<?php }?>

<?php


if(strlen($error)>0){
	echo "<ul><li><strong>Error!</strong></li><li>".$error."</li></ul>";
}
if(strlen($large_photo_exists)>0 && strlen($thumb_photo_exists)>0){
	echo $large_photo_exists."&nbsp;".$thumb_photo_exists;

	$u_thumb_image=$upload_path.$thumb_image_name.$_SESSION['user_file_ext'];
	$u_image=$upload_path.$large_image_name.$_SESSION['user_file_ext'];
	  echo $large_photo."&nbsp;".$thumb_photo;
	  $sql="update user set u_thumb_image='$u_thumb_image',	u_image='$u_image' where u_id=$user_id";
	    mysql_query($sql) or die(mysql_error($sql));

	echo "<p><a href=\"".$_SERVER["PHP_SELF"]."?a=delete&t=".$_SESSION['random_key'].$_SESSION['user_file_ext']."\">重新上传</a>
	<a href=\"user_pic2.php\">查看相片</a></p>";



	$_SESSION['random_key']= "";
	$_SESSION['user_file_ext']= "";
}else{
		if(strlen($large_photo_exists)>0){?>
        <div style="width:432px; height:576px; margin:0 auto">
		<h2>创建截图</h2>
		<div align="center">
			<img src="<?php echo $upload_path.$large_image_name.$_SESSION['user_file_ext'];?>" style="float: left; margin-right: 10px;" id="thumbnail" alt="请选择截图区域">
			<div style="border:1px #e5e5e5 solid; float:left; position:relative; overflow:hidden; width:<?php echo $thumb_width;?>px; height:<?php echo $thumb_height;?>px;">
				<img src="<?php echo $upload_path.$large_image_name.$_SESSION['user_file_ext'];?>" style="position: relative;" alt="预览">
			</div>
			<br style="clear:both;">
			<form name="thumbnail" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
				<input type="hidden" name="x1" value="0" id="x1">
				<input type="hidden" name="y1" value="0" id="y1">
				<input type="hidden" name="x2" value="144" id="x2">
				<input type="hidden" name="y2" value="192" id="y2">
				<input type="hidden" name="w" value="144" id="w">
				<input type="hidden" name="h" value="192" id="h">
                <input type="hidden" name="act" value="saveimg" id="h">
				<input type="submit" name="upload_thumbnail" value="保存截图" id="save_thumb">
			</form>
		</div>
	<hr>
	<?php 	} ?>

  <form name="photo" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <input type="file" name="image" size="30"> <input type="submit" name="upload" value="上传图片">
	</form>
    </div>


<?php
echo "<p>说明:考生填写个人资料后方可上传电子照片,文件大小不超过50KB。</p>";
echo "<p>相片质量要求：背景选取浅蓝色，照片格式为JPG，大小小于50KB.<br>成像区上下要求头上部空1／10，头部占7／10，肩部占1／5，左右各空1／10，采集的图像大小最小192mm×144mm(高×宽)。 照片效果如图所示：</p>";
echo "<img src=\"images/sampic.jpg\"/>";

echo "<p><a href=\"user_pic2.php\">查看相片</a></p>";
 } ?>


</body>
</html>

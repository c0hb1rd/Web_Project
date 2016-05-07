<?php
$language='cn';
$mysql_host='localhost';
$mysql_username='root';//帐号
$mysql_database='kaoshi01';//数据库连接发生错误
$mysql_password='hackingme?233333';
$conn=mysql_connect($mysql_host,$mysql_username,$mysql_password) or die ('MySql连接发生错误：'.mysql_error());
mysql_select_db($mysql_database,$conn) or die ('数据库连接发生错误：'.mysql_error());
mysql_query("SET NAMES UTF8");  
//mysql_query("SET CHARACTER SET UTF8");  
//mysql_query("SET CHARACTER_SET_RESULTS=UTF8");
if(is_file($_SERVER['DOCUMENT_ROOT'].'/360safe/360webscan.php')){
    require_once($_SERVER['DOCUMENT_ROOT'].'/360safe/360webscan.php');
} // 注意文件路径
?>

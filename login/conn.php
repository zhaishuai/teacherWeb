<?php
//数据库链接文件
header("Content-Type:text/html;charset=utf-8");
$host='mysql5-zw-g03.xincache.cn';//数据库服务器
$user='net80444095';//数据库用户名
$password='PBhQ8SrX';//数据库密码
$database='net80444095';//数据库名
$conn=@mysql_connect($host,$user,$password) or die('database connect error!');
mysql_query("SET NAMES 'UTF8'");  
mysql_query("SET CHARACTER SET UTF8");  
mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");  
@mysql_select_db($database) or die('can not find database!');

?>
<?php
//注销登录
header("Content-Type:text/html;charset=utf-8");
session_start();
$_SESSION['username']="";
echo "<script language='javascript'>alert('注销成功!');location='login.php';</script>";
?>
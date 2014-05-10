<?php
header("Content-Type:text/html;charset=utf-8");
include_once '../login/checkA.php';
include_once '../login/conn.php';
//echo $_POST["content"];
//echo "<br>";
//echo $_POST["hiddenValue"];
$_POST['olderUserName'] = str_replace("\"","\\\"",$_POST['olderUserName']);
if($_POST['olderUserName']=="")
    echo "<script language='javascript'>alert('旧用户名不能为空!');location='index.html';</script>";

//echo $_POST['olderUserName'];
//echo "<br/>";
//echo $_POST['olderPassWord'];

$_POST['olderPassWord'] = str_replace("\"","\\\"",$_POST['olderPassWord']);
if($_POST['olderPassWord']=="")
    echo "<script language='javascript'>alert('旧用户密码不能为空!');location='index.php';</script>";

//echo "<br/>";
//echo $_POST['newUserName'];

$_POST['newUserName'] = str_replace("\"","\\\"",$_POST['newUserName']);
if($_POST['newUserName']=="")
    echo "<script language='javascript'>alert('新用户名不能为空!');location='index.php';</script>";

//
//echo "<br/>";
//echo $_POST['newPassWord'];

$_POST['newPassWord'] = str_replace("\"","\\\"",$_POST['newPassWord']);
if($_POST['newPassWord']=="")
    echo "<script language='javascript'>alert('新用户密码不能为空!');location='index.php';</script>";
if(strlen($_POST['newPassWord']) < 6)
    echo "<script language='javascript'>alert('新用户密码不能小于6!');location='index.php';</script>";

//echo "<br/>";
//echo $_POST['confirmPassWord'];

$_POST['confirmPassWord'] = str_replace("\"","\\\"",$_POST['confirmPassWord']);
if($_POST['confirmPassWord']=="")
    echo "<script language='javascript'>alert('确认密码不能为空!');location='index.php';</script>";
if($_POST['confirmPassWord']!=$_POST['newPassWord'])
    echo "<script language='javascript'>alert('两次输入的密码不相同!');location='index.php';</script>";


@mysql_select_db($database) or die('can not find database!');
$userpass=md5($_POST['olderPassWord']);
$sql="select * from user";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
if ($row['username']==$_POST['olderUserName']){
    if ($row['userpass']==$userpass){


        $sql="UPDATE user SET username = \"".$_POST['newUserName']."\" WHERE username = '".$_POST['olderUserName']."'";
        $query=mysql_query($sql);
        $sql="UPDATE user SET userpass = \"".md5($_POST['newPassWord'])."\" WHERE username = '".$_POST['newUserName']."'";
        $query=mysql_query($sql);


        echo "<script language='javascript'>alert('修改成功!');location='index.php';</script>";
    }
    else {
        echo "<script language='javascript'>alert('密码错误!');location='index.php';</script>";
    }
}
else {
    echo "<script language='javascript'>alert('用户名不存在!');location='index.php';</script>";
}




//$sql="select content from pagecontent where title ="."'".$q."'";

//echo $sql;


?>
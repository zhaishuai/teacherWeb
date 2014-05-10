<?php
header("Content-Type:text/html;charset=utf-8");
include_once '../login/checkA.php';
include_once '../login/conn.php';
//echo $_POST["content"];
//echo "<br>";
//echo $_POST["hiddenValue"];
//$_POST = str_replace("\"","\\\"",$_POST);
//echo $_POST["content"];
@mysql_select_db($database) or die('can not find database!');
//$sql="select content from pagecontent where title ="."'".$q."'";

$q = $_POST["hiddenValue"];
//echo $q;
//echo $_POST["content"];
//$sql="UPDATE cooperation SET content =".$_POST["content"]." WHERE id = ".$q;
$sql="SELECT content FROM cooperation WHERE id='".$q."'";
$query=mysql_query($sql);
$row = mysql_fetch_array($query);
//echo count($row['content']);
if(count($row['content'])){
    $sql="UPDATE cooperation SET content = '".$_POST["content"]."' WHERE id = '".$q."'";
}else {
    $sql="INSERT INTO cooperation (id ,content) VALUES ('".$q."','".$_POST["content"]."')";
}
mysql_query($sql);
//echo $sql;
echo "<script language='javascript'>alert('提交成功!');location='page.php';</script>";
?>
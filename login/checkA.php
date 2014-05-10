<?php
//在需要验证管理员身份的地方引用
//在引用本文件之前不能有任何形式的输出，建议在文档最开始出引用
header("Content-Type:text/html;charset=utf-8");
session_start();
if ($_SESSION['username']==""){
    echo "<script language='javascript'>alert('未登录！');location='../login/login.php';</script>";
}
?>
<?php
header("Content-Type:text/html;charset=utf-8");
include_once 'login/conn.php';
//应该引用conn.php
$q=$_GET["q"];

switch ($q){
    case "0":{
        $q="联系我们";
    }break;
    case "1":{
        $q="关于我们";
    }break;
    case "2":{
        $q="招聘精英";
    }break;
    case "3":{
        $q="合作机构";
    }break;
    case "4":{
        $q="使用攻略";
    }break;
    case "5":{
        $q="功能特色";
    }break;
    case "6":{
        $q="研发机构";
    }break;
    case "7":{
        $q="Criterion";
    }break;
    case "8":{
        $q="课程核心";
    }break;
    case "9":{
        $q="教学理念";
    }break;
    case "10":{
        $q="讲故事";
    }break;
    case "11":{
        $q="角色扮演";
    }break;
    case "12":{
        $q="读者剧场";
    }break;
    case "13":{
        $q="教师攻略";
    }break;
    case "14":{
        $q="学生攻略";
    }break;
    case "15":{
        $q="开端介绍";
    }break;
    case "16":{
        $q="ETS授权开端";
    }break;
    case "17":{
        $q="培训师介绍";
    }break;
    case "18":{
        $q="合作学校";
    }break;
    case "19":{
        $q="授权证书";
    }break;
    case "20":{
        $q="常见问题";
    }break;
    case "21":{
        $q="下载专区";
    }break;
    case "22":{
        $q="新闻中心";
    }break;
    default :{
    $q="Criterion";
    }
}

@mysql_select_db($database) or die('can not find database!');

$sql="select content from pagecontent where title ="."'".$q."'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
//lookup all hints from array if length of q>0

//or to the correct values
if(strlen($q)<=0){
    $q="Criterion";
}
$response=$row['content'];
//output the response

echo $response ;
?>
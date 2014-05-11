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

if($q=="授权证书"){
    $_POST["content"]=preg_replace("/<a\s([\s\S]*?)>/","",$_POST["content"]);
    $_POST["content"]=preg_replace("/<\/a>/","",$_POST["content"]);
    preg_match_all('/<td>(.*?)<\/td>/',$_POST["content"],$rs);
    include_once '../login/conn.php';
    @mysql_select_db($database) or die('can not find database!');
    mysql_query("drop table  cooperationList ;");
    $sql = "CREATE TABLE cooperationList
            (
            id int(11) not null auto_increment,
            title varchar(32),
            PRIMARY KEY (id)
            )ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;";

    mysql_query($sql);
    $count = 1;
    foreach($rs[0] as $t){
        $t = str_replace("&nbsp;","",$t);
        $t = preg_replace("/<td>/","",$t);
        $t = preg_replace("/<\/td>/","",$t);
        $t = preg_replace("/ /","",$t);
        mysql_query("INSERT INTO cooperationList (id, title) VALUES  ('".$count."','".$t."');");
        $_POST["content"] = preg_replace("/".$t."/","<a href=\"pagecooperation.php?id=".$count."\">".$t."</a>",$_POST["content"]);
        $count++;
        //echo $t;
    }
}
//echo $_POST["content"];
$content = $_POST["content"];
//echo $content;
$sql="UPDATE pagecontent SET content = '".$content."' WHERE title = '".$q."'";
$query=mysql_query($sql);
//echo $sql;
echo "<script language='javascript'>alert('提交成功!');location='page.php';</script>";

?>
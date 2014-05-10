<?php
header("Content-Type:text/html;charset=utf-8");
//    $content = '<table style="height: 156px; width: 700px; float: left;" border="1" width="700">
//<tbody>
//<tr>
//<td>&nbsp; 海旺中学</td>
//</tr>
//<tr>
//<td>&nbsp; 海滨中学</td>
//</tr>
//<tr>
//<td>&nbsp; 华一实验学校&nbsp;</td>
//</tr>
//<tr>
//<td>&nbsp; 宝安第一外国语学校</td>
//</tr>
//<tr>
//<td>&nbsp; 西乡中学&nbsp;</td>
//</tr>
//<tr>
//<td>&nbsp; 嵩岗中学&nbsp;</td>
//</tr>
//<tr>
//<td>&nbsp; 宝安区教育科学研究培训中心</td>
//</tr>
//<tr>
//<td>&nbsp; 北京师范大学&nbsp;</td>
//</tr>
//<tr>
//<td>&nbsp; 深圳宝安教委&nbsp;</td>
//</tr>
//</tbody>
//</table>';

$content = '<table style="height: 156px; width: 700px; float: left;" border="1" width="700">
<tbody>
<tr>
<td>&nbsp; <a href="/criterionbackmananger/manager/pagecooperation.php?id=1">海旺中学</a></td>
</tr>
<tr>
<td>&nbsp; <a href="/criterionbackmananger/manager/pagecooperation.php?id=2">海滨中学</a></td>
</tr>
<tr>
<td>&nbsp; <a href="/criterionbackmananger/manager/pagecooperation.php?id=3">华一实验学校</a>&nbsp;</td>
</tr>
<tr>
<td>&nbsp; <a href="/criterionbackmananger/manager/pagecooperation.php?id=4">宝安第一外国语学校</a></td>
</tr>
<tr>
<td>&nbsp; <a href="/criterionbackmananger/manager/pagecooperation.php?id=5">西乡中学</a>&nbsp;</td>
</tr>
<tr>
<td>&nbsp; <a href="/criterionbackmananger/manager/pagecooperation.php?id=6">嵩岗中学</a>&nbsp;</td>
</tr>
<tr>
<td>&nbsp; <a href="/criterionbackmananger/manager/pagecooperation.php?id=7">宝安区教育科学研究培训中心</a></td>
</tr>
<tr>
<td>&nbsp; <a href="/criterionbackmananger/manager/pagecooperation.php?id=8">北京师范大学</a>&nbsp;</td>
</tr>
<tr>
<td>&nbsp; <a href="/criterionbackmananger/manager/pagecooperation.php?id=9">深圳宝安教委</a>&nbsp;</td>
</tr>
</tbody>
</table>';

$content=preg_replace("/<a\s([\s\S]*?)>/","",$content);
$content=preg_replace("/<\/a>/","",$content);
print_r($content) ;
preg_match_all('/<td>(.*?)<\/td>/',$content,$rs);
//print_r($rs);

//include_once '../login/conn.php';
//@mysql_select_db($database) or die('can not find database!');
//mysql_query("drop table  cooperationList ;");
//$sql = "CREATE TABLE cooperationList
//(
//id int(11) not null auto_increment,
//title varchar(32),
//PRIMARY KEY (id)
//)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;";
//
//mysql_query($sql);

//$count = 0;
foreach($rs[0] as $t){
    $t = str_replace("&nbsp;","",$t);
    $t = preg_replace("/<td>/","",$t);
    $t = preg_replace("/<\/td>/","",$t);
    $t = preg_replace("/ /","",$t);
//    //mysql_query("INSERT INTO cooperationList (id, title) VALUES  ('".$count."','".$t."');");
    $content = preg_replace("/".$t."/","<a href='gog?id=".$count."'>".$t."</a>",$content);
//
    $count++;
    //echo $t;
}
  echo $content;


//$sql="select * from cooperationList";
//$query=mysql_query($sql);

?>
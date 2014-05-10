<?php
    header("Content-Type:text/html;charset=utf-8");
    $fullname = $_REQUEST['fullname'];
    $workExperice = $_REQUEST['workExperice'];
    $age = $_REQUEST['age'];
    $school = $_REQUEST['school'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $other = $_REQUEST['other'];
    $hometown = $_REQUEST['homeTown'];

    $content = "<table border='1'>
<tbody>
<tr>
<td>&nbsp;姓名</td>
<td>&nbsp;$fullname</td>
</tr>
<tr>
<td>&nbsp;年龄</td>
<td>&nbsp;$age</td>
</tr>
<tr>
<td>&nbsp;籍贯</td>
<td>&nbsp;$hometown</td>
</tr>
<tr>
<td>&nbsp;毕业院校 &nbsp;</td>
<td>&nbsp;$school</td>
</tr>
<tr>
<td>&nbsp;联系方式 &nbsp;&nbsp;</td>
<td>&nbsp;$phone</td>
</tr>
<tr>
<td>&nbsp;邮箱</td>
<td>&nbsp;$email</td>
</tr>
<tr>
<td>&nbsp;工作经历</td>
<td>&nbsp;$workExperice</td>
</tr>
<tr>
<td>&nbsp;备注</td>
<td>&nbsp;$other</td>
</tr>
</tbody>
</table>";

    if(strlen($fullname)&&strlen($workExperice)&&strlen($age)&&strlen($email)&&strlen($phone)&&strlen($hometown)){
        postmail_jiucool_com("jszhaishuai@163.com","应聘简历",$content);
    }else{
        echo "<script language='javascript'>alert('信息不完整,请重新填写!');location='../page.php?i=2';</script>";
    }





function postmail_jiucool_com($to,$subject = "",$body = ""){
    //Author:Jiucool WebSite: http://www.jiucool.com
    //$to 表示收件人地址 $subject 表示邮件标题 $body表示邮件正文
    //error_reporting(E_ALL);
    //error_reporting(E_STRICT);
    date_default_timezone_set("Asia/Shanghai");//设定时区东八区
    require_once('class.phpmailer.php');
    include("class.smtp.php");
    $mail             = new PHPMailer(); //new一个PHPMailer对象出来
    //$body             = preg_replace("[\]",'',$body); //对邮件内容进行必要的过滤
    $mail->CharSet ="UTF-8";//设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP(); // 设定使用SMTP服务
    $mail->SMTPDebug  = 1;                     // 启用SMTP调试功能
    // 1 = errors and messages
    // 2 = messages only
    $mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能
    //$mail->SMTPSecure = "ssl";                 // 安全协议
    $mail->Host       = "smtp.163.com";      // SMTP 服务器
    $mail->Port       = 25;                   // SMTP服务器的端口号
    $mail->Username   = "18253593382@163.com";  // SMTP服务器用户名
    $mail->Password   = "16899199";            // SMTP服务器密码
    $mail->SetFrom('18253593382@163.com', 'jimzhai');
    $mail->AddReplyTo("18253593382@163.com","jimzhai");
    $mail->Subject    = "应聘简历";
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer! - From www.jiucool.com"; // optional, comment out and test
    $mail->MsgHTML($body);
    $address = $to;
    $mail->AddAddress($address, "收件人名称");
    //$mail->AddAttachment("images/phpmailer.gif");      // attachment
    //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
    if(!$mail->Send()) {
        //echo "Mailer Error: " . $mail->ErrorInfo;
        echo "<script language='javascript'>alert('邮件发送失败!');location='../page.php?i=2';</script>";
    } else {
        echo "<script language='javascript'>alert('发送成功!');location='../page.php?i=2';</script>";
    }
}

?>

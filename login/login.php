<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>后台管理</TITLE>
    <META content="text/html; charset=utf-8" http-equiv=Content-Type>
    <STYLE type=text/css>* {
            FONT-SIZE: 9pt; OVERFLOW: hidden
        }
        BODY {
            MARGIN: 0px
        }
    </STYLE>

    <META name=GENERATOR content="MSHTML 8.00.6001.23520"></HEAD>
<BODY>
<FORM onsubmit="return chk(this);" method=post id="loginform" name="loginform"
      action="logincheck.php">
    <TABLE border=0 cellSpacing=0 cellPadding=0 width=940 bgColor=#ffffff
           align=center>
        <TBODY>
        <TR>
            <TD style="BACKGROUND: url(images/login01.jpg)" height=238>&nbsp;</TD></TR>
        <TR>
            <TD height=190>
                <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
                    <TBODY>
                    <TR>
                        <TD style="BACKGROUND: url(images/login02.jpg)" height=190
                            width=208>&nbsp;</TD>
                        <TD style="BACKGROUND: url(images/login03.jpg)" width=518>
                            <TABLE border=0 cellSpacing=0 cellPadding=0 width=320
                                   align=center><TBODY>
                                <TR>
                                    <TD height=35 width=40><IMG src="images/user.gif"
                                                                width=30 height=30></TD>
                                    <TD height=35 width=38>用户</TD>
                                    <TD height=35 width=242><INPUT value=""
                                                                   name="username"></TD></TR>
                                <TR>
                                    <TD height=35><IMG src="images/password.gif"
                                                       width=28 height=32></TD>
                                    <TD height=35>密码</TD>
                                    <TD height=35><INPUT size=30 type=password
                                                         name="userpass"></TD></TR>
                                <TR>
                                    <TD height=40>&nbsp;</TD>
                                    <TD height=40>&nbsp;</TD>
                                    <TD height=50><INPUT src="images/login.gif"
                                                         type=image name=submit> </TD></TR></TBODY></TABLE></TD>
                        <TD style="BACKGROUND: url(images/login04.jpg)"
                            width=214>&nbsp;</TD></TR></TBODY></TABLE></TD></TR>
        <TR>
            <TD style="BACKGROUND: url(images/login05.jpg)"
                height=133>&nbsp;</TD></TR></TBODY></TABLE></FORM>
<SCRIPT language=JavaScript type=text/JavaScript>
    function chk(a)
    {
        if (a.username.value=="")
        {
            alert ("请输入管理帐号！");
            a.username.focus();
            return false;
        }
        if (a.userpass.value=="")
        {alert("请输入管理密码");
            a.userpass.focus();
            return false;
        }

        a.submit.value="正在登陆中...";
        a.submit.disabled=true;
        a.Submit.disabled=true;
    }
</SCRIPT>
</BODY></HTML>
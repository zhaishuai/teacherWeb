<?php
include_once '../login/checkA.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>开端国际</title>
<link rel="stylesheet" type="text/css" href="../css/cssreset.css"/>
<link rel="stylesheet" type="text/css" href="../css/main.css"/>
<script src="../scripts/jquery-1.7.1.min.js"></script>
<script src="../scripts/base.js"></script>
    <script>
        function chk(a){
            if (a.olderUserName.value=="")
            {
                alert ("请输入旧用户名！");
                a.olderUserName.focus();
                return false;
            }
            if (a.olderPassWord.value=="")
            {alert("请输入旧密码");
                a.olderPassWord.focus();
                return false;
            }
            if (a.newUserName.value=="")
            {alert("请输入新用户名");
                a.newUserName.focus();
                return false;
            }
            if (a.newPassWord.value=="")
            {alert("请输入新密码");
                a.newPassWord.focus();
                return false;
            }
            if (a.confirmPassWord.value=="")
            {alert("请输入确认新密码");
                a.confirmPassWord.focus();
                return false;
            }



            if (a.newPassWord.value != a.confirmPassWord.value){
                alert("两次输入密码不一致:");
                return false;
            }

            if (a.newPassWord.value.length < 6){
                alert("密码不能小于6位");
                a.newPassWord.focus();
                return false;
            }


            a.submit.value="正在登陆中...";
            a.submit.disabled=true;


        };

    </script>
</head>
<body>

<div class="header ">

    <div class="header_top m0a w1003">
        <h1 class="logo f_l "><a href="" title="开端国际"><img src="../images/logo.jpg" alt="开端国际"/></a></h1>
        <!--<h2 class="logo f_l "><a href="####" title="开端国际"><img src="images/logo.jpg" alt="开端国际" border="0"/></a></h2>-->
        <div class="header_tophottel f_r"><img src="../images/toptelimg01.jpg"/></div>

        <ul class="menu f_r">
            <li><a href="../login/loginout.php"><span>注销</span></a></li>
            <li><a href="page.php?i=0"><span>联系</span></a></li>
            <li><a href="page.php?i=1"><span>关于</span></a></li>
            <li><a href="page.php?i=2"><span>招聘</span></a></li>
            <li><a href="page.php?i=3"><span>合作机构</span></a>

                <ul class="menu2">
                    <?php
                    include_once '../login/conn.php';
                    @mysql_select_db($database) or die('can not find database!');
                    $sql="select * from cooperationList";
                    $query=mysql_query($sql);
                    while($row = mysql_fetch_array($query)){
                        echo '<li><a href="pagecooperation.php?id='.$row["id"].'" ><span>'.$row["title"].'</span></a></li>';
                    }
                    ?>
                </ul>
            </li>
            <li><a href="page.php?i=3" class="select"><span>使用攻略</span></a>
            <ul class="menu2">
                <li><a href="page.php?i=13"><span>教师攻略</span></a></li>
                <li><a href="page.php?i=14"><span>学生攻略</span></a></li>
            </ul>
            </li>
            <li><a href="page.php?i=5"><span>功能介绍</span></a></li>
            <li><a href="page.php?i=6"><span>研发机构</span></a></li>
            <li><a href="page.php?i=7" class="select"><span>Criterion</span></a></li>
            <li><a href=""><span>密码管理</span></a></li>
        </ul>
      	<!--end menu-->

    </div>
    <!--end header_top-->

</div>
<!--end header-->



<div class="main">
    <div class="main_box m0a w1003 ">


        <div class="left">

            <div class="style1 ">
                <div class="style1_c ">
                    <div class="style1_show page_l_contact p25_12_30 lh12">


                        <!--start text-->
                        <img src="../images/contact01.jpg"/>
                        <ul class="txt">
                            <li>ETS 中国项目管理心</li>
                            <li>北京海淀区大柳树路15号富海国际港905A</li>
                            <li></li>
                        </ul>

                        <img src="../images/contact02.jpg"/>
                        <ul class="txt">
                            <li>24h Cell Phone：8610-13911909159</li>
                            <li></li>
                            <li>联系人：武老师</li>
                            <li>E-mail：wujitao@cita-edu.com</li>
                            <li>QQ：283875303</li>
                        </ul>
                        <!--end text-->


                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <!--end style1-->




        </div>
        <!--end left-->


        <div class="right">

            <div class="style2 ">
                <div class="style2_t">
                    <div class="style2_tr">
                        <h3>密码管理</h3>
                        <span class="breadcrumb">
                        <a href="#">密码管理</a>
                        </span>
                    </div>
                </div>
                <div class="style2_c p10_20_20">

                    <div class="style2_show lh30">


                       <br/>

                        <form onsubmit="return chk(this);" method=post action="newInfo.php">
                            <table border="0">
                                <tr>
                                    <td>旧用户名:</td><td><input type="text" name="olderUserName"/></td>
                                    <td>旧密码:</td><td><input type="password" name="olderPassWord"/></td>
                                </tr>
                                <tr>
                                    <td>新用户名:</td><td><input type="text" name="newUserName"/></td>
                                    <td>新密码:</td><td><input type="password" name="newPassWord"/></td>
                                    <td>确认新密码:</td><td><input type="password" name="confirmPassWord" /></td>
                                </tr>
                            </table>
                            <input type="submit" value="提交">
                        </form>

                        <br/>




                    </div>
                    <!--end style2_show-->

                    <div class="clear"></div>
                </div>
                <div class="style2_b"><div class="style2_br"></div></div>
            </div>
            <!--end style2-->

        </div>
        <!--end right-->







        <div class="clear"></div>
    </div>
</div>
<!--end main-->

<div class="footer">
    <div class="footer_box m0a w1250">

    <span class="ind_b">
        开端国际教育科技（北京）有限公司  Tel：8610-57257869  Add：北京市海淀区大柳树路15号富海国际港905A
    </span>

    <div class="clear"></div>
    </div>
</div>
<!--end footer-->

</body>
</html>

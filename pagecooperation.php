﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include_once 'login/conn.php';
@mysql_select_db($database) or die('can not find database!');
$sql="select title from cooperationList where id='".$_GET["id"]."';";
$query=mysql_query($sql);
$row = mysql_fetch_array($query);
?>
    <title><?php echo $row['title']."|开端国际";?></title>
    <link rel="stylesheet" type="text/css" href="css/cssreset.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script src="scripts/jquery-1.7.1.min.js"></script>
    <script src="scripts/base.js"></script>
    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
</head>
<body class="m_bg">

<div class="header ">

    <div class="header_top m0a w1003">
        <h1 class="logo f_l "><a href="http://www.headstart-edu.cn/" title="开端国际"><img src="images/logo.jpg" alt="开端国际"/></a></h1>
        <!--<h2 class="logo f_l "><a href="http://www.headstart-edu.cn/" title="开端国际"><img src="images/logo.jpg" alt="开端国际" border="0"/></a></h2>-->
        <div class="header_tophottel f_r"><img src="images/toptelimg01.jpg"/></div>

        <ul class="menu f_r">
            <li><a href="page.php?i=0"><span>联系我们</span></a></li>
            <li><a href="page.php?i=1"><span>关于开端</span></a>
                <ul class="menu2">
                    <li><a href="page.php?i=15"><span>开端介绍</span></a></li>
                    <li><a href="page.php?i=16"><span>ETS授权证书</span></a></li>
                    <li><a href="page.php?i=17"><span>培训师介绍</span></a></li>
                </ul>
            </li>
            <li><a href="page.php?i=2"><span>招聘精英</span></a></li>
            <li><a href="18"><span>合作机构</span></a>
                <ul class="menu2">
                    <li><a href="page.php?i=18"><span>机构名称</span></a></li>
                    <li><a href="page.php?i=19"><span>授权证书</span></a></li>
                </ul>
            </li>
            <li><a href="page.php?i=22" class="select"><span>新闻中心</span></a></li>
            <li><a href="page.php?i=5"><span>功能特色</span></a></li>
            <li><a href="page.php?i=6"><span>研发机构</span></a></li>
            <li><a href="page.php?i=7"><span>Criterion</span></a>
                <ul class="menu2">
                    <li><a href="page.php?i=4"><span>使用攻略</span></a></li>
                    <li><a href="page.php?i=20"><span>常见问题</span></a></li>
                    <li><a href="page.php?i=21"><span>下载专区</span></a></li>
                </ul>
            </li>
            <li><a href="http://www.headstart-edu.cn/"><span>首页</span></a></li>
        </ul>
        <!--end menu-->

    </div>
    <!--end header_top-->

</div>
<!--end header-->

<div class="p_banner ">

</div>
<!--end p_banner-->

<div class="main ">
    <div class="main_box m0a w1003 ">


        <div class="left">

            <div class="style1 ">
                <div class="style1_c ">
                    <div class="style1_show page_l_contact p25_12_30 lh12">


                        <!--start text-->
                        <a href="https://criterion.ets.org/criterion/Default.aspx?ReturnUrl=%2fcriterion"><img src="images/login.jpg"/></a>
                        <ul class="txt">
                            <li><a href="javascript:changetext('13')"><img  src="images/teacher.png"/>Criterion教师快捷入门</a></li>
                            <li><a href="javascript:changetext('14')"><img  src="images/student.png"/>Criterion学生快捷入门</a></li>
                            <li><a href="javascript:changetext('20')"><img  src="images/question.png"/>常见问题</a></li>
                            <li><a href="javascript:changetext('21')"><img  src="images/download.png"/>下载专区</a></li>

                        </ul>
                        <img src="images/contact01.jpg"/>
                        <ul class="txt">
                            <li>Criterion 中国管理中心</li>
                            <li>北京海淀区大柳树路15号富海国际港905A</li>
                            <li></li>
                        </ul>

                        <img src="images/contact02.jpg"/>
                        <ul class="txt">
                            <li>电话：</li>
                            <li>8610-57257869</li>
                            <li>010-57257857</li>
                            <li>4008733339</li>
                            <li>联系人：武老师 13911909159</li>
                            <li>E-mail：wujitao@cita-edu.com</li>
                            <li>QQ：283875303</li>
                            <li><img src="images/cmd.jpg"></li>
                            <li></li>
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
                        <?php
                        echo '<h3 id="ititle">';

                            echo $row['title'];
                            echo '</h3>';
                            echo '<span class="breadcrumb">';
                            echo '<a href="http://www.headstart-edu.cn/">首页</a>&nbsp;&gt;&gt;&nbsp;<a href="page.php?i=3">合作机构</a>&nbsp;&gt;&gt;&nbsp;<a href="">'.$row['title'].'</a>';
                        ?>
                    </span>

                    </div>
                </div>
                <div class="style2_c p10_20_20" align="justify">

                    <?php
                    include_once 'login/conn.php';
                    @mysql_select_db($database) or die('can not find database!');
                    $sql="select content from cooperation where id='".$_GET["id"]."';";
                    $query=mysql_query($sql);
                    $row = mysql_fetch_array($query);
                    echo $row['content']; ?>

                    <!--end style2_show-->
                    <div class="clear"></div>
                </div>
                <div class="style2_b" ><div class="style2_br"></div></div>
            </div>
            <!--end style2-->

        </div>
        <!--end right-->







        <div class="clear"></div>
    </div>
</div>
<!--end main-->

<div class="footer ">
    <div class="footer_box m0a w1003">
    
    <span class="f_l b_nav">
        <a href="javascript:changetext('0')">联系我们</a>&nbsp;|&nbsp;<a href="javascript:changetext('2')">招聘精英</a>&nbsp;|&nbsp;<a href="javascript:changetext('1')">关于我们</a>
    </span>
     <span class="f_l b_nav">
         <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;开端国际教育科技（北京）有限公司 Tel：8610-57257869 Add：北京市海淀区大柳树路15号富海国际港905A  <br/>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;备案号：京ICP备14014509号-1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;京公网安备11010802011471号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.boguane.com">烟台博冠网络科技有限公司设计制作</a>
         </p>
    </span>
    
    <span class="f_l b_share">
        <span class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></span>
        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
    </span>

        <span class="f_r b_copy">COPYRIGHT &copy; 2013-2018 ALL RIGHTS RESERVED.</span>

        <div class="clear"></div>
    </div>
</div>
<!--end footer-->

</body>
</html>

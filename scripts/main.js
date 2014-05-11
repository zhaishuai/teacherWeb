
function GetXmlHttpObject()
    {
        var xmlHttp=null;
        try
        {
        // Firefox, Opera 8.0+, Safari
        xmlHttp=new XMLHttpRequest();
        }
catch (e)
        {
            // Internet Explorer
            try
            {
            xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
            }
catch (e)
            {
                xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
}
return xmlHttp;
}
;(function($)
    {
        $.extend(
            {
                urlGet:function()
                {
                    var aQuery = window.location.href.split("?");//取得Get参数
                    var aGET = new Array();
                    if(aQuery.length > 1)
                    {
                        var aBuf = aQuery[1].split("&");
                        for(var i=0, iLoop = aBuf.length; i<iLoop; i++)
                        {
                            var aTmp = aBuf[i].split("=");//分离key与Value
                            aGET[aTmp[0]] = aTmp[1];
                        }
}else
return 'null';
return aGET;
}
});
})(jQuery);
$(document).ready(function() {
    var GET = $.urlGet();
    var titleid = GET['i'];
    if(GET=='null')
    titleid = "7"
changetext(titleid);
});

function getTitle(num){
    titleid = num;
    switch (titleid){
        case "0":{
            titleid="联系我们";
        }break;
        case "1":{
            titleid="关于我们";
        }break;
        case "2":{
            titleid="招聘精英";
        }break;
        case "3":{
            titleid="合作机构";
        }break;
        case "4":{
            titleid="使用攻略";
        }break;
        case "5":{
            titleid="功能特色";
        }break;
        case "6":{
            titleid="研发机构";
        }break;
        case "7":{
            titleid="Criterion";
        }break;
        case "8":{
            titleid="课程核心";
        }break;
        case "9":{
            titleid="教学理念";
        }break;
        case "10":{
            titleid="讲故事";
        }break;
        case "11":{
            titleid="角色扮演";
        }break;
        case "12":{
            titleid="读者剧场";
        }break;
        case "13":{
            titleid="教师攻略";
        }break;
        case "14":{
            titleid="学生攻略";
        }break;
        case "15":{
            titleid="开端介绍";
        }break;
        case "16":{
            titleid="ETS授权开端";
        }break;
        case "17":{
            titleid="培训师介绍";
        }break;
        case "18":{
            titleid="合作学校";
        }break;
        case "19":{
            titleid="授权证书";
        }break;
        case "20":{
            titleid="常见问题";
        }break;
        case "21":{
            titleid="下载专区";
        }break;
        case "22":{
            titleid="新闻中心";
        }break;

        default :{
            titleid="Criterion";
        }
    }
return titleid;

}
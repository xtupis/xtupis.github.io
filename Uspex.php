<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Мемуары</title>
<meta name="generator" content="WYSIWYG Web Builder 16 - http://www.wysiwygwebbuilder.com">
<link href="invasion.png" rel="icon" sizes="128x128" type="image/png">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="MA_site.css" rel="stylesheet">
<link href="Uspex.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.overlay.min.js"></script>
<script>
$(document).ready(function()
{
   $(".SlideMenu1-folder a").click(function()
   {
      var $popup = $(this).parent().find('ul');
      if ($popup.is(':hidden'))
      {
         $("#SlideMenu1 > ul > li > ul").hide();
         $popup.show();
         $popup.attr('aria-expanded', 'true');
      }
      else
      {
         $popup.hide();
         $popup.attr('aria-expanded', 'false');
      }
   });
   $('#OverlayMenu1-overlay').overlay({hideTransition:true});
   $('#OverlayMenu1').on('click', function(e)
   {
      $.overlay.show($('#OverlayMenu1-overlay'));
      return false;
   });
});
</script>
</head>
<body>
<a id="Button1" href="./index.html" style="position:absolute;left:14px;top:262px;width:131px;height:23px;z-index:0;">О нас</a>
<a id="Button3" href="./vstypit.html" style="position:absolute;left:14px;top:364px;width:131px;height:23px;z-index:1;">Вступить в Альянс</a>
<a id="Button4" href="./sostav.html" style="position:absolute;left:14px;top:312px;width:131px;height:23px;z-index:2;">Наш состав</a>
<div id="wb_Text9" style="position:absolute;left:67px;top:1398px;width:155px;height:19px;z-index:3;">
<span style="color:#FFEBCD;font-family:Arial;font-size:17px;">Наши партнеры:</span></div>
<div id="wb_Text11" style="position:absolute;left:67px;top:1475px;width:200px;height:15px;z-index:4;">
<span style="color:#B0E0E6;font-family:Arial;font-size:13px;">Совет Нагакейборос</span></div>
<div id="wb_IconFont1" style="position:absolute;left:243px;top:1417px;width:61px;height:31px;text-align:center;z-index:5;">
<div id="IconFont1"><i class="fa fa-magic"></i></div></div>
<div id="wb_IconFont2" style="position:absolute;left:190px;top:1463px;width:54px;height:27px;text-align:center;z-index:6;">
<div id="IconFont2"><i class="fa fa-anchor"></i></div></div>
<div id="wb_JavaScript2" style="position:absolute;left:67px;top:1430px;width:188px;height:23px;z-index:7;">
<script>

/*
RAINBOW TEXT Script by Matt Hedgecoe (c) 2002
Featured on JavaScript Kit
For this script, visit http://www.javascriptkit.com
*/

var text="Высшая Магическая Комиссия";
var speed=80;

if (document.all||document.getElementById)
{
   document.write('<div style="font-family:Arial;font-size:13px;font-weight:normal;font-style:normal;text-align:left;text-decoration:none;" id="highlight">' + text + '<\/div>');
   var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight;
}
else
   document.write(text);

var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0");
var r=1;
var g=1;
var b=1;
var seq=1;
function changetext()
{
   rainbow="#"+hex[r]+hex[g]+hex[b];
   storetext.style.color=rainbow;
}
function change()
{
   if (seq==6)
   {
      b--;
      if (b==0)
        seq=1;
   }
   if (seq==5)
   {
      r++;
      if (r==12)
         seq=6;
   }
   if (seq==4)
   {
      g--;
      if (g==0)
         seq=5;
   }
   if (seq==3)
   {
      b++;
      if (b==12)
         seq=4;
   }
   if (seq==2)
   {
      r--;
      if (r==0)
         seq=3;
   }
   if (seq==1)
   {
      g++;
      if (g==12)
         seq=2;
   }
   changetext();
}

function starteffect()
{
   if (document.all||document.getElementById)
      flash=setInterval("change()",speed);
}
starteffect();
</script>

</div>
<div id="wb_JavaScript3" style="position:absolute;left:29px;top:1621px;width:510px;height:23px;z-index:8;">
<div style="color:#87CEEB;font-size:16px;font-family:Arial;font-weight:normal;font-style:normal;text-align:left;text-decoration:none" id="copyrightnotice"></div>
<script>
   var now = new Date();
   var startYear = "2018";
   var text =  "Copyright &copy; ";
   if (startYear != '')
   {
      text = text + startYear + "-";
   }
   text = text + now.getFullYear() + ", Олин Михаил. Все права зарегестрированы.";
   var copyrightnotice = document.getElementById('copyrightnotice');
   copyrightnotice.innerHTML = text;
</script>


</div>
<div id="wb_Text3" style="position:absolute;left:576px;top:58px;width:207px;height:45px;z-index:9;">
<span style="color:#FAFAD2;font-family:'Comic Sans MS';font-size:32px;"><strong>Успешно!</strong></span></div>
<div id="SlideMenu1" style="position:absolute;left:0px;top:401px;width:194px;height:234px;z-index:10;">
<ul role="menu">
   <li class="SlideMenu1-folder" aria-haspopup="true"><a>Архив№1</a>
      <ul role="menu" aria-expanded="true">
         <li><a role="menuitem" href="">Приказ №303</a></li>
         <li><a role="menuitem" href="">Мирный договор</a></li>
      </ul>
   </li>
   <li class="SlideMenu1-folder" aria-haspopup="true"><a>Архив№2</a>
      <ul role="menu" aria-expanded="true">
         <li><a role="menuitem" href="">Приказ №5063</a></li>
         <li><a role="menuitem" href="">Приказ №89</a></li>
      </ul>
   </li>
   <li class="SlideMenu1-folder" aria-haspopup="true"><a>Личный Архив Императора</a>
      <ul role="menu" aria-expanded="true">
         <li><a role="menuitem" href="./O_cosmose.html">О космосе</a></li>
         <li><a role="menuitem" href="./O_cosmose(TOM-II).html">О космосе(ТОМ II)</a></li>
         <li><a role="menuitem" href="./O_cosmose(TOM-III).html">О космосе(ТОМ III)</a></li>
      </ul>
   </li>
</ul>
</div>
<div id="wb_OverlayMenu1" style="position:absolute;left:0px;top:31px;width:133px;height:100px;z-index:11;">
<a href="#" id="OverlayMenu1">
<span class="line"></span>
<span class="line">
</span><span class="line"></span>
</a>
</div>
<div id="wb_Text1" style="position:absolute;left:458px;top:223px;width:392px;height:22px;z-index:12;">
<span style="color:#7CFC00;font-family:Arial;font-size:20px;">Письмо отправлено успешно!!!</span></div>
<div id="OverlayMenu1-overlay">
<div class="OverlayMenu1">
<ul class="drilldown-menu" role="menu">
<li><a role="menuitem" href="./index.html" class="OverlayMenu1-effect"><i class="fa fa-superpowers overlay-icon"></i>&#1054;&nbsp;&#1085;&#1072;&#1089;</a></li>
<li><a role="menuitem" href="./sostav.html" class="OverlayMenu1-effect"><i class="fa fa-empire overlay-icon"></i>&#1053;&#1072;&#1096;&nbsp;&#1089;&#1086;&#1089;&#1090;&#1072;&#1074;</a></li>
<li><a role="menuitem" href="./vstypit.html" class="OverlayMenu1-effect"><i class="fa fa-first-order overlay-icon"></i>&#1042;&#1089;&#1090;&#1091;&#1087;&#1080;&#1090;&#1100;&nbsp;&#1074;&nbsp;&#1040;&#1083;&#1100;&#1103;&#1085;&#1089;</a></li>
<li><a role="menuitem" href="./For_develop.html" class="OverlayMenu1-effect"><i class="fa fa-connectdevelop overlay-icon"></i>&#1044;&#1083;&#1103;&nbsp;&#1088;&#1072;&#1079;&#1088;&#1072;&#1073;&#1086;&#1090;&#1095;&#1080;&#1082;&#1086;&#1074;</a></li>
   </ul>
</div>
<a class="close-button" id="OverlayMenu1-close" href="#" role="button" aria-hidden="true"><span></span></a>
</div>
<div style="z-index:13">
<marquee id="breakingnews" style="padding:4px 0px 4px 0px;position:absolute;left:0px;top:0;background-color:#4169E1" onMouseover="this.scrollAmount=1" onMouseout="this.scrollAmount=20">
<span style="color:#FF6347;font-size:20px;font-family:Courier New Greek;font-weight:normal;font-style:normal;text-decoration:none">Шок! Господин облысел! ᅠᅠᅠᅠᅠᅠᅠᅠ Корпорация "Green Mesasoid" обогатилась на 15 млрд. кредитов. ᅠᅠᅠᅠᅠᅠᅠ Николай I поел дерьма!!!</span>
</marquee>
<script>
function initBreakingNews()
{
   var docWidth = 800;

   if (typeof window.innerWidth != 'undefined')
   {
      docWidth = window.innerWidth;
   }
   else 
   if (typeof document.documentElement != 'undefined' && typeof document.documentElement.clientWidth != 'undefined' && document.documentElement.clientWidth != 0)
   {
      docWidth = document.documentElement.clientWidth;
   }
   else
   {
      docWidth = document.getElementsByTagName('body')[0].clientWidth;
   }
   document.getElementById("breakingnews").style.width = docWidth.toString() + "px";
   document.getElementById("breakingnews").scrollAmount = 20;
   document.getElementById("breakingnews").scrollDelay = 20;
   document.getElementById("breakingnews").loop = -1;
}
if (document.getElementById)
{
   window.onload = initBreakingNews;
   window.onresize = initBreakingNews;
}
</script>
</div>
</body>
</html>
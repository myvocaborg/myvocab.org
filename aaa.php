<?php
session_start();
include("lib/connect_db.php");
$ip = $_SERVER['REMOTE_ADDR'];
$strSQL="INSERT INTO  stlog (ip, page ,dt) VALUES ('".$ip."',  'index', CURRENT_TIMESTAMP)"; 
$result = mysqli_query($link, $strSQL);

include('lib/menu.inc');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">



<script src="js/aaa.js" type="text/javascript"></script>




<body  onunload="check_exit()";>
<BR><div align="center"><font color="BLUE" ><b>СОЗДАНИЕ СЛОВАРНОГО ЗАПАСА АНГЛИЙСКОГО ЯЗЫКА.</b></div><BR>
<div align="left"><font style= "color:BLACK;">
<div align="left"><b><i>- Отмечаете по 25 новых слов  каждый день из читаемого  текста.</i></b></div><BR>
<div align="left"><b><i>- Повторяете уже отмеченные слова карточным методом по календарной/интервальной схеме.<BR>
Это порядка 150 – 200 слов в день, что занимает 10-15 мин.</i></b></div><BR>
<div align="left"><b><i>- Через год ваш словарный запас будет около 8 000 слов, что  достаточно для чтения оригинальных текстов.</i></b></div><BR><BR>

<BR><div align="center">   <b>Как работать с сайтом:</b></div><BR>
<div align="left">
&nbsp; &nbsp; &nbsp; &nbsp;1. Проходите простую регистрацию.  
<BR><BR>
&nbsp; &nbsp; &nbsp; &nbsp;2. Во вкладке "Текст" выбираете слова определенного текста.  Получаете список неповторяющихся слов теска в порядке их появления. 1 столбец показывает страницу, где впервые появляется это слово, 2 столбец - слово, 3 столбец  как часто встречается это слово в тексте. От слова можно перейти к местам в тексте, где оно встречается.  Начинать лучше с адаптированной литературы. После работы с порядка 10 книгами ваш словарный запас будет около 5 000 слов. Дальше слова будут просто повторяться. Текст можно читать online или скачать. 
<!--<div align="left"><font style="font-size:13px"  face="Arial"><a href="" id="c1" >подробнее>></a></font></div>--><BR><BR>
&nbsp; &nbsp; &nbsp; &nbsp;3. Во вкладке "Слова из текста" работаете со словами определенной страницы. Отмечаете слова, как “выученное” или “изучаемое”. Так же можете редактировать слово, транскрипцию или перевод. Затем читаете эту часть текста.  
<!--<div align="left"><font style="font-size:13px"  face="Arial"><a href="" id="c1" >подробнее>></a></font></div><BR>--><BR>

&nbsp; &nbsp; &nbsp; &nbsp;При выборе следующего текста, в полученном списке слов уже будут отмечены ваши выученные слова (которые можно  скрыть), изучаемые и новые.  То есть вы будите видеть, какие слова еще не встречались вам, какие вы изучаете и сколько слов в новом тексте вы уже знаете.<BR>
 <a href="helpTWords.php" id="c1" >Работа с вкладкой “Слова из текста”</a>
<!----<div align="left"><font style="font-size:13px"  face="Arial"><a href="" id="c1" >подробнее>></a></font></div>--><BR><BR>


&nbsp; &nbsp; &nbsp; &nbsp;4.Во вкладке "Мои слова" вы получите список слов, которые были отмечены в различных  текстах с датой, когда это слово было отмечено и возможностью перейти к месту в тексте, где это слово было отмечено. В этой вкладке есть различные варианты повторения слов, в том числе <a href="memCalendar.php" id="c1" >повторение слов по определенной календарной схеме</a> для более качественного запоминания слов.<BR><BR> 

&nbsp; &nbsp; &nbsp; &nbsp; Тексты все время пополняются. Можете присылать свой текст, а также вопросы, замечания и пожелания на e-mail : <font style="font-size:13px; color: blue;"  face="Arial">admin@myvocab.org </font>  

</div>
</body>
</html>
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



<script src="js/index.js" type="text/javascript"></script>




<body  onunload="check_exit()";>

<BR><div align="center"><font color="BLUE" ><b>СОЗДАНИЕ&nbsp СЛОВАРНОГО&nbsp ЗАПАСА&nbsp АНГЛИЙСКОГО&nbsp ЯЗЫКА<BR> <!--ДОСТАТОЧНОГО&nbsp ДЛЯ&nbsp ЧТЕНИЯ&nbsp ОРИГИНАЛЬНОЙ&nbsp ЛИТЕРАТУРЫ.--></b></div><BR><BR>
<div align="left"><font style= "color:BLACK;">
<div align="left"><b><i>- Отмечаете по 10 - 25 новых слов  каждый день из читаемого  текста. Что упрощает чтение и улучшает запоминание слов в контексте.</i></b></div><BR>
<div align="left"><b><i>- Повт111  уже отмеченные слова методом<a href="FlashCards.php" id="c1" >"Flash cards (карточки)"</a> по <a href="memCalendar.php" id="c1" >календарной/интервальной схеме.</a><BR>
Это порядка 150 – 200 слов в день, что занимает 10-15 мин.</i></b></div><BR>

<div align="left"><b><i>- В течение года вы создадите  свой словарный запас  достаточный для чтения оригинальной литературы. 
Затем  в любое время вы сможете повторять его здесь  (полностью или частями), дополнять, редактировать.    </i></b></div><BR>
<!--<div align="left"><b><i>- И вы создадите словарный запас достаточный для чтения оригинальных текстов.</i></b></div><BR>-->

<BR><div align="center">   <b>Как работать с сайтом:</b></div><BR>
<div align="left">

&nbsp; &nbsp; &nbsp; &nbsp;1. После регистрации, во вкладке "Текстыddd" выбираете  текст, с которым собираетесь работать. И нажимаете кнопку  “слова”. Получаете список неповторяющихся слов теска в порядке их появления. 1 столбец показывает страницу, где впервые появляется это слово, 2 столбец - слово, 3 столбец  как часто встречается это слово в тексте. От слова можно перейти к местам в тексте, где оно встречается. Текст можно читать online или скачать. 
<!--<div align="left"><font style="font-size:13px"  face="Arial"><a href="" id="c1" >подробнее>>>></a></font></div>--><BR><BR>
&nbsp; &nbsp; &nbsp; &nbsp;2. Во вкладке "Слова из текста" работаете со словами определенной страницы. Отмечаете слова, как “выученное” или “изучаемое”. Не  стоит отмечать все подряд незнакомые слова, если это не адаптированный текст. Пропускайте архаичную и высокопарную лексику, которой богата неадаптированная английская литература, а также  можете пропускать слово, если оно встречается 1 раз в тесте.  При необходимости редактируйте слово, транскрипцию или перевод. Затем читаете эту часть текста.  
<!--<div align="left"><font style="font-size:13px"  face="Arial"><a href="" id="c1" >подробнее>></a></font></div><BR>--><BR>

&nbsp; &nbsp; &nbsp; &nbsp;При выборе следующего текста, в полученном списке слов уже будут отмечены ваши выученные слова (которые можно  скрыть), изучаемые и новые.  То есть вы будите видеть, какие слова еще не встречались вам, какие вы изучаете и сколько слов в новом тексте вы уже знаете.<BR>
<a href="helpTWords.php" id="c1" >Работа с вкладкой “Слова из текста”</a><BR> 
<!--<div align="left"><font style="font-size:13px"  face="Arial"><a href="" id="c1" >подробнее>></a></font></div>--><BR>




&nbsp; &nbsp; &nbsp; &nbsp;3.Во вкладке "Мои слова" вы получите список слов, которые были отмечены в различных  текстах с датой, когда это слово было отмечено и возможностью перейти к месту в тексте, где это слово было отмечено. В этой вкладке есть различные варианты выбора диапазона слов для повторения, в том числе <a href="memCalendar.php" id="c1" >повторение слов по календарной/интервальной схеме</a>  для более качественного запоминания слов. После чего выбранные  слова повторяете методом <a href="FlashCards.php" id="c1" >"Flash cards (карточки)".</a><BR><BR>

<!--
<a href="helpMyWords.php" id="c1" >Работа с вкладкой “Мои слова”</a><BR>
<a href="helpRWords.php" id="c1" >Работа с вкладкой “Повторение слов”</a><BR><BR>
-->

&nbsp; &nbsp; &nbsp; &nbsp; Тексты все время пополняются. Можете присылать свой текст, а также вопросы, замечания и пожелания на e-mail : <font style="font-size:13px; color: blue;"  face="Arial">admin@myvocab.org </font>  

</div>
</body>
</html>
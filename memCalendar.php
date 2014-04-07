<?php
session_start();
include("lib/connect_db.php");
$ip = $_SERVER['REMOTE_ADDR'];
$strSQL="INSERT INTO  stlog (ip, page ,dt) VALUES ('".$ip."',  'memCalendar', CURRENT_TIMESTAMP)"; 
$result = mysqli_query($link, $strSQL);
include('lib/menu.inc');
?>
<html>

<head>
<meta http-equiv=Content-Type content="text/html;>
<meta name=Generator content="Microsoft Word 12 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	font-size:11.0pt;
    font-family:"Calibri","sans-serif";}
h2
	{mso-style-link:"Заголовок 2 Знак";
	margin-right:0cm;
	margin-left:0cm;
	font-size:18.0pt;
	font-family:"Times New Roman","serif";}
span.2
	{mso-style-name:"Заголовок 2 Знак";
	mso-style-link:"Заголовок 2";
	font-family:"Times New Roman","serif";
	font-weight:bold;}
span.apple-converted-space
	{mso-style-name:apple-converted-space;}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:2.0cm 42.5pt 2.0cm 3.0cm;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body lang=RU>

<div class=WordSection1>

<p class=MsoNormal style='text-align:center;background:white'><b><span
style='font-size:18.0pt;font-family:"Times New Roman","serif";color:black'>Календарь
повторения лексики (календарь памяти)</span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-indent:
35.4pt;line-height:normal'><span style='font-size:11.5pt;font-family:"Times New Roman","serif";
color:black;background:white'>Календарь памяти представляет собой график частоты
повторения изучаемых слов. Этот метод разработан немецким институтом,
занимающимся вопросами исследования памяти. Ученые установили, что если
повторять одну и ту же информацию с определенными промежутками времени, то она
заносится в долгосрочную активную память. Если долгое время не использовать
выученные таким методом слова, то они формируют активно-пассивный реестр
памяти, что дает возможность их воспроизведения при первой же необходимости.</span><span
style='font-size:11.5pt;font-family:"Times New Roman","serif";color:black'>&nbsp;</span><span
style='font-size:11.5pt;font-family:"Times New Roman","serif";color:black'><br>
<span style='background:white'>Как же правильно составить календарь памяти? Для
наглядности  предлагаем вам воспользоваться таблицей следующего содержания:</span><br>
<br>
<br>
</span></p>

<div align=center>

<table class=MsoNormalTable border=0 cellspacing=1 cellpadding=0 width="98%"
 style='width:98.0%;background:#111111'>
 <tr>
  <td width="12%" style='width:12.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>Дата изучения</span></p>
  </td>
  <td width="12%" style='width:12.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>+1 день</span></p>
  </td>
  <td width="12%" style='width:12.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>+1 день</span></p>
  </td>
  <td width="12%" style='width:12.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>+3 дня</span></p>
  </td>
  <td width="13%" style='width:13.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>+ неделя</span></p>
  </td>
  <td width="13%" style='width:13.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>+2 недели</span></p>
  </td>
  <td width="13%" style='width:13.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>+месяц</span></p>
  </td>
  <td width="13%" style='width:13.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>+месяц</span></p>
  </td>
 </tr>
 <tr>
  <td width="12%" style='width:12.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>10 сент.</span></p>
  </td>
  <td width="12%" style='width:12.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>11 сент.</span></p>
  </td>
  <td width="12%" style='width:12.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>12 сент.</span></p>
  </td>
  <td width="12%" style='width:12.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>15 сент.</span></p>
  </td>
  <td width="13%" style='width:13.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>22 сент.</span></p>
  </td>
  <td width="13%" style='width:13.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>6 окт.</span></p>
  </td>
  <td width="13%" style='width:13.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>6 нояб.</span></p>
  </td>
  <td width="13%" style='width:13.0%;background:white;padding:1.2pt 1.2pt 1.2pt 1.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  font-family:"Times New Roman","serif"'>6 дек.</span></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal><span style='font-size:11.5pt;line-height:115%;font-family:
"Times New Roman","serif";color:black'></p><br>
<span style='background:white'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Несложно подсчитать, что полный цикл запоминания
информации составляет почти три месяца. </span><br>
<span style='background:white'>Если уже выбран данный метод увеличения
словарного запаса, то стоит строго придерживаться графика повторения лексики и
не пропускать ни одного обозначенного дня, тогда эффект будет максимальным.</span></span></p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;В вкладке "Повторение слов" слова появляются максимально близко к этой схеме.   

</div>

</body>

</html>

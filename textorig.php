<?php

session_start();

include("lib/connect_db.php");
$ip = $_SERVER['REMOTE_ADDR'];
$strSQL="INSERT INTO  stlog (ip, page ,dt) VALUES ('".$ip."',  'textOring', CURRENT_TIMESTAMP)"; 
$result = mysqli_query($link, $strSQL);

  
/* 
if ($_SESSION['userName'] == NULL) {
            $_SESSION['mess'] = "Неправильный пароль или логин</b><BR>";
              header("Location:index.php");
              exit();
}
*/
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="js/textchoice.js" type="text/javascript"></script>

<title>Выбор текста</title>
<?php

include('lib/menu.inc');
//header("Location:../textwords.php");
?>
<head>
    

<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    </head>
<script language="javascript" type="text/javascript">


function ChTx(ch) {
     alert(ch);
       // var url = "cgi-bin/fillTable.php?ch="+ch;
       // request.open("GET", url, true);
       // request.onreadystatechange = updatePageTo;
    //    request.send(null);
        }
</script>

<body>

<div align="left"><font color="BLUE" >В файле для скачивания находится анг. текст,  русский текст и билингва.</font></div>   

<table style="position:relative;left:5px;top:10px;background-color:#FFFFFF;width:780px;height:0px;z-index:0;border:1px BLACK solid;" cellpadding="0" cellspacing="0" id="tbn">
<tbody>    


<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
John Steinbeck - The Pearl <BR>Джон Эрнст Стейнбек - Жемчужина<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=12';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=12&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=13&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
<td>
<font style="font-size:13px"  face="Arial"><a href="df.php?fd=myvocab.org/thePerl_John Steinbeck.rar" > <font style="font-size:13px" face="Arial">&nbsp;скачать&nbsp; </font></a>
</td>
</tr>

<!--
<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Truman Capote - In Cold Blood <BR>Труман Капоте - Хладнокровное убийство<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=16';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=16&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=17&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>



<tr>
<td style="border:2px solid grey; background:white;width:600px;font-family:Arial;font-size:14px;">
James - Fifty Shades Darker<BR>Джеймс  - Пятьдесят оттенков серого<BR> 
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10"    onclick= "document.location.href ='lib/compTextChoice.php?ch=29';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=29&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=30&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>
-->

<tr>
<td style="border:3px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Vonnegut Kurt - Slaughterhouse-Five, or The Children's Crusade<BR>Воннегут Курт  - Бойня номер пять, или Крестовый поход детей <BR> 
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=33';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=33&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=34&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
<td>
<font style="font-size:13px"  face="Arial"><a href="df.php?fd=myvocab.org/Vonnegut_Slaughterhouse-Five.rar" > <font style="font-size:13px" face="Arial">&nbsp;скачать&nbsp; </font></a>
</td>
</tr>

<tr>
<td style="border:3px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Ernest Hemingway - The Old Man And The See<BR>Эрнест Хемингуэй   - Старик и море <BR> 
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=41';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=41&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=42&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
<td>
<font style="font-size:13px"  face="Arial"><a href="df.php?fd=myvocab.org/hemingway_ernest_the_old_man_and_the_sea.rar" > <font style="font-size:13px" face="Arial">&nbsp;скачать&nbsp; </font></a>
</td>
</tr>

<tr>
<td style="border:3px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
J. D. Salinger - The catcher in the rye<BR>Джером Д.Сэлинджер   - Над пропастью во ржи <BR> 
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=43';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=43&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=44&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
<td>
<font style="font-size:13px"  face="Arial"><a href="df.php?fd=myvocab.org/The-Catcher-in-the-Rye.rar" > <font style="font-size:13px" face="Arial">&nbsp;скачать&nbsp; </font></a>
</td>
</tr>


<tr>
<td style="border:3px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
F. Scott Fitzgerald - The Great Gatsby<BR>Фрэнсис Скотт Фицджеральд   - Великий Гэтсби <BR> 
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=45';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=45&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=46&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
<td>
<font style="font-size:13px"  face="Arial"><a href="df.php?fd=myvocab.org/Ficdzherald_Velikiy-Getsbi.rar" > <font style="font-size:13px" face="Arial">&nbsp;скачать&nbsp; </font></a>
</td>
</tr>


<tr>
<td style="border:3px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Dashiell Hammett - Red Harvest<BR>Дэшил Хэммет   - Кровавая жатва <BR> 
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=47';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=47&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=48&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
<td>
<font style="font-size:13px"  face="Arial"><a href="df.php?fd=myvocab.org/Hemmet_The-Continental-Op_1_Red-Harvest.rar" > <font style="font-size:13px" face="Arial">&nbsp;скачать&nbsp; </font></a>
</td>
</tr>

<tr>
<td style="border:3px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
M. Connelly - City of Bones<BR>Майкл Коннелли   - Город костей <BR> 
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=49';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=49&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=50&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
<td>
<font style="font-size:13px"  face="Arial"><a href="df.php?fd=myvocab.org/Konnelli_Harry-Bosch_8_City-Of-Bones.rar" > <font style="font-size:13px" face="Arial">&nbsp;скачать&nbsp; </font></a>
</td>
</tr>

<tr>
<td style="border:3px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Winston Groom - Forrest Gump<BR>Уинстон Грум   - Форрест Гамп <BR> 
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=51';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=51&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=52&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
<td>
<font style="font-size:13px"  face="Arial"><a href="df.php?fd=myvocab.org/Grum_Forrest-Gump.rar" > <font style="font-size:13px" face="Arial">&nbsp;скачать&nbsp; </font></a>
</td>
</tr>



</tbody>
</table>    
    </body>

 
</html>
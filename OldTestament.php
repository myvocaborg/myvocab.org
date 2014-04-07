<?php

session_start();
  
/* 
if ($_SESSION['userName'] == NULL) {
            $_SESSION['mess'] = "Неправильный пароль или логин</b><BR>";
              header("Location:index.php");
              exit();
}
*/
include("lib/connect_db.php");
$ip = $_SERVER['REMOTE_ADDR'];
$strSQL="INSERT INTO  stlog (ip, page ,dt) VALUES ('".$ip."',  'NewTest', CURRENT_TIMESTAMP)"; 
$result = mysqli_query($link, $strSQL);

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



<table style="position:relative;left:5px;top:10px;background-color:#FFFFFF;width:780px;height:0px;z-index:0;border:1px BLACK solid;" cellpadding="0" cellspacing="0" id="tbn">
<tbody>    


<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Genesis - Бытие<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=200';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=200&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=250&ch=1' , '_blank');" name="" value="Читать рус." >
</td>

</tr>


<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Exodus - Исход<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=201';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=201&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=251&ch=1' , '_blank');" name="" value="Читать рус." >
</td>

</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Leviticus - Левит<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=202';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=202&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=252&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Numbers - Числа<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=203';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=203&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=253&ch=1' , '_blank');" name="" value="Читать рус." >
</td>

</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Deuteronomy - Второзаконие<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=204';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=204&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=254&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Joshua - Книга Иисуса Навина<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=205';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=205&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=255&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Judges - Книга Судей израилевых<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=206';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=206&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=256&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Ruth - Книга Руфи<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=207';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=207&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=257&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The First Book of Samuel - Первая книга Царств<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=208';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=208&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=258&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The Second Book of Samuel - Вторая книга Царств<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=209';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=209&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=259&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The First Book of Kings - Третья книга Царств<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=210';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=210&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=260&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The Second Book of Kings - Четвертая книга Царств<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=211';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=211&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=261&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The First Book of Chronicles - Первая книга Паралипоменон<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=212';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=212&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=262&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The Second Book of Chronicles - Вторая книга Паралипоменон<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=213';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=213&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=263&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Ezra - Первая книга Ездры<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=214';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=214&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=264&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Nehemiah - Книга Неемии<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=215';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=215&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=265&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Esther - Вторая книга Ездры<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=216';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=216&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=266&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Job - Книга Иова<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=217';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=217&ch=1' , '_blank');" name="" value="Читать анг." >
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=267&ch=1' , '_blank');" name="" value="Читать рус." >
</td>


</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The Psalms - Псалтирь<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=218';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=218&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=268&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Proverbs - Притчи Соломона<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=219';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=219&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=269&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Ecclesiastes - Книга Екклезиаста<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=220';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=220&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=270&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Song of Solomon - Песнь песней Соломона<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=221';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=221&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=271&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Isaiah - Книга пророка Исаии<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=222';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=222&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=272&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Jeremiah - Книга пророка Иеремии<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=223';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=223&ch=1' , '_blank');" name="" value="Читать анг." >
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=273&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</td>

</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Lamentations - Плач Иеремии<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=224';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=224&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=274&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Ezekiel - Книга пророка Иезекииля<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=225';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=225&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=275&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Daniel - Книга пророка Даниила<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=226';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=226&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=276&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The Book of  Hosea - Книга пророка Осии<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=227';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=227&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=277&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Joel - Книга пророка Иоиля<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=228';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=228&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=278&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Amos - Книга пророка Амоса<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=229';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=229&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=279&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Obadiah - Книга пророка Авдия<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=230';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=230&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=280&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Jonah - Книга пророка Ионы<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=231';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=231&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=281&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Micah - Книга пророка Михея<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=232';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=232&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=282&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Nahum - Книга пророка Наума<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=233';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=233&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=283&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Habakkuk - Книга пророка Аввакума<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=234';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=234&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=284&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Zephaniah - Книга пророка Софонии<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=235';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=235&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=285&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Haggai - Книга пророка Аггея<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=236';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=236&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=286&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Zechariah - Книга пророка Захарии<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=237';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=237&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=287&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Malachi - Книга пророка Малахии<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=238';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=228&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=288&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

</tbody>
</table>    
    </body>

 
</html>
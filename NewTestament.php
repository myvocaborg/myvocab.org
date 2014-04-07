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
Matthew - Св. Евангелие от Матфея<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=100';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=100&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=101&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>


<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Mark - Св. Евангелие от Марка<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=102';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=102&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=103&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>


<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Luke - Св. Евангелие от Луки<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=104';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=104&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=105&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>


<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
John - Св. Евангелие от Иоанна<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=106';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=106&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=107&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>



<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Acts - Деяния святых апостолов<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=108';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=108&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=150&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s Letter to the Romans - Послание к Римлянам святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=109';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=109&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=151&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s First Letter to the Corinthians - Первое послание к Коринфянам святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=110';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=110&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=152&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s Second Letter to the Corinthians - Второе послание к Коринфянам святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=111';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=111&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=153&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s Letter to the Galatians - Послание к Галатам святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=112';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=112&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=154&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s Letter to the Ephesians - Послание к Ефесянам святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=113';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=113&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=155&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s Letter to the Philippians - Послание к Филиппийцам святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=114';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=114&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=156&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s Letter to the Colossians - Послание к Колоссянам святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=115';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=106&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=157&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;"> 
Paul’s First Letter to the Thessalonians - Первое послание к Фессалоникийцам (Солунянам) святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=116';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=116&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=158&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s Second Letter to the Thessalonians - Второе послание к Фессалоникийцам (Солунянам) святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=117';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=117&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=159&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s First Letter to Timothy - Первое послание к Тимофею святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=118';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=118&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=160&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s Second Letter to Timothy - Второе послание к Тимофею святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=119';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=119&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=161&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s Letter to Titus - Послание к Титу святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=120';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=120&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=162&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Paul’s Letter to Philemon - Послание к Филимону святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=121';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=121&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=163&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The Letter to the Hebrews - Послание к Евреям святого апостола Павла<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=122';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=122&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=163&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The Letter from James - Соборное послание святого апостола Иакова<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=123';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=123&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=164&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Peter’s First Letter - Первое соборное послание святого апостола Петра<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=124';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=124&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=165&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Peter’s Second Letter - Второе соборное послание святого апостола Петра<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=125';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=125&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=166&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
John’s First Letter - Первое соборное послание святого апостола Иоанна<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=126';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=126&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=167&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
John’s Second Letter - Второе соборное послание святого апостола Иоанна<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=127';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=127&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=168&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
John’s Third Letter - Третье соборное послание святого апостола Иоанна<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=128';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=128&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=169&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The Letter from Jude - Соборное послание святого апостола Иуды<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=129';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=129&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=170&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<tr>
<td style="border:2px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
The Revelation to John - Откровение святого Иоанна Богослова<BR>
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=130';" name="" value="Слова " >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=130&ch=1' , '_blank');" name="" value="Читать анг." >
</td>

<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=171&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>





</tbody>
</table>    
    </body>

 
</html>
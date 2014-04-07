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
$strSQL="INSERT INTO  stlog (ip, page ,dt) VALUES ('".$ip."',  'textSerial', CURRENT_TIMESTAMP)"; 
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




<table style="position:relative; left:5px;top:10px;background-color:#FFFFFF;width:780px;height:0px;z-index:0;border:1px BLACK solid;" cellpadding="0" cellspacing="0" id="tbn">
<tbody>    



<tr>
<td style="border:1px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Друзья - 1 сезон(24 серии)  / friends 1 season
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=28';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=28&ch=1' , '_blank');" name="" value="Читать анг." >
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=53&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<!--  WORK SAMPLE
<tr>
<td style="border:1px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Друзья - 4 сезон(24 серии)     
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=20';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=20&ch=1' , '_blank');" name="" value="Слова анг." >
</tr>
-->

<tr>
<td style="border:1px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
Теория большого взрыва - 1 сезон(17 серий)/ The big bang theory  1 season   
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=35';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=35&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=36&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>

<!--  WORK SAMPLE
<tr>
<td style="border:1px solid grey;background:white;width:600px;font-family:Arial;font-size:14px;">
1_1 теория большого взрыва / the big bang theory     
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "document.location.href ='lib/compTextChoice.php?ch=31';" name="" value="Слова " >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=31&ch=1' , '_blank');" name="" value="Читать анг." >
</td>
<td style="border:1px solid grey;background:white;width:5px;">
<input type="submit" id="ChTx10" onclick= "window.open('text.php?page=0&cBook=32&ch=1' , '_blank');" name="" value="Читать рус." >
</td>
</tr>
-->
</tbody>
</table>    
    </body>

 
</html>
<?php

session_start();
/*
if ($_SESSION['userName'] == NULL) {
        header("Location:../index.php");
              exit();
}
*/
include("lib/connect_db.php");
//echo $_GET["page"].'@(@'.$_GET["cBook"];


$ch= $_GET["ch"];
$page = $_GET["page"];
if($_GET["page"]==0){$page=1;}
$cBook=$_GET["cBook"];
$wordSeek=$_GET["wordSeek"];
//$wordSeek="table";

$userId=$_SESSION['userId'];

 if ($ch==1){
 if($_GET["page"]!=0){
$strSQL = "UPDATE infotmp".$userId."  SET infotmp".$userId.".FieldValue = " . $page . " WHERE (infotmp".$userId.".FieldName = 'p".$cBook."')";
$result = mysqli_query($link, $strSQL);
 }
 }




$strSQL = "SELECT infotmp".$userId.".FieldName FROM infotmp". $userId . " WHERE (infotmp".$userId.".FieldName =
'p" . $cBook . "')";
$result = mysqli_query($link, $strSQL);
   if (mysqli_num_rows($result) == 0) {
$strSQL = "INSERT INTO infotmp".$userId." (FieldName, FieldValue) SELECT 'p".$cBook."', ".$page;
$result = mysqli_query($link, $strSQL);}
if($_GET["page"]==0){
$strSQL = "SELECT infotmp".$userId.".* FROM infotmp". $userId . " WHERE (infotmp".$userId.".FieldName =
'p" . $cBook . "')";
$res = mysqli_query($link, $strSQL); $row = mysqli_fetch_array($res);
 $page= $row[FieldValue];


 

}





// Получение данных их таблицы InfoTmp
$res = mysqli_query($link, 'SELECT infotmp'. $userId .'.* FROM infotmp'. $userId.' WHERE FieldName="CBook"' );
//while ($row = mysqli_fetch_array($res)){echo $row['FieldValue']."book";}

// End Получение данных их таблицы InfoTmp
$res = mysqli_query($link,'SELECT t'. $cBook.'.* FROM  t'. $cBook);
$npages = mysqli_num_rows($res);

$strSQL='SELECT t'. $cBook.'.txt FROM  t'. $cBook.' WHERE id='.$page;
$res = mysqli_query($link, $strSQL);
while ($row = mysqli_fetch_array($res)){$cPageText = $row[0];}
$res = mysqli_query($link, 'SELECT books.* FROM books WHERE idBook='.$cBook );
while ($row = mysqli_fetch_array($res)){$nameBook = $row['nameBook'];}   
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="js/textwords.js" type="text/javascript"></script>
<script src="js/setfunct.js" type="text/javascript"></script>
<title>Текст<?php echo "-".$nameBook; ?></title>
<head>
 
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body id="body_words" onLoad="">
<input type="text" id="pageOri"  style="display: none" name="pageOri" value="<?php echo htmlspecialchars($cPageText);?>">
<input type="text" id="wordSeek"  style="display: none" name="wordSeek" value="<?php echo $wordSeek; ?>">

<a class="memu_href" href="text.php?page=
<?php echo ($page-1); ?>&cBook=<?php echo $cBook; ?>&ch=<?php echo $ch; ?>" 
> <font style="font-size:13px" face="Arial">Предыдущая стр.</font></a>
<?php echo 'стр.'.$page.' из '. $npages; ?>
 &nbsp;&nbsp;
<a class="memu_href" href="text.php?page=
<?php echo ($page+1); ?>&cBook=<?php echo $cBook; ?>&ch=<?php echo $ch; ?>" 
> <font style="font-size:13px" face="Arial">Следующая стр.</font></a> &nbsp;&nbsp;&nbsp;на стр.
<input type="text" id="page"  style="text-align:center;width:30px;height:19px;" name="WEdit" value="<?php echo $page; ?>">
<input type="submit" id="goPage" onclick= "pg=document.getElementById('page').value; document.location.href ='text.php?page='+pg+'&cBook=<?php echo $cBook; ?>&ch=<?php echo $ch; ?>';" name="" value="Ok">

<br><br>
<div>
<script>
pageC=document.getElementById('pageOri').value ;
pageCtmp=pageC.replace(wordSeek,"<font color='red'>"+wordSeek+"</font>");

wordSeek=document.getElementById('wordSeek').value ;
document.getElementById('wordSeek').value="";
if (wordSeek==""){document.write(pageC);}
else {document.write(pageC.split(wordSeek).join("<font color='red'>"+wordSeek+"</font>"));}

//document.write(pageC);
//pageCtmp = pageCtmp.replace(wordSeek,"<font color='red'>"+wordSeek+"</font>");
</script>
</div>
<?php echo $cPageTextNN; ?>


<br>
<a class="memu_href" href="text.php?page=
<?php echo ($page-1); ?>&cBook=<?php echo $cBook; ?>&ch=<?php echo $ch; ?>" 
> <font style="font-size:13px" face="Arial">Предыдущая стр.</font></a>
<?php echo 'стр.'.$page.' из '. $npages; ?>
 &nbsp;&nbsp;
<a class="memu_href" href="text.php?page=
<?php echo ($page+1); ?>&cBook=<?php echo $cBook; ?>&ch=<?php echo $ch; ?>" 
> <font style="font-size:13px" face="Arial">Следующая стр.</font></a> &nbsp;&nbsp;&nbsp;  на стр.
<input type="text" id="pageD"  style="text-align:center;width:30px;height:19px;" name="WEdit" value="<?php echo $page; ?>">
<input type="submit" id="goPageD" onclick= "pg=document.getElementById('pageD').value; document.location.href ='text.php?page='+pg+'&cBook=<?php echo $cBook; ?>&ch=<?php echo $ch; ?>';" name="" value="Ok">

      
      
<script language="javascript" type="text/javascript">  
//document.write("111"+document.getElementById("s3").innerHTML);
</script>
</body>

</html>

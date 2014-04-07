<?php
session_start();
if ($_SESSION['userName'] ==NULL) {
        header("Location:../index.php");
              exit();
}
 
include("connect_db.php");

$userId=$_SESSION['userId'];

$wordO=Trim($_GET["wordO"]); 
$wordE=Trim($_GET["wordE"]);
$cBook=Trim($_GET["cBook"]);


// Получение данных их таблицы InfoTmp
// Получение данных их таблицы InfoTmp
if ($cBook == 1){
$res = mysqli_query($link, 'SELECT infotmp'. $userId .'.* FROM infotmp'. $userId.' WHERE FieldName="CBook"' );
while ($row = mysqli_fetch_array($res)){$cBook = $row['FieldValue'];}
}

// End Получение данных их таблицы InfoTmp
//if ($chval=="s"){$cBook=0;}
if ($cBook == 0){
$res = mysqli_query($link, 'SELECT mvdone'. $userId .'.* FROM mvdone'. $userId.' WHERE wordE="'.$wordE.'"' );
while ($row = mysqli_fetch_array($res)){$cBook = $row['NT']; $wordO = $row['wordO'];}  
}
 
$res = mysqli_query($link, 'SELECT books.* FROM books WHERE idBook='.$cBook );
while ($row = mysqli_fetch_array($res)){$nameBook = $row['nameBook'];}  
  
//$nameBook = "aaaaa";


$strSQL =   'SELECT count(*) FROM word'. $cBook.'   WHERE wordO="'.$wordO.'"';
$res = mysqli_query($link, $strSQL); 
 while ($row = mysqli_fetch_array($res)){ $k = $row[0]; } 

 if  ($k>5){$k=5;}


 for ($i = 1; $i <= $k; $i++) {

$res = mysqli_query($link, 'SELECT word'. $cBook.'.* FROM  word'. $cBook.' WHERE wordO="'.$wordO.'"  limit '.($i-1).',1 ');
while ($row = mysqli_fetch_array($res)){  $id = $row['NS']; $np[$i-1]=$row['NP'];}


$res = mysqli_query($link, 'SELECT s'. $cBook.'.* FROM  s'. $cBook.' WHERE id="'.$id.'"  limit 1 ');
while ($row = mysqli_fetch_array($res)){  $ns[$i-1] = $row['sentence']; }

 }



?>




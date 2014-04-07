<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:index.php");
              exit();
}

$userId=$_SESSION['userId'];
include("connect_db.php");

$strSQL = 'SELECT COUNT(*) FROM mvr'. $userId .' WHERE (flag>0) ORDER BY flag';
$res = mysqli_query($link, $strSQL); $row = mysqli_fetch_array($res); $NRAll = $row[0]; 


for ($i = 1; $i <= $NRAll; $i++) {
$k=($NRAll+1-$i);
$strSQL ='UPDATE mvr'. $userId .' SET flag='.rand().' WHERE flag>0 ORDER BY id  LIMIT '.$k;
$result = mysqli_query($link, $strSQL);
}
$res = mysqli_query($link, 'UPDATE infotmp'. $userId .' SET FieldValue=0 WHERE (FieldName="learnIdStartPageRange")');

header("Location:../learnwordsrange.php");

//echo date("Y.m.d", $dlStamp)."//".date(m, $dlStamp)."//".date(Y, $dlStamp);
?>


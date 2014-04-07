<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:index.php");
              exit();
}

$userId=$_SESSION['userId'];
include("connect_db.php");

if ($_GET["chval"] =="s"){$wl = "mvs". $userId; $wln = "mvs"; }
if ($_GET["chval"] =="r"){$wl = "mvr". $userId; $wln = "mvr";}
if ($_GET["chval"] =="v"){$wl = "mvv". $userId; $wln = "mvv";}
$strSQL = 'SELECT COUNT(*) FROM '. $wl .' WHERE (flag>0) ORDER BY flag';
$res = mysqli_query($link, $strSQL); $row = mysqli_fetch_array($res); $NRAll = $row[0]; 


for ($i = 1; $i <= $NRAll; $i++) {
$k=($NRAll+1-$i);
$strSQL ='UPDATE '. $wl .' SET flag='.rand().' WHERE flag>0 ORDER BY id  LIMIT '.$k;
$result = mysqli_query($link, $strSQL);
}
$res = mysqli_query($link, 'UPDATE infotmp'. $userId .' SET FieldValue=0 WHERE (FieldName="'.$wln.'")');
$str = 'Location:../learnwords.php?ch='.$_GET["chval"];
header( $str );

?>


<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:index.php");
              exit();
}

$userId=$_SESSION['userId'];
include("connect_db.php");
$dLearn = Trim($_GET["dLearn"]);
date_default_timezone_set('UTC');
$secInDay=86400;
$ttStart = mktime(0, 0, 0, substr($dLearn,5,2), substr($dLearn,8,2), substr($dLearn,0,4));
$ttEnd = $ttStart +$secInDay;



$strSQL = "SELECT COUNT(*) FROM mvdone". $userId ." WHERE (UNIX_TIMESTAMP(TimeClick)+".$mySqlTZ.">".($ttStart)." and pr=50 and m<>0)";
$res = mysqli_query($link, $strSQL); $row = mysqli_fetch_array($res); $NRAll = $row[0];
$strSQL = "SELECT COUNT(*) FROM mvdone". $userId ." WHERE (UNIX_TIMESTAMP(TimeClick)+".$mySqlTZ.">".($ttStart)." and pr=50 and m=1)";
$res = mysqli_query($link, $strSQL); $row = mysqli_fetch_array($res); $NOAll = $row[0];
$strSQL = "SELECT COUNT(*) FROM mvdone". $userId ." WHERE (UNIX_TIMESTAMP(TimeClick)+".$mySqlTZ.">".($ttStart)." and pr=50 and m=-1)";
$res = mysqli_query($link, $strSQL); $row = mysqli_fetch_array($res); $NEAll = $row[0];


//echo date("Y.m.d", $dlStamp)."//".date(m, $dlStamp)."//".date(Y, $dlStamp);
echo  $NRAll."@(@".$NOAll."@(@".$NEAll;
?>


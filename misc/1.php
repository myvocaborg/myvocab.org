<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:index.php");
              exit();
}
include("lib/connect_db.php");
$secInDay=86400;
date_default_timezone_set('UTC');
date_default_timezone_set('Europe/Kiev');
//date_default_timezone_set();
$userId=$_SESSION['userId'];
$timenow=mktime(0, 0, 0, 1, 1, 1970);
$timenow=mktime();
$strSQL="UPDATE mvdone". $userId ." SET mvdone". $userId .".idLearn = 0";
//$strSQL="UPDATE mvdone1 SET mvdone1.TimeClick = mvdone1.date50";
$result = mysqli_query($link, $strSQL);





//$strSQL="UPDATE mvdone". $userId ." SET mvdone". $userId .".TimeClick = mktime(0, 0, 0, substr(TimeClick,5,2), substr(TimeClick,8,2), substr(TimeClick,0,4))";
$result = mysqli_query($link, $strSQL);




$strSQL =   'SELECT date50,id FROM mvdone'. $userId .' ORDER BY id LIMIT 1';
$result = mysqli_query($link, $strSQL);

$row = mysqli_fetch_array($result); 
$dt = $row[date50];  

//echo $dt;

//$strSQL="INSERT INTO mvdone1 (wordE) VALUES('aaaaaa')";
//$result = mysqli_query($link, $strSQL);

$strSQL =   "SELECT TimeClick, id FROM mvdone1 ORDER BY id LIMIT 1";
$strSQL =   "SELECT UNIX_TIMESTAMP(mvdone1.TimeClick) AS TL, TimeClick, id FROM mvdone1 ORDER BY id LIMIT 1";
$strSQL =   "SELECT UNIX_TIMESTAMP(mvdone1.TimeClick) AS TL, TimeClick, wordE id FROM mvdone1 WHERE wordE='absolutely'";
//SELECT * FROM `mvdone1`  ORDER BY `mvdone1`.`idSort` DESC LIMIT 0 , 30


$result = mysqli_query($link, $strSQL);
$row = mysqli_fetch_array($result); 
$TL = $row[TL];  

$TimeClick = $row[TimeClick]; 
$TimeClickSt = mktime(0, 0, 0, substr($TimeClick,5,2), substr($TimeClick,8,2), substr($TimeClick,0,4));
$TL = $row[TL];

//echo $TimeClick." ".$TL." ".date('Y-m-d H:i:s', $TL)."   ".$timenow."   ".date('Y-m-d H:i:s', $timenow); 
echo date('Y-m-d H:i:s', 1372636800);
//echo now();
//echo $TL." ".$TimeClick." ".date('Y.m.d',$TL); 
//echo $TimeClick." ".$TimeClickSt." ".date('D, d M Y H:i:s', $TimeClickSt)." ".$TL;          
?> 
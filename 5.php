<?php
//echo mysql_tzinfo_to_sql(date_default_timezone_get());
//echo date_default_timezone_get();
include("lib/connect_db.php");
$secInDay=86400;
date_default_timezone_set('UTC');
$userId=3;
$timenow=mktime();
$strSQL = 'SELECT wordE, transl, transc, iterationE, iterationO, NS, date50, m, UNIX_TIMESTAMP(TimeClick) as StTC, ('.$timenow.'-(UNIX_TIMESTAMP(TimeClick)+'.$mySqlTZ.')) as  DivTC,  idLearn, TimeClick  FROM mvdone'. $userId .' ORDER BY DivTC  LIMIT 10';


echo $timenow." ".date('Y-m-d H:i:s', $timenow)."<br>".$mySqlTZ."<br>";
$res = mysqli_query($link, $strSQL);

while ($row = mysqli_fetch_array($res))
{ 

echo    $row['wordE'] ."--".$row['DivTC']."--".$row['StTC']."--".$row['TimeClick']."--".$row['idLearn']."--".$row['m']."<br>";
    }

echo  $strSQL;
?> 

<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:index.php");
              exit();
}

$userId=$_SESSION['userId'];
include("connect_db.php");
$secInDay=86400;
$beac=1;
$wLearn=htmlspecialchars($_GET["wLearn"]);


$result = mysqli_query($link, 'UPDATE mvr'. $userId .' SET flag=-1 WHERE (wordE="'.$wLearn.'")');
/*
$strSQL = 'SELECT COUNT(*) FROM mvr'. $userId .' WHERE  (flag<>-1)';
$res = mysqli_query($link, $strSQL); $row = mysqli_fetch_array($res); $beac=$row[0];

if ($row[0]==0){
$res = mysqli_query($link, 'SELECT infotmp'. $userId .'.* FROM infotmp'. $userId.' WHERE FieldName="learnDate"');
while ($row = mysqli_fetch_array($res))
{
   $dLearn = $row['FieldValue'];
}
    
$dLearn = mktime(0, 0, 0, substr($dLearn,5,2), substr($dLearn,8,2), substr($dLearn,0,4));
$dLearn = $dLearn + $secInDay;
$dLearn=date("Y.m.d", $dLearn);
$result = mysqli_query($link, 'UPDATE infotmp'. $userId .' SET FieldValue="'.$dLearn.'" WHERE (FieldName="learnDate")');

}
*/
echo   $beac;

?>


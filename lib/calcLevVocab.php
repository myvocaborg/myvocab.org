<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:index.php");
              exit();
}

$userId=$_SESSION['userId'];
include("connect_db.php");
$dLearn = Trim($_GET["dLearn"]);



$strSQL = 'SELECT COUNT(*) FROM mvdone'. $userId .' WHERE (pr=50 and flag=0)';
$res = mysqli_query($link, $strSQL); $row = mysqli_fetch_array($res); $NR50 = $row[0]; 

$strSQL = 'SELECT COUNT(*) FROM mvdone'. $userId .' WHERE (pr=100 and flag=0)';
$res = mysqli_query($link, $strSQL); $row = mysqli_fetch_array($res); $NR100 = $row[0]; 

$NR0=0;
$NRDel=0;

$strSQL = 'SELECT COUNT(*) FROM mvdone'. $userId .' WHERE (pr=50 and date50="'.$dLearn.'")';
$res = mysqli_query($link, $strSQL); $row = mysqli_fetch_array($res); $NRLearn = $row[0];

//echo date("Y.m.d", $dlStamp)."//".date(m, $dlStamp)."//".date(Y, $dlStamp);
echo $NR0.'@(@'.$NR50.'@(@'.$NR100.'@(@'.$NRDel.'@(@'.$NRLearn
?>


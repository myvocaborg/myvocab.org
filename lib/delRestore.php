<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:index.php");
              exit();
}
$userId=$_SESSION['userId'];
include("connect_db.php");
$we=trim($_GET["eWord"]); 
$ch=trim($_GET["ch"]);


if ($ch == -1) {
$strSQL = 'Delete mvdel'.$userId.'.* FROM mvdel'.$userId.' WHERE (((mvdel'.$userId.'.wordE)="'.$we.'"))' ;
$result = mysqli_query($link, $strSQL);   


$strSQL = 'Delete mvdone'.$userId.'.* FROM mvdone'.$userId.' WHERE (((mvdone'.$userId.'.wordE)="'.$we.'"))' ;
$result = mysqli_query($link, $strSQL);   



$strSQL = 'INSERT INTO mvdel'.$userId.' (wordE) VALUES ("'.$we.'")' ;
$result = mysqli_query($link, $strSQL);    

$strSQL = 'UPDATE mv'.$userId.' SET pr=-1 WHERE (wordE="'.$we.'")';
$result = mysqli_query($link, $strSQL);

}


if ($ch == 1) {
$strSQL1 = 'Delete mvdel'.$userId.'.* FROM mvdel'.$userId.' WHERE (((mvdel'.$userId.'.wordE)="'.$we.'"))' ;
$result = mysqli_query($link, $strSQL1);   

 
$strSQL = 'UPDATE mv'.$userId.' SET pr=0 WHERE (wordE="'.$we.'")';
$result = mysqli_query($link, $strSQL);
}



echo $ch.' '.$strSQL1;
//echo  $wo."@(@".$we."@(@".$tr;
?>
                                                               

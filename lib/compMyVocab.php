<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:../index.php");
              exit();
}
include("connect_db.php");
//$idtext=$_GET["ch"];
$userId=$_SESSION['userId'];

$strSQL = "DELETE mv".$userId.".* FROM mv". $userId;
$result = mysqli_query($link, $strSQL);

$strSQL = "ALTER TABLE  `mv" . $userId . "` DROP  `id`";
$result = mysqli_query($link, $strSQL);
//exit();
$strSQL = "ALTER TABLE  `mv" . $userId . "` ADD  `id` INT NOT NULL AUTO_INCREMENT FIRST ,
ADD UNIQUE (`id`)";
$result = mysqli_query($link, $strSQL);


$strSQL1 = "INSERT INTO mv".$userId." ( idSort, wordO, wordE, date50, pr )  
SELECT  mvdone" . $userId . ".id, mvdone" . $userId . ".wordE, mvdone" . $userId . ".wordE , mvdone" . $userId . ".date50, mvdone" . $userId . ".pr FROM mvdone" . $userId ." ORDER BY mvdone" . $userId .".date50 DESC" ;




$result = mysqli_query($link, $strSQL1);










$strSQL = "UPDATE mv".$userId." LEFT JOIN mvedit".$userId." ON mv".$userId.".wordE = mvedit".$userId.".wordE SET mv".$userId.".transl = mvedit".$userId.".transl, mv".$userId.".transc = mvedit".$userId.".transc 
WHERE ((Not (mvedit".$userId.".wordE) Is Null))";
$result = mysqli_query($link, $strSQL);



$strSQL = "UPDATE mv".$userId." LEFT JOIN mvedit ON mv".$userId.".wordE = mvedit.wordE SET mv".$userId.".transl = mvedit.transl, mv".$userId.".transc = mvedit.transc 
WHERE ((Not (mvedit.wordE) Is Null) and ((mv".$userId.".transl) is Null))";
$result = mysqli_query($link, $strSQL);





$strSQL = "UPDATE mv".$userId." LEFT JOIN mt ON mv".$userId.".wordE = mt.wordO SET mv".$userId.".transl = mt.transl, mv".$userId.".transc = mt.transc 
WHERE ((Not (mt.wordO) Is Null) AND ((mv".$userId.".transl) is Null))";
$result = mysqli_query($link, $strSQL);



$strSQL = "UPDATE infotmp".$userId."  SET infotmp".$userId.".FieldValue = 0 WHERE (infotmp".$userId.".FieldName = 'CBook')";
$result = mysqli_query($link, $strSQL);





$strSQL = "SELECT infotmp".$userId.".FieldName FROM infotmp". $userId . " WHERE (infotmp".$userId.".FieldName =
'idStartPage0')";
$result = mysqli_query($link, $strSQL);
   
   if (mysqli_num_rows($result) == 0) {
$strSQL = "INSERT INTO infotmp".$userId." (FieldName, FieldValue) SELECT 'idStartPage0', 1" ;
$result = mysqli_query($link, $strSQL);}
 
 $strSQL = "SELECT infotmp".$userId.".FieldName FROM infotmp". $userId . " WHERE (infotmp".$userId.".FieldName =
'b0')";
$result = mysqli_query($link, $strSQL);
   
   if (mysqli_num_rows($result) == 0) {
$strSQL = "INSERT INTO infotmp".$userId." (FieldName, FieldValue) SELECT 'b0', 1" ;
$result = mysqli_query($link, $strSQL);}



header("Location: ../textwords.php");
//echo $strSQL; 
?>


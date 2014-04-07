<?php
session_start();

if ($_SESSION['userName'] == NULL) {
            $_SESSION['mess'] = "???????????? ?????? ??? ?????</b><BR>";
              header("Location:index.php");
              exit();
}
$idUser=$_SESSION['userId'];
include("connect_db.php");
$strSQL= "DROP TABLE idsort1";
$result = mysqli_query($link, $strSQL);

$strSQL= "CREATE TABLE  idsort".$idUser." (
id INT( 11 ) NOT NULL AUTO_INCREMENT ,
 wordE VARCHAR( 255 ) DEFAULT NULL ,
UNIQUE KEY  id (  id ) 
) ENGINE = MYISAM DEFAULT CHARSET = utf8";
$result = mysqli_query($link, $strSQL);


$strSQL= "INSERT INTO idsort1 ( wordE )
SELECT mvdone1.wordE
FROM mvdone1
ORDER BY mvdone1.date50, mvdone1.idSort";
//ORDER BY mvdone1.date50 DESC , mvdone1.idSort DESC";

$result = mysqli_query($link, $strSQL);

$strSQL= "UPDATE idsort1 INNER JOIN mvdone1 ON idsort1.wordE = mvdone1.wordE SET mvdone1.id = idsort1.id";
$result = mysqli_query($link, $strSQL);

$strSQL= "DROP TABLE idsort1";
echo $strSQL;
//$strSQL= "INSERT INTO  idsort".$idUser." SELECT mvdone.wordE FROM  mvdone" ;
//$result = mysqli_query($link, $strSQL);


?>

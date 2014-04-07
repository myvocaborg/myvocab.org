<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:index.php");
              exit();
}
$userId=$_SESSION['userId'];
include("connect_db.php");
$idS=htmlspecialchars($_GET["iSort"]); 
$CBook=0;
//Get current book   
   $res = mysqli_query($link, 'SELECT FieldValue FROM infotmp'. $userId .' WHERE (FieldName="CBook")');
   while ($row = mysqli_fetch_array($res)){$CBook = $row[FieldValue];}
//End Get current book

//Get id from idSort   
    $res = mysqli_query($link, 'SELECT id FROM mv'. $userId .' WHERE (idSort='.$idS.')');
    while ($row = mysqli_fetch_array($res)){$idStart = $row[id];}
//End Get id from idSort


$result = mysqli_query($link, 'UPDATE infotmp'. $userId .' SET FieldValue='.$idStart.' WHERE (FieldName="b'.$CBook.'")');
Echo $_GET["iSort"]." ".$idStart;
?>


<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:index.php");
              exit();
}
$userId=$_SESSION['userId'];
include("connect_db.php");
$idS=htmlspecialchars($_GET["iSort"]); 

$result = mysqli_query($link, 'UPDATE infotmp'. $userId .' SET FieldValue='.$idS.' WHERE (FieldName="b0")');
Echo $_GET["iSort"];
?>


<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:index.php");
              exit();
}

$userId=$_SESSION['userId'];
include("connect_db.php");

$flagLearn=Trim($_GET["flagLearn"]); 

if ($flagLearn=="true")
        {$flagLearn = 1;}  
     else
        {$flagLearn = 0;} 

if (Trim($_GET["vocab"]) == "yes")
{
$result = mysqli_query($link, 'UPDATE infotmp'. $userId .' SET FieldValue='.$flagLearn.' WHERE (FieldName="vflagLearn")');
}
else
{
$result = mysqli_query($link, 'UPDATE infotmp'. $userId .' SET FieldValue='.$flagLearn.' WHERE (FieldName="flagLearn")');  
}

?>


<?php
session_start();
if ($_SESSION['userName'] == NULL) {
        header("Location:index.php");
              exit();
}

$userId=$_SESSION['userId'];
include("connect_db.php");

$dLearn=htmlspecialchars($_GET["dLearn"]);

$result = mysqli_query($link, 'UPDATE infotmp'. $userId .' SET FieldValue="'.$dLearn.'" WHERE (FieldName="learnDate")');
echo $dLearn;

?>


<?php
include("connect_db.php");
$ip = $_SERVER['REMOTE_ADDR'];
$strSQL="INSERT INTO  stlog (ip, page ,dt) VALUES ('".$ip."',  'exit', CURRENT_TIMESTAMP)"; 
$result = mysqli_query($link, $strSQL);
?>
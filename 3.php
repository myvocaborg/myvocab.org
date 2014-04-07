<?php
session_start();
include("lib/connect_db.php");
$ip = $_SERVER['REMOTE_ADDR'];
$strSQL="INSERT INTO  stlog (ip, page ,dt) VALUES ('".$ip."',  'index', CURRENT_TIMESTAMP)"; 
$result = mysqli_query($link, $strSQL);

include('lib/menu.inc');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">








<body  onunload="check_exit()";>

<script>
var nowdate=new Date();
var tz=nowdate.getTimezoneOffset()/60;

alert(tz);</script>


</body>
</html>
<?
/* session_start();
 if (!isset($_SESSION['user']))
     {   
         header ("Location: ../index.php");
     exit();
     }*/

//$FullFileName = urldecode($_GET['dwld']);
//$df = urldecode($_GET['fd']);
$FullFileName=urldecode($_GET['fd']);

include("lib/connect_db.php");
$ip = $_SERVER['REMOTE_ADDR'];
$strSQL="INSERT INTO  stlog (ip, page ,dt) VALUES ('".$ip."',  '".$FullFileName."', CURRENT_TIMESTAMP)"; 
$result = mysqli_query($link, $strSQL);




$FlSize = FileSize($FullFileName);
$str = "Content-Disposition: attachment; filename=".$FullFileName;
/*echo "GET  ".$_GET['df'];
echo "GET  ".$_POST['df'];
echo "GET  ".$_GET['dwld'];
echo "GET  ".$_POST['dwld'];
echo $str;*/
If(IsSet($_SERVER['HTTP_USER_AGENT']) and StrPos($_SERVER['HTTP_USER_AGENT'],'MSIE'))
Header('Content-Type: application/force-download');
Else
Header('Content-Type: application/octet-stream');

Header("Accept-Ranges: bytes");
Header("Content-Length: ".$FlSize);
Header($str);

ReadFile($FullFileName);
?>

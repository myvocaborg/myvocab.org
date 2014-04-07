<?php
session_start();
$userId=$_SESSION['userId'];
include("connect_db.php");
  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
  header('Cache-Control: no-store, no-cache, must-revalidate'); 
  header('Cache-Control: post-check=0, pre-check=0', FALSE); 
  header('Pragma: no-cache'); 
$CBook = 1; 
$idStart = 1;     
$limitSt = 0;
$strWHERE = " WHERE ((";
$idCurr=1;
$NimInTable=1;

$ow='lost';
///$ow=$_GET["oWord"];
$strSQL =   'SELECT flag FROM mvr'. $userId .' WHERE wordE="'.Trim($_GET["eWord"]).'" ORDER BY flag';
$res = mysqli_query($link, $strSQL);
while ($row = mysqli_fetch_array($res)){$flagCurr = $row[0];}

 
    
 



 
$strSQL =   'SELECT id, wordE, transl, date50, transc FROM mvr'. $userId .' WHERE flag>'.$flagCurr.
' ORDER BY flag LIMIT 0,1';


$res = mysqli_query($link, $strSQL);

 
     


while ($row2 = mysqli_fetch_array($res))
{ 

    $mvTrnsl = htmlspecialchars($row2['transl'], ENT_QUOTES, 'utf-8');
    $mvTrnsc = htmlspecialchars($row2['transc'], ENT_QUOTES, 'utf-8');
	$mvFlag = $row2['id'];
	$mvW = $row2['wordE'];
    $mvDate = substr($row2['date50'],0,4).".".substr($row2['date50'],5,2).".".substr($row2['date50'],8,2); 
}


mysqli_close($link);
echo $mvFlag."@(@".$mvW."@(@".$mvTrnsl."@(@".$mvTrnsc."@(@".$mvDate;
//echo $flagCurr;
?>


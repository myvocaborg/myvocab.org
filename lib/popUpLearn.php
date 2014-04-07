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
$_GET["chval"] = Trim($_GET["chval"]);
//$ow='lost';
///$ow=$_GET["oWord"];

if ($_GET["chval"] == "s"){$wl = "mvs". $userId; $wln = "mvs";}
if ($_GET["chval"] == "r"){$wl = "mvr". $userId; $wln = "mvr";}
//$wl = "mvs". $userId;
$strSQL =   'SELECT flag FROM '. $wl .' WHERE wordE="'.Trim($_GET["eWord"]).'" ORDER BY flag';
$res = mysqli_query($link, $strSQL);
while ($row = mysqli_fetch_array($res)){$flagCurr = $row[0];}

 
    
 



 
$strSQL =   'SELECT id, wordE, wordO, transl, pr, date50, transc FROM '. $wl .' WHERE flag>'.$flagCurr.
' ORDER BY flag LIMIT 0,1';


$res = mysqli_query($link, $strSQL);

 
     


while ($row2 = mysqli_fetch_array($res))
{ 

    $mvTrnsl = $row2['transl'];
    $mvTrnsc = $row2['transc'];
	$mvFlag = $row2['id'];
	$mvWE = $row2['wordE'];
    $mvPr = $row2['pr'];
     $mvWO = $row2['wordO'];
    $mvDate = substr($row2['date50'],0,4).".".substr($row2['date50'],5,2).".".substr($row2['date50'],8,2); 
}


mysqli_close($link);
echo $mvFlag."@(@".$mvWE."@(@".$mvTrnsl."@(@".$mvTrnsc."@(@".$mvDate."@(@".$mvPr."@(@".$mvWO;
//echo $_GET["chval"].$wl;
?>


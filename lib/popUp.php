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
$NW = 20;
$strWHERE = " WHERE ((";
$idCurr=1;
$NimInTable=1;

$ow='lost';
///$ow=$_GET["oWord"];
$strSQL =   'SELECT id FROM mv'. $userId .' WHERE wordO="'.Trim($_GET["oWord"]).'" ORDER BY id';
$res = mysqli_query($link, $strSQL);
while ($row = mysqli_fetch_array($res))
{
$idCurr = $row[0];
}

 
    
 
// Получение данных их таблицы InfoTmp
$res = mysqli_query($link, 'SELECT infotmp'. $userId .'.* FROM infotmp'. $userId );
while ($row = mysqli_fetch_array($res))
{
    $InfoTmp[$row['FieldName']] = $row['FieldValue'];
}
// End Получение данных их таблицы InfoTmp
 $CBook = $InfoTmp['CBook'];
 $idStart = $idCurr;


if ($InfoTmp['done0']==1) {$strWHERE = $strWHERE."((mv".$userId.".pr)=0) or ";}
if ($InfoTmp['done50']==1) {$strWHERE = $strWHERE."((mv".$userId.".pr)=50) or ";}
if ($InfoTmp['done100']==1) {$strWHERE = $strWHERE."((mv".$userId.".pr)=100) or ";}
if ($InfoTmp['flagdel']==1) {$strWHERE = $strWHERE."((mv".$userId.".pr)=-1) or ";} 
 $strWHEREAll = $strWHERE." 1=0) and (mv".$userId.".flag=0) and (mv".$userId.".id>=0) )";


 $strWHERE = $strWHERE." 1=0) and (mv".$userId.".flag=0) and (mv".$userId.".id>".$idStart.") )";



 
$strSQL =   'SELECT id, wordO, wordE, transl, idSort, pr, flag, date50, transc, m FROM mv'. $userId . 
$strWHERE.' ORDER BY id LIMIT 0,1';


$res = mysqli_query($link, $strSQL);

 
     


while ($row2 = mysqli_fetch_array($res))
{ 

    $mvTrnsl = htmlspecialchars($row2['transl'], ENT_QUOTES, 'utf-8');
    $mvTrnsc = htmlspecialchars($row2['transc'], ENT_QUOTES, 'utf-8');
	$mvidSort = $row2['idSort'];
	$mvW = $row2['wordE'];
    $mvDate = substr($row2['date50'],0,4).".".substr($row2['date50'],5,2).".".substr($row2['date50'],8,2); 
	$mvPr = $row2['pr'];
    $mvOW = $row2['wordO'];
}


mysqli_close($link);
echo $mvidSort."@(@".$mvW."@(@".$mvTrnsl."@(@".$mvTrnsc."@(@".$mvDate."@(@".$mvPr."@(@".$mvOW;
//echo $_GET["oWord"];
?>


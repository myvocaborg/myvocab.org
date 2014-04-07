<?php

if (!$link)
{
	$error = 'Unable to connect to the database server.';
	include 'error.html.php';
	exit();
}
$link = mysqli_connect('localhost', 'root', '');

if (!mysqli_set_charset($link, 'utf8'))
{
	$output = 'Unable to set database connection encoding.';
	include 'output.html.php';
	exit();
}

if (!mysqli_select_db($link, 'UpVocab'))
{
	$error = 'Unable to locate the words database.';
	include 'error.html.php';
	exit();
}


if ($_GET["idSBM"]!=0){
	$idSB = $_GET["idSBM"];
}
	else 
	{
$res = mysqli_query($link, 'SELECT idSort FROM mv WHERE (m=100) LIMIT 1');
while ($row2 = mysqli_fetch_array($res))
{
	$idToBook[] = $row2['idSort'];
}
$idSB=$idToBook[0];
   }
//$res = mysqli_query($link, 'SELECT idSort FROM mv WHERE (idSort>='.$idSB.') LIMIT 1');


//echo $idSB;
//	while ($row2 = mysqli_fetch_array($res))
//{
//	$idToBook[] = $row2['wordedit'];
//	}	
echo $idSB;

?>


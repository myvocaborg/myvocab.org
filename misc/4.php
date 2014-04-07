<?php
  include("lib/connect_db.php");
  
  for ($i = 9; $i <= 81; $i++) {
$strSQL = "ALTER TABLE mvdone".$i." ADD idLearn INT NOT NULL DEFAULT '0'";
$result = mysqli_query($link, $strSQL);
$strSQL = " ALTER TABLE mvdone".$i." ADD TimeClick TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER  `NT`";
$result = mysqli_query($link, $strSQL);
$strSQL = "UPDATE mvdone".$i." SET mvdone".$i.".TimeClick = mvdone".$i.".date50" ;
$result = mysqli_query($link, $strSQL);
}

?>

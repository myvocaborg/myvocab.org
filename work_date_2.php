<?php
// start day in timestamp
//  $dayStart = mktime(0,0,0);
// echo  $dayStart."   ".date("Y-m-d H:i:s", $dayStart);


/*
int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] )
*/

$timestamp1 = mktime(0, 0, 0, 02, 02, 1997);
$timestamp2 = mktime(13, 57, 0, 02, 04, 1997);

$dd =  floor(($timestamp2 - $timestamp1)/86400);
$hh = floor((($timestamp2 - $timestamp1) - $dd*86400)/3600);
$mm = floor(((($timestamp2 - $timestamp1) - $dd*86400)-$hh*3600)/60);
echo $mm;
?>

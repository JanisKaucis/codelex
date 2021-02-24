<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$l = '3:33';
$p = '0:32';

$newl = explode(':',$l);
$newp = explode(':',$p);

$countl = $newl[0]*60 + $newl[1];
$countp = $newp[0]*60 + $newp[1];

$timeSpent = floor(($countp / $countl) * 15);
$timeleft = 15-floor(($countp / $countl)*15);

echo str_repeat('*',17)."\n";
echo '*'.str_repeat('-',$timeSpent).str_repeat(' ',$timeleft).'*'."\n";;
echo str_repeat('*',17);
?>
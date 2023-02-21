<?php
//sum of 2 preceding ones 
$fb=11;
$first=0;
$second=1;
echo "$first,$second<br>";
for($i=0;$i<$fb;$i++){
    $next=$first+$second;
    echo " $next";
    $first=$second;
    $second=$next;
}
?>
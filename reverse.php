<?php
$word="my name is elyse";
$rev="";
//loop through each character in the string in reverse order 
for($i=strlen($word)-1;$i>=0;$i--){
    $rev.=$word[$i];
}
echo"$word<br>";
echo"$rev";
?>
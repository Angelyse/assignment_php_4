
<?php
//Star Pyramid Size
$num = 5;
for($i=1;$i<=$num;$i++){
    for($j=1;$j<=$num-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
		echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}
?>
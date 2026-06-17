<?php
header("Content-type: text/html;charset=utf-8");
// Imprimindo da frente para tras do 8 ao 0
$a = array(1,2,3,4,5,6,7,8);
$i = 7;
while ( $i >= 0){
    echo $a[$i]."<br>";
    $i--;
}

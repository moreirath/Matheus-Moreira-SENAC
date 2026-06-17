<?php 
header("Content-type: text/html;charset=utf-8");
$a = array(7,8,1,2,4,55,33);
$b = array();
$i = 0;

echo "Array A | Array B<br>";
while ($i <= 6) {
    $b[$i] = $a[$i] * 3;
    echo $a[$i]. " x 3 = ".$b[$i]. "<br>";
    $i++;
}

// Imprimir array A
$i = 0; 
echo "Imprimindo array a<br>";
while ($i <= 6) {
    echo $a[$i]. "<br>";
    $i++;
}

echo "<br>Imprimindo array b<br>";
$i = 0;
while ($i <= 6) {
    echo $a[$i]. " x 3 = ".$b[$i]. "<br>";
    $i++;
}
// Imprimir números pares
echo "Imprimir números pares<br>";
$valores = array(0,10,3,1,7,55,50,40,15,21,99);
$i = 0;
while ($i <= 10) {
    if ($valores[$i] % 2 == 0) {
        echo $valores[$i]. "<br>"; 
}
$i++;
}
?>

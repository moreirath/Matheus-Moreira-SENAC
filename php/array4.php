echo "imprimir numeros pares<br>";
$valores = array(0,10,3,1,7,55,50,40,15,21,99);
$i = 0;
while ($i <= 8) {
    if ($valores[$i] % 2 == 0) {
        echo $valores[$i] . "<br>";
    }
    $i++;
}
?>
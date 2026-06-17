<?php
$nome = $_GET['fnome'];
$n1 = $_GET['fnota1'];
$n2 = $_GET['fnota2'];
$n3 = $_GET['fnota3'];

$media = ($n1 + $n2 + $n3) / 3;
$media = number_format($media, 1);

echo "A média do $nome é = $media";
?>
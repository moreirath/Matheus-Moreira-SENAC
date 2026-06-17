<?php
$resultado = "";

if (isset($_GET['fnome']) && isset($_GET['fnota1']) && isset($_GET['fnota2']) && isset($_GET['fnota3'])) {
    $nome = $_GET['fnome'];
    $n1 = $_GET['fnota1'];
    $n2 = $_GET['fnota2'];
    $n3 = $_GET['fnota3'];

    $media = ($n1 + $n2 + $n3) / 3;
    $media = number_format($media, 1);

    $resultado = "A média do $nome é = $media";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Calculo de Média</title>
</head>
<body>
    <form method="get" action="calculomedia.php">
        <label>Nome :</label>
        <input type="text" name="fnome">
        <br>
        <label>Nota 1 :</label>
        <input type="number" max="10" min="0" name="fnota1">
        <br>
        <label>Nota 2 :</label>
        <input type="number" max="10" min="0" name="fnota2">
        <br>
        <label>Nota 3 :</label>
        <input type="number" max="10" min="0" name="fnota3">
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>

    <?php
    if (!empty($resultado)) {
        echo "<br><br>";
        echo $resultado;
    }
    ?>
</body>
</html>
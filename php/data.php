<?php header("Content-type: text/html; charset=utf-8");
date_default_timezone_set("America/Sao_Paulo");
    // mostrar data atual
    echo "=====================<br>";
    echo "Trabalho com datas <br>";
    echo "Hoje é " .date("d/m/y")."<br>";
    echo "Hoje é " .date("d/m/Y")."<br>";
    echo "Hoje é " .date("d/M/Y")."<br>";
    echo "Hoje é " .date("d/M/Y")."<br>";
    echo "Hoje é " .date("d/m/y")."<br>";
    echo "Hoje é " .date("d/M/Y")."<br>";
    // Mostrando a hora
    echo "=====================<br>";
    echo "Trabalhando com horas <br>";
    echo "Agora são ".date("h:i")   ."<br>";
    echo "Agora são ".date("h:ia")  ."<br>";
    echo "Agora são ".date("H:i")   ."<br>";
    echo "Hora "     .date("h")     ."<br>";
    echo "Minutos "  .date("i")     ."<br>";
    echo "======================<br>";
    echo "informando data de nascimento<br>";
    echo "=====================<br>";
    echo "Calculando a idade <br>";
    echo "===================<br>";
    $nasc=date_create("2001-02-17");
    $nasc=date_format($nasc,"Y");
    $idade= date("Y") - $nasc;
    echo "Eu tenho ".$idade," anos"."<br>";
    echo "Nasci no dia " .date("D")."<br>";
?>
 
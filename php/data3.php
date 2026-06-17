<?php
header("Content-type: text/html; charset=utf-8");

date_default_timezone_set("America/Toronto");
echo "A hora em Toronto é " . date("h:i:s a") . "<br>";

date_default_timezone_set("Asia/Bangkok");
echo "A hora em Bangkok é " . date("h:i:s a") . "<br>";

date_default_timezone_set("Asia/Hong_Kong");
echo "A hora em Hong-Kong é " . date("d/m/Y h:i:s a") . "<br>";

date_default_timezone_set("Asia/Tokyo");
echo "A hora em Tokyo é " . date("h:i:s a") . "<br>";

date_default_timezone_set("America/Argentina/Buenos_Aires");
echo "A hora na Argentina é " . date("h:i:s a") . "<br>";

date_default_timezone_set("America/Sao_Paulo");
echo "A hora em São Paulo é " . date("h:i:s a") . "<br>";
?>
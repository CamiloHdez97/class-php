<?php
$cc = $_GET["cc"];
$nombre = $_GET["nombre"];
$email = $_GET["email"];
$movil = $_GET["movil"];
$nivelEstudio = $_GET["nivelEstudio"];
$lenguajes = explode(',', $_GET["lenguajes"]);

$ingles = $_GET["ingles"];

// Imprimir la información

echo "Sputnik";
echo "CC: " . $cc . "<br>";
echo "Nombre: " . $nombre . "<br>";
echo "Email: " . $email . "<br>";
echo "Movil: " . $movil . "<br>";
echo "Nivel de Estudio: " . $nivelEstudio . "<br>";
echo "Lenguajes: " . implode(", ", $lenguajes) . "<br>";
echo "Nivel de Inglés: " . $ingles . "<br>";
?>

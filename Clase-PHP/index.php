<?php
//echo '<h1>Hola Mundo Cruel</h1>';
//$texto = "Mundo";
//printf("Hola % , Cruel")
$edad = 25;
$nombre = "Camilo";
echo var_dump($nombre);
?>

<form action="saveregistro.php" method="POST">
    CC: <input type="text" name="cc"><br>
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    Movíl: <input type="text" name="movil"><br>
    <input type="submit" value="Enviar">
</form>


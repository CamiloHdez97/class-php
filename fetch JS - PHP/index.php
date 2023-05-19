<?php 
    header("Content-Type: application/json"); //Definimos el archivo como un tipo json le decimos al archivo de php 
                                            //que obtenga cualquier tipo de entrada que le llegue y la transformemos a un
                                            //Array asociativo con el parametro "true", sin este parametro seria un objeto por defecto
    $_DATA = json.decode(file_get_contents("php:/input"),true);
    $_METHOD = $_SERVER["REQUEST_METHOD"];//Recuperamos el metodo que esta recibiendo php por medio del fetch
    $_HEADERS = apache_request_headers();//Optenemos todos los headers de la petición

    va_dump($_HEADERS); //Devolvemos estos datos para que el js pueda obtenerlos por medio del fetch
?>


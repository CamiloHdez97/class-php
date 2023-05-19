Hola -> <?php isset($_POST["nombre"]) ? print $_POST["nombre"] : ""; ?> <h1>Info de contacto: </h1> <br>
<?php isset($_POST["cc"]) ? printf("CC: %s", $_POST["cc"]) : "";?><br>
<?php isset($_POST["nombre"]) ? printf("Nombre: %s", $_POST["nombre"]) : "";?><br>
<?php isset($_POST["email"]) ? printf("Email: %s", $_POST["email"]):"";?><br>
<?php isset($_POST["movil"]) ? printf("Movíl: %s", $_POST["movil"]):"";?><br>

<?php

    $estudiante = [

        'cc' => $_POST["cc"],
        'nombre' => $_POST["nombre"],
        'email' => $_POST["email"],
        'movil' => $_POST["movil"],
        'nivelEstudio' => $_POST["titulo"],
        'lenguajes' => $_POST["lenguajes"],
        'ingles' => $_POST["ingles"],

    ];

    $cantidad = count($_POST["lenguajes"]);
    
    if ($cantidad <= 2 && $_POST["ingles"] == "Basico"){

        header('Location: aceptadoApolo.php?cc=' . $_POST["cc"] . '&nombre=' . $_POST["nombre"] . '%20' . $_POST["apellido"] .'&email=' . $_POST["email"] . '&movil=' . $_POST["movil"] . '&nivelEstudio=' . $_POST["titulo"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);

    }
    else if ($cantidad <= 4 && $_POST["ingles"] == "Intermedio"){

        header('Location: aceptadoArtemis.php?cc=' . $_POST["cc"] . '&nombre=' . $_POST["nombre"] . '%20' . $_POST["apellido"] .'&email=' . $_POST["email"] . '&movil=' . $_POST["movil"] . '&nivelEstudio=' . $_POST["titulo"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);

    }   
    else if ($cantidad <= 6 && $_POST["ingles"] == "Avanzado"){

        header('Location: aceptadoSputnik.php?cc=' . $_POST["cc"] . '&nombre=' . $_POST["nombre"] . '%20' . $_POST["apellido"] .'&email=' . $_POST["email"] . '&movil=' . $_POST["movil"] . '&nivelEstudio=' . $_POST["titulo"] . '&lenguajes=' . implode(',', $_POST["lenguajes"]) . '&ingles=' . $_POST["ingles"]);
        
    }

    else {echo "No admitido";}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <form action="saveregistro.php" method="POST">

        <div class="form-row">
            
            <div class="form-group col-md-6">
                <label for="inputEmail4">CC</label>
                <input name="cc" type="text" class="form-control" id="inputEmail4">
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputPassword4">Nombre</label>
                <input name="nombre" type="text" class="form-control" id="inputPassword4">
            </div>
    </div>

        <div class="form-group">
            <label for="inputAddress">Apellidos</label>
            <input name="apellido" type="text" class="form-control" id="inputAddress">
        </div>

        <div class="form-group">
            <label for="inputAddress2">Email</label>
            <input name="email" type="email" class="form-control" id="inputAddress2">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Telefono</label>
                <input name="movil" type="text" class="form-control" id="inputCity">
            </div>
        </div>
    <br>
        <label>Estudios:</label>
        <select name="titulo">
            <option value="Bachiller">Bachiller</option>
            <option value="Tecnico">Técnico</option>
            <option value="Tecnologo">Tecnólogo</option>
            <option value="Profesional">Profesional</option>
            <option value="Estudiante">Estudiante</option>Universitario
            <option value="Universitario">Universitario</option>
        <select>
        <br>


    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Python" name="lenguajes[]" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Python
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="CSS" name="lenguajes[]" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
        CSS
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="JS" name="lenguajes[]" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
        JS
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="PHP" name="lenguajes[]" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
        PHP
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Node JS" name="lenguajes[]" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
        Node JS
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="C#" name="lenguajes[]" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
        C#
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="TypeScript" name="lenguajes[]" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
        TypeScript
        </label>
    </div>
        <br>

    <label>Nivel de Ingles:</label>
    <select name="ingles">
        <option value="Basico">Básico</option>
        <option value="Intermedio">Intermedio</option>
        <option value="Avanzado">Avanzado</option>
    <select><br>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-primary">Reset</button>
    </form>

</div>
    
</body>
</html>


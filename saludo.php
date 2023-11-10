<!DOCTYPE html>
<html>
<head>
    <title>Saludo Personalizado</title>
</head>
<body>
    <form method="post" action="">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required><br>
       
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido" required><br>


        <input type="submit" value="Saludar">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        echo "¡Hola " . $nombre . " " . $apellido . "!";
    }
    ?>
</body>
</html>

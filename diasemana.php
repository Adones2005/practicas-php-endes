<!DOCTYPE html>
<html>
<head>
    <title>Dia de la Semana</title>
</head>
<body>
    <h2>Ingrese un numero del 1 al 7 y le diremos el dia de la semana:</h2>
    <form method="post">
        <label for="numero">Numero (1-7):</label>
        <input type="text" name="numero"><br>

        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $diasSemana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

        if ($numero >= 1 && $numero <= 7) {
            $dia = $diasSemana[$numero - 1];
            echo "El día de la semana correspondiente al número $numero es: $dia";
        } else {
            echo "Número fuera de rango. Debe ingresar un número del 1 al 7.";
        }
    }
    ?>
</body>
</html>

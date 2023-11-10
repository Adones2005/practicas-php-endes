<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tabla de Multiplicar</title>
</head>
<body>
   <form method="post" action="multiplicacion.php">
       <label for="numero">Ingresa un numero entre 1 y 10:</label>
       <input type="text" id="numero" name="numero" required>
       <button type="submit">Mostrar Tabla de Multiplicar</button>
   </form>
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
      $numero = $_POST["numero"];
   
   
    
      if (is_numeric($numero) && $numero >= 1 && $numero <= 10) {
         
          echo "<h2>Tabla de multiplicar del $numero</h2>";
          echo "<ul>";
          for ($i = 1; $i <= 10; $i++) {
              $resultado = $numero * $i;
              echo "<li>$numero x $i = $resultado</li>";
          }
        
      } else {
   
   
          echo "ERROR";
      }
   }
   ?> 
   </body>
   </html>

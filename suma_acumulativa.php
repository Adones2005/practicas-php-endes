<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Suma Acumulativa</title>
</head>
<body>
   <form method="post" action="sumaAcumulativa.php">
       <label for="numeroN">Ingresa un número :</label>
       <input type="text" id="numeroN" name="numeroN" required>
       <button type="submit">SUMA</button>
   </form>
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   
      $numeroN = $_POST["numeroN"];
   
   
     
      if (is_numeric($numeroN) && $numeroN > 0 && floor($numeroN) == $numeroN) {
       
          $sumaAcumulativa = 0;
          for ($i = 1; $i <= $numeroN; $i++) {
              $sumaAcumulativa += $i;
          }
   
   
          echo "La suma acumulativa de los números desde 1 hasta $numeroN es: $sumaAcumulativa";
      } else {
       
          echo "ERROR";
      }
   }
   ?>
   </body>

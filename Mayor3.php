<!DOCTYPE html>
<html>
   <head>
        <title>Mayor de 3 numeros</title>
       </head>
       <body>
           <h2>Ingrese tres numeros y le diremos cual es el mayor:</h2>
           <form action="mayor3.php" method="post">
               <label for="num1">Numero 1:</label>
               <input type="text" name="num1"><br>
               <label for="num2">Numero 2:</label>
               <input type="text" name="num2"><br>
               <label for="num3">Numero 3:</label>
               <input type="text" name="num3"><br>
               <input type="submit" value="Calcular">
            </form>
            <?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
     $num3 = $_POST['num3'];
      $mayor = $num1;
       if ($num2 > $mayor) {
            $mayor = $num2;
           }
             if ($num3 > $mayor) {
                $mayor = $num3;
               }
echo "El numero mayor es: " . $mayor;


}
?> 
</body>
</html>

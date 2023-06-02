<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora Simples</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action='<?php $_SERVER["PHP_SELF"] ?>' method="post">
        <h1>FATORIAL</h1>
        <br>
        <br>
        <label for="nota1">NUMERO: </label>
        <input type="number" max="64" name="num1">
        <br>
        <input type="submit"> <input type="reset" value="reset">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["num1"];
            $fatorial = 1;

            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i;
            }

            echo "<h2>FATORIAL: " . $fatorial . "</h2>";
        }
    ?>
    
</body>
</html>
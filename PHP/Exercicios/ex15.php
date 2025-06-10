<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <?php 
        /*
            Desenvolva um programa que leia um número inteiro e mostre se ele é PAR ou ÍMPAR.
        */

        $numero = 2;

        if ($numero % 2 === 0) {
            echo "O número $numero é par!";
        } else {
            echo "O número $numero é ímpar!";
        }
    ?>
</body>
</html>
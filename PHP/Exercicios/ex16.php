<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>
    <?php 
        /*
            Faça um algoritmo que leia um determinado ano e mostre se ele é ou não BISSEXTO
        */

        $ano = 2024;

        if ($ano % 4 === 0) {
            echo "O ano é bissexto";
        } else {
            echo "O ano não é bissexto";
        }
    ?>
</body>
</html>
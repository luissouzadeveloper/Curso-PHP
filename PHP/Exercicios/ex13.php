<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>
<body>
    <?php 
        /*
            Faça um programa que leia o ano de nascimento de uma pessoa, calcule a idade dela e depois mostre se ela pode ou não votar.
        */

        $ano_nasc = 1999;
        $idade = 2025 - $ano_nasc;
        echo "A sua idade é de $idade anos <br>";

        if ($idade < 16) {
            echo "Você não pode votar!";
        } elseif($idade <= 17 || $idade >= 70) {
            echo "O voto é opcional!";
        } else {
            echo "O voto é obrigatório!";
        }
    ?>
</body>
</html>
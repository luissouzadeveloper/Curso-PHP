<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>
<body>
    <?php 
        /*
            Escreva um programa que leia o ano de nascimento de um rapaz e mostre a sua situação em relação ao alistamento militar.
            - Se estiver antes dos 18 anos, mostre em quantos anos faltam para o alistamento.
            - Se já tiver depois dos 18 anos, mostre quantos anos já se passaram do alistamento.
        */

        $ano_nasc = 1999;
        $idade = 2025 - $ano_nasc;
        
        echo "A idade é $idade anos <br>";

        if ($idade < 18) {
            $anos_falta = 18 - $idade;
            echo "Faltam $anos_falta anos";
        } else {
            $anos_passados = $idade - 18;
            echo "Se passaram $anos_passados anos";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>
<body>
    <?php 
        /*
            Crie um algoritmo que leia o nome e as duas notas de um aluno, calcule a sua média e mostre na tela. No final, analise a média e mostre se o aluno teve ou não um bom aproveitamento (se ficou acima da média 7.0).
        */

        $nome = 'João';
        $nota1 = 5.6;
        $nota2 = 9.2;

        $media = ($nota1 + $nota2) / 2;

        if ($media >= 7) {
            echo "Sua média foi $media. Aprovado!";
        } else {
            echo "Sua média foi $media. Reprovado!";
        }
    ?>
</body>
</html>
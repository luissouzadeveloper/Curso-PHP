<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <?php 
        /* 
            Faça um programa que leia as duas notas de um aluno em uma matéria e mostre na tela a sua média na disciplina.
            Ex:
            Nota 1: 4.5
            Nota 2: 8.5
            A média entre 4.5 e 8.5 é igual a 6.5
        */

        $nota1 = 8.7;
        $nota2 = 5.2;

        $media = ($nota1 + $nota2) / 2;

        echo "A média entre " . number_format($nota1, 1, ',', '') . " e " . number_format($nota2, 1, ',','') . " é " . number_format($media, 1, ',','');
    ?>
</body>
</html>
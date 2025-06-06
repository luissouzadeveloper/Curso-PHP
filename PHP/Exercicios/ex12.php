<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <?php 
        /*
            Escreva um programa que pergunte a velocidade de um carro. Caso ultrapasse 80Km/h, exiba uma mensagem dizendo que o usuário foi multado. Nesse caso, exiba o valor da multa, cobrando R$5 por cada Km acima da velocidade permitida.
        */

        $velocidade = 90;

        if ($velocidade > 80) {
            echo "A velocidade é de $velocidade, você foi multado! <br>";
            $excesso = $velocidade - 80;
            $multa = $excesso * 5;
            echo "O valor da multa é de R$$multa <br>";
        } else {
            echo "Tudo ok, use sempre o cinto de segurança!";
        }
    ?>
</body>
</html>
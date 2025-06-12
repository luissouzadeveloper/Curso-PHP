<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>
<body>
    <?php 
        function calcularNotas($nota1, $nota2) {
            $media = ($nota1 + $nota2) / 2;

            if ($media < 5.0) {
                return "Sua média foi de $media. Reprovado!";
            } else if ($media < 7.0) {
                return "Sua média foi de $media. Recuperação!";
            } else {
                return "Sua média foi de $media. Aprovado!";
            }
        }

        echo calcularNotas(9.5, 8.5)
    ?>
</body>
</html>
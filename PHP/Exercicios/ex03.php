<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <?php 
        $idade = 18;
        $peso = 60;

        if ($idade >= 16 && $idade <= 69 && $peso >= 50) {
            echo "Atende os requisitos";
        } else {
            echo "Não atende os requisitos";
        }
    ?>
</body>
</html>
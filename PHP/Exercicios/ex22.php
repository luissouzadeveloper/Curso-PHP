<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 22</title>
</head>
<body>
    <?php 
        function textoMaiusculo($texto) {
            $maiusculo = strtoupper($texto);
            return $maiusculo . '<br>';
        }

        function textoMinusculo($texto) {
            $minusculo = strtolower($texto);
            return $minusculo . '<br>';
        }

        echo textoMaiusculo('php');
        echo textoMinusculo('JavaScript');
    ?>
</body>
</html>
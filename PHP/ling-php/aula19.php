<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 19</title>
</head>
<body>
    <?php 
        // Funções nativas de matemática
        function arrendondaParaCima($num) {
            return ceil($num); // Função que arredonda para cima
        }

        echo arrendondaParaCima(5.6) . '<br>';

        function arredondaParaBaixo($num) {
            return floor($num);
        }

        echo arredondaParaBaixo(5.5) . '<br>';

        function arredonda($num) {
            return round($num); // entre 0.0 e 0.4 arrendonda pra baixo e 0.5 a 0.9 para cima
        }

        echo arredonda(9.5) . '<br>';

        function numAleatorio() {
            echo rand(10, 20); // primeiro param. é o inicio e o segundo é o fim.
            echo '<br>' . getrandmax();
        }

        numAleatorio();
        echo '<br>';

        function raizQ($valor) {
            return sqrt($valor);
        }

        echo raizQ(13);
    ?>
</body>
</html>
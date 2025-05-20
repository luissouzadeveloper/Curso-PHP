<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
</head>
<body>
    <?php 
        // && -> and
        if (5 > 3 && 10 === 10) {
            echo "Verdadeiro";
        } else {
            echo "Falso";
        }

        // || -> or
        if (5 == 9 || 10 < 7) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        // XOR -> retorna verdadeiro se uma das expressões forem verdadeiras. Se ambas forem verdadeiras ou falsas, retorna falsa.
        if (7 >= 4 && 8 < 2) {
            echo 'V';
        } else {
            echo 'F';
        }

        // ! -> Inverte o valor
        if (!(7 >= 4 && 8 < 2)) {
            echo 'V';
        } else {
            echo 'F';
        }
        
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    <?php 
        // String
        $nome = 'José';
        // echo $nome . '<br>';

        // int
        $idade = 28;

        // float
        $peso = 68.7;

        // boolean
        $fuma = true; // true - 1, false - void
    ?>

    <h1>Nome:</h1>
    <p><?= $nome ?></p>

    <h1>Idade:</h1>
    <p><?= $idade ?></p>

    <h1>Peso:</h1>
    <p><?= $peso ?></p>

    <h1>Fumante?</h1>
    <p><?= $fuma ?></p>
</body>
</html>
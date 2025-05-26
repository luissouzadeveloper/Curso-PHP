<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
</head>

<body>
    <?php
    // Switch
    $parametro = 5;

    switch ($parametro) {
        case 1:
            echo 'Entrou no case 1';
            break;

        case 2:
            echo 'Entrou no case 2';
            break;

        case 3:
            echo 'Entrou no case 3';
            break;
        default:
            echo 'Inválido';
            break;
    }
    ?>
</body>

</html>
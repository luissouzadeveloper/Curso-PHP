<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>
<body>
    <?php 
        $idade = 78;

        if ($idade < 13) {
            echo 'Criança';
        } else if ($idade <= 17) {
            echo 'Adolescente';
        } else if ($idade <= 59) {
            echo 'Adulto';
        } else {
            echo 'Idoso';
        }
    ?>
</body>
</html>
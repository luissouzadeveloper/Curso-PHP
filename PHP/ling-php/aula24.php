<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 24</title>
</head>
<body>
    <?php 
        // Diferenças entre false, null e empty
        // false - é um tipo de variável boolean
        // null e empty - são valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        // null
        if (is_null($funcionario1)) {
            echo "A variável é null";
        } else {
            echo "A variável não é null";
        }

        echo "<br>";
        
        if (is_null($funcionario2)) {
            echo "A variável é null";
        } else {
            echo "A variável não é null";
        }

        echo "<br>";

        if (is_null($funcionario3)) {
            echo "A variável é null";
        } else {
            echo "A variável não é null";
        }

        // empty
        if (empty($funcionario1)) {
            echo "A variável é vazia";
        } else {
            echo "A variável não é vazia";
        }

        echo "<br>";
        
        if (empty($funcionario2)) {
            echo "A variável é vazia";
        } else {
            echo "A variável não é vazia";
        }
    ?>
</body>
</html>
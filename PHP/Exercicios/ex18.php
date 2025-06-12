<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
</head>
<body>
    <?php 
        function calcularImposto($salario) {

            if ($salario <= 1903.98) {
                echo "Isento!";
            } else if ($salario <= 2826.65) {
                $imposto = ($salario * 7.5) / 100;
                echo "Em cima de 7,5%, você pagará $imposto";
            } else if ($salario <= 3751.05) {
                $imposto = ($salario * 15) / 100;
                echo "Em cima de 15%, você pagará $imposto";
            } else if ($salario <= 4664.68) {
                $imposto = ($salario * 22.5) / 100;
                echo "Em cima de 22,5%, você pagará $imposto";
            } else if ($salario > 4664.68) {
                $imposto = ($salario * 27.5) / 100;
                echo "Em cima de 27,5%, você pagará $imposto";
            }
        }

        calcularImposto(3500);
    ?>
</body>
</html>
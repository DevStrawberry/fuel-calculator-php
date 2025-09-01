<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fuel Calculator</title>
</head>
<body>
<form action="index.php" method="post">
    <p>
        Alcool value: <input type="number" name="alcool" id="alcool">
    </p>
    <p>
        Gasoline value: <input type="number" name="gasoline" id="gasoline">
    </p>
    <p>
        <input type="submit" name="calcular" placeholder="Calcular">
    </p>
    <script>
        function validarValor() {
            const inputAlcool = document.getElementById('alcool');
            const alcoolValue = inputAlcool.value;
            const inputGasoline = document.getElementById('gasoline');
            const gasolineValue = inputGasoline.value;

            if (isNaN(alcoolValue && gasolineValue)) {
                console.log("Erro: valores inseridos não são números;");
            }
        }
    </script>
    <?php

    ?>
</form>
</body>
</html>

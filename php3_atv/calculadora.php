<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Imposto de Renda</title>
</head>
<body>
    <h1>Calculadora de Imposto de Renda</h1>
    <form action="" method="post">
        <label for="salario">Salário Bruto:</label>
        <input type="number" id="salario" name="salario" required>
        <input type="submit" value="Calcular Imposto">
    </form>
    <?php
    if (isset($_POST['salario'])) {
        $salario = $_POST['salario'];
        $imposto_a_pagar = calcular_imposto_renda($salario);
        echo "O imposto a ser pago sobre um salário de R$ $salario é R$ $imposto_a_pagar";
    }
    ?>
</body>
</html>
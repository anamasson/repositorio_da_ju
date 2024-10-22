<?php
function calcularImpostoRenda($salario) {
    $imposto = 0;

    if ($salario <= 1903.98) {
        return 0; // Isento
    } elseif ($salario <= 2826.65) {
        $imposto = ($salario * 0.075) - 142.80;
    } elseif ($salario <= 3751.05) {
        $imposto = ($salario * 0.15) - 354.80;
    } elseif ($salario <= 4664.68) {
        $imposto = ($salario * 0.225) - 636.13;
    } else {
        $imposto = ($salario * 0.275) - 869.36;
    }

    return max(0, $imposto); // Garante que o imposto não seja negativo
}

$impostoDevido = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salarioBruto = floatval(str_replace(',', '.', $_POST['salario']));
    $impostoDevido = calcularImpostoRenda($salarioBruto);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Imposto de Renda</title>
</head>
<body>
    <h1>Calculadora de Imposto de Renda</h1>
    <form method="post" action="">
        <label for="salario">Salário Bruto (R$):</label>
        <input type="text" name="salario" id="salario" required>
        <br>
        <input type="submit" value="Calcular Imposto">
    </form>

    <?php if ($impostoDevido !== null): ?>
        <h2>Resultado</h2>
        <p>O valor do imposto de renda a ser pago é R$ <?php echo number_format($impostoDevido, 2, ',', '.'); ?>.</p>
    <?php endif; ?>
</body>
</html>

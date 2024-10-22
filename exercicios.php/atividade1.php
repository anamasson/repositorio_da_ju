<?php
function calcularFrete($peso) {
    if ($peso <= 1) {
        return 10.00;
    } elseif ($peso <= 5) {
        return 15.00;
    } elseif ($peso <= 10) {
        return 20.00;
    } else {
        return 25.00;
    }
}

$frete = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pesoPacote = floatval($_POST['peso']);
    $frete = calcularFrete($pesoPacote);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Frete</title>
</head>
<body>
    <h1>Calculadora de Frete</h1>
    <form method="post" action="">
        <label for="peso">Peso do Pacote (kg):</label>
        <input type="number" step="0.01" name="peso" id="peso" required>
        <input type="submit" value="Calcular Frete">
    </form>

    <?php if ($frete !== null): ?>
        <h2>Resultado</h2>
        <p>O valor do frete para um pacote de <?php echo number_format($pesoPacote, 2, ',', '.'); ?> kg é R$ <?php echo number_format($frete, 2, ',', '.'); ?>.</p>
    <?php endif; ?>
</body>
</html>

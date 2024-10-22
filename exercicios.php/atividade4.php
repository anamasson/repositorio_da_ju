<?php
function calcularPontos($valorCompra) {
    if ($valorCompra <= 50.00) {
        return 5;
    } elseif ($valorCompra <= 100.00) {
        return 10;
    } else {
        return 15;
    }
}

$pontosAcumulados = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorCompra = floatval(str_replace(',', '.', $_POST['valor']));
    $pontosAcumulados = calcularPontos($valorCompra);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Pontos de Acumulação</title>
</head>
<body>
    <h1>Calculadora de Pontos de Acumulação</h1>
    <form method="post" action="">
        <label for="valor">Valor da Compra (R$):</label>
        <input type="text" name="valor" id="valor" required>
        <br>
        <input type="submit" value="Calcular Pontos">
    </form>

    <?php if ($pontosAcumulados !== null): ?>
        <h2>Resultado</h2>
        <p>Você acumulou <?php echo $pontosAcumulados; ?> pontos.</p>
    <?php endif; ?>
</body>
</html>

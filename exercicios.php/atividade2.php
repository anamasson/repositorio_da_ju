<?php
function calcularJurosSimples($capital, $taxa, $tempo) {
    return ($capital * $taxa * $tempo) / 100;
}

$juros = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $capitalInicial = floatval(str_replace(',', '.', $_POST['capital']));
    $taxaJuros = floatval(str_replace(',', '.', $_POST['taxa']));
    $tempoAnos = intval($_POST['tempo']);
    $juros = calcularJurosSimples($capitalInicial, $taxaJuros, $tempoAnos);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Juros Simples</title>
</head>
<body>
    <h1>Calculadora de Juros Simples</h1>
    <form method="post" action="">
        <label for="capital">Capital Inicial (R$):</label>
        <input type="text" name="capital" id="capital" required>
        <br>
        <label for="taxa">Taxa de Juros Anual (%):</label>
        <input type="text" name="taxa" id="taxa" required>
        <br>
        <label for="tempo">Tempo (anos):</label>
        <input type="number" name="tempo" id="tempo" required>
        <br>
        <input type="submit" value="Calcular Juros">
    </form>

    <?php if ($juros !== null): ?>
        <h2>Resultado</h2>
        <p>O valor dos juros simples é R$ <?php echo number_format($juros, 2, ',', '.'); ?>.</p>
    <?php endif; ?>
</body>
</html>

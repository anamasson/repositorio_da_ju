<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Juros Simples</title>
</head>
<body>
    <h1>Cálculo de Juros Simples</h1>
    <form method="post" action="">
        <label for="capital_inicial">Capital Inicial (R$):</label>
        <input type="number" step="0.01" name="capital_inicial" required><br><br>

        <label for="taxa_juros_anual">Taxa de Juros Anual (%):</label>
        <input type="number" step="0.01" name="taxa_juros_anual" required><br><br>

        <label for="tempo_anos">Tempo (anos):</label>
        <input type="number" step="0.01" name="tempo_anos" required><br><br>

        <input type="submit" value="Calcular Juros Simples">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $capital_inicial = floatval($_POST['capital_inicial']);
        $taxa_juros_anual = floatval($_POST['taxa_juros_anual']);
        $tempo_anos = floatval($_POST['tempo_anos']);
        $juros_simples = $capital_inicial * ($taxa_juros_anual / 100) * $tempo_anos;
        echo "<h2>Resultado:</h2>";
        echo "Os juros simples são: R$ " . number_format($juros_simples, 2, ',', '.') . "<br>";
    }
    ?>
</body>
</html>
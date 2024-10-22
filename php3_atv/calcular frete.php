<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Frete</title>
</head>
<body>
    <h1>Calculadora de Frete</h1>
    <form method="POST" action="">
        <label for="peso">Digite o peso do pacote (em kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required>
        <button type="submit">Calcular Frete</button>
    </form>

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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pesoEntrada = $_POST['peso']; 
        $frete = calcularFrete($pesoEntrada); 
        echo "<h2>Resultado:</h2>";
        echo "<p>O valor do frete para $pesoEntrada kg é R$ " . number_format($frete, 2, ',', '.') . "</p>";
    }
    ?>

</body>
</html>

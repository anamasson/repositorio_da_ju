<?php
function converterCelsiusParaFahrenheit($temperaturasCelsius) {
    $temperaturasFahrenheit = [];
    
    // Converte cada temperatura
    for ($i = 0; $i < count($temperaturasCelsius); $i++) {
        $fahrenheit = ($temperaturasCelsius[$i] * 9/5) + 32;
        $temperaturasFahrenheit[] = $fahrenheit;
    }
    
    return $temperaturasFahrenheit;
}

$resultado = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Coleta as temperaturas do formulário
    $temperaturasCelsius = explode(",", $_POST['temperaturas']);
    $resultado = converterCelsiusParaFahrenheit($temperaturasCelsius);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Conversão de Temperatura</title>
</head>
<body>
    <h2>Converter Temperaturas de Celsius para Fahrenheit</h2>
    <form method="post">
        <label for="temperaturas">Digite as temperaturas em Celsius :</label><br>
        <input type="text" name="temperaturas" required>
        <button type="submit">Converter</button>
    </form>

    <?php if ($resultado): ?>
        <h2>Temperaturas em Fahrenheit:</h2>
        <p><?php echo implode(", ", $resultado); ?></p>
    <?php endif; ?>
</body>
</html>

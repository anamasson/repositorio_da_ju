<?php
function calcularTempoViagem($distancia, $velocidade) {
    // Verifica se os valores são válidos
    if ($velocidade <= 0) {
        return "A velocidade deve ser maior que zero.";
    }

    // Calcula o tempo em horas
    $tempoHoras = $distancia / $velocidade;

    // Separa as horas e minutos
    $horas = floor($tempoHoras);
    $minutos = ($tempoHoras - $horas) * 60;

    return sprintf("%d horas e %d minutos", $horas, round($minutos));
}

$tempoViagem = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e valida os dados de entrada
    $distancia = floatval(str_replace(',', '.', $_POST['distancia']));
    $velocidade = floatval(str_replace(',', '.', $_POST['velocidade']));

    // Chama a função para calcular o tempo de viagem
    $tempoViagem = calcularTempoViagem($distancia, $velocidade);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo de Viagem</title>
</head>
<body>
    <h1>Calculadora de Tempo de Viagem</h1>
    <form method="post" action="">
        <label for="distancia">Distância (km):</label>
        <input type="text" name="distancia" id="distancia" required>
        <br>
        <label for="velocidade">Velocidade Média (km/h):</label>
        <input type="text" name="velocidade" id="velocidade" required>
        <br>
        <input type="submit" value="Calcular Tempo">
    </form>

    <?php if ($tempoViagem !== null): ?>
        <h2>Resultado</h2>
        <p>O tempo de viagem é: <?php echo $tempoViagem; ?>.</p>
    <?php endif; ?>
</body>
</html>

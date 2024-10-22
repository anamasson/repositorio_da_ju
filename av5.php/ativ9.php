<?php
$numeros = [];
$maiorNumero = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Coleta os números digitados pelo usuário
    for ($i = 0; $i < 10; $i++) {
        $numeros[$i] = (int)$_POST["numero$i"];
    }

    // Encontra o maior número
    $maiorNumero = $numeros[0];
    for ($i = 1; $i < count($numeros); $i++) {
        if ($numeros[$i] > $maiorNumero) {
            $maiorNumero = $numeros[$i];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Encontrar o Maior Número</title>
</head>
<body>
    <h1>Digite 10 Números</h1>
    <form method="post">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <label for="numero<?php echo $i; ?>">Número <?php echo $i + 1; ?>:</label>
            <input type="number" name="numero<?php echo $i; ?>" required><br>
        <?php endfor; ?>
        <button type="submit">Encontrar Maior Número</button>
    </form>

    <?php if ($maiorNumero !== null): ?>
        <h2>O maior número é: <?php echo $maiorNumero; ?></h2>
    <?php endif; ?>
</body>
</html>

<?php
$numerosAleatorios = [];

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $quantidade=(int)$_POST['quantidade'];

    // Gera os números aleatórios
    for ($i=0; $i < $quantidade; $i++) {
        $numerosAleatorios[]=rand(1, 100);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>números aleatórios</title>
</head>
<body>
    <h2>Gerar Números Aleatórios</h2>
    <form method="post">
        <label for="quantidade">Quantos números você deseja gerar?</label>
        <input type="number" name="quantidade" value="10" required>
        <button type="submit">Gerar</button>
    </form>

    <?php if (!empty($numerosAleatorios)): ?>
        <h2>Números gerados:</h2>
        <p><?php echo implode(", ", $numerosAleatorios); ?></p>
    <?php endif; ?>
</body>
</html>

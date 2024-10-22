<?php
function verificarSenha($senha) {
    if (strlen($senha) < 8) return false;
    if (!preg_match('/[A-Z]/', $senha)) return false; // Verifica letra maiúscula
    if (!preg_match('/\d/', $senha)) return false; // Verifica número
    if (!preg_match('/\W/', $senha)) return false; // Verifica caractere especial
    return true;
}

$resultadoNotas = "";
$resultadoSenha = "";
$media = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Coletando as notas
    $notas = [
        (float)$_POST['nota1'],
        (float)$_POST['nota2'],
        (float)$_POST['nota3']
     
    ];

    // Calculando a média
    $media = array_sum($notas) / count($notas);
    $resultadoNotas = "A média das notas é: " . number_format($media, 2);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Notas</title>
</head>
<body>
    <h1>Notas dos Alunos</h1>
    <form method="post">
        <label>Nota 1: <input type="number" name="nota1" step="0.01" required></label><br>
        <label>Nota 2: <input type="number" name="nota2" step="0.01" required></label><br>
        <label>Nota 3: <input type="number" name="nota3" step="0.01" required></label><br>
        <button type="submit">Enviar</button>
    </form>

    <?php if ($resultadoNotas): ?>
        <p><?php echo $resultadoNotas; ?></p>
    <?php endif; ?>

    <?php if ($resultadoSenha): ?>
        <p><?php echo $resultadoSenha; ?></p>
    <?php endif; ?>
</body>
</html>

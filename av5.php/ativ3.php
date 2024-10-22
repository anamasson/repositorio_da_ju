<?php
function verificarSenha($senha) {
    // Critérios de segurança
    $minTamanho = 8;
    $temMaiuscula = false;
    $temNumero = false;
    $temCaracterEspecial = false;

    // Verifica o tamanho da senha
    if (strlen($senha) < $minTamanho) {
        return false;
    }

    // Verifica os critérios da senha
    for ($i = 0; $i < strlen($senha); $i++) {
        $char = $senha[$i];

        if (ctype_upper($char)) {
            $temMaiuscula = true;
        } elseif (ctype_digit($char)) {
            $temNumero = true;
        } elseif (!ctype_alnum($char)) {
            $temCaracterEspecial = true;
        }
    }

    // Retorna verdadeiro se todos os critérios forem atendidos
    return $temMaiuscula && $temNumero && $temCaracterEspecial;
}

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $senha = $_POST['senha'];
    $resultado = verificarSenha($senha) ? "Senha válida." : "Senha inválida.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Senha</title>
</head>
<body>
    <h1>Verificador de Senha</h1>
    <form method="post">
        <label for="senha">Digite sua senha:</label>
        <input type="password" name="senha" id="senha" required>
        <button type="submit">Verificar</button>
    </form>

    <?php if ($resultado): ?>
        <p><?php echo $resultado; ?></p>
    <?php endif; ?>

    <h2>Criterios de Segurança:</h2>
    <ul>
        <li>Deve ter pelo menos 8 caracteres</li>
        <li>Deve conter pelo menos uma letra maiúscula</li>
        <li>Deve conter pelo menos um número</li>
        <li>Deve conter pelo menos um caractere especial (ex: !@#$%^&*)</li>
    </ul>
</body>
</html>

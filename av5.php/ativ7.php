<?php
$erros = [];
$nome = $email = $senha = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    // Validação dos campos
    $campos = [
        'Nome' => $nome,
        'Email' => $email,
        'Senha' => $senha
    ];

    foreach ($campos as $campo => $valor) {
        if (empty($valor)) {
            $erros[] = "$campo não pode estar vazio.";
        }
    }

    // Validação do email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Email inválido.";
    }

    // Validação da senha
    if (strlen($senha) < 8) {
        $erros[] = "A senha deve ter pelo menos 8 caracteres.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Validação de Formulário</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required value="<?php echo htmlspecialchars($nome); ?>"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required value="<?php echo htmlspecialchars($email); ?>"><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Enviar</button>
    </form>

    <?php if (!empty($erros)): ?>
        <h2>Erros:</h2>
        <ul>
            <?php foreach ($erros as $erro): ?>
                <li><?php echo $erro; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>

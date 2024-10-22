<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Valor no Array</title>
</head>
<body>
    <h1>Verificar se um Valor Existe no Array</h1>

    <form method="POST">
        <input type="number" name="numero" placeholder="Insira um número" required><br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    $numeros = [1, 3, 5, 7, 9, 11, 13, 15];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $verificar = $_POST["numero"];
        echo $verificar . (in_array($verificar, $numeros) ? " está" : " não está") . " presente no array.";
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitar Nomes</title>
</head>
<body>
    <h1>Digite 5 Nomes:</h1>

    <form method="POST">
        <input type="text" name="nome1" placeholder="Nome 1" required><br>
        <input type="text" name="nome2" placeholder="Nome 2" required><br>
        <input type="text" name="nome3" placeholder="Nome 3" required><br>
        <input type="text" name="nome4" placeholder="Nome 4" required><br>
        <input type="text" name="nome5" placeholder="Nome 5" required><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomes = [
            $_POST["nome1"],
            $_POST["nome2"],
            $_POST["nome3"],
            $_POST["nome4"],
            $_POST["nome5"]
        ];
        echo "<h2>Nomes na Ordem Inversa:</h2>";
        echo implode("<br>", array_reverse($nomes));
    }
    ?>
</body>
</html>

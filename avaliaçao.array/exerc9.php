<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrar Números</title>
</head>
<body>
    <h1>Filtrador de Números</h1>

    <form method="POST">
        <input type="number" name="numero1" placeholder="Número 1" required><br>
        <input type="number" name="numero2" placeholder="Número 2" required><br>
        <input type="number" name="numero3" placeholder="Número 3" required><br>
        <input type="number" name="numero4" placeholder="Número 4" required><br>
        <input type="number" name="numero5" placeholder="Número 5" required><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = [
            $_POST["numero1"],
            $_POST["numero2"],
            $_POST["numero3"],
            $_POST["numero4"],
            $_POST["numero5"]
        ];

        $filtro = array_filter($numeros, fn($numero) => $numero > 25);

        echo "<h2>Números Maiores que 25:</h2>";
        echo count($filtro) > 0 ? implode("<br>", $filtro) : "Nenhum número maior que 25 foi encontrado.";
    }
    ?>
</body>
</html>

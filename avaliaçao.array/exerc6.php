<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST['numeros'];

    // Inicializa contadores
    $pares = 0;
    $impares = 0;

    // Loop para contar pares e ímpares
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    // Exibe os resultados
    echo "Números pares: " . $pares . "<br>";
    echo "Números ímpares: " . $impares;
} else {
    ?>
    <form method="post">
        <label>Digite 10 números:</label><br>
        <?php for ($i = 0; $i < 10; $i++): ?>
            <input type="number" name="numeros[]" required><br>
        <?php endfor; ?>
        <input type="submit" value="Contar Pares e Ímpares">
    </form>
    <?php
}
?>

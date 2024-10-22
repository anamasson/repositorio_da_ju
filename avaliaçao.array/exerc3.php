<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os números do formulário
    $numeros = $_POST['numeros'];

    // Encontra o maior número
    $maiorNumero = max($numeros);

    // Exibe o maior número
    echo "O maior número é: " . $maiorNumero;
} else {
    ?>
    <form method="post">
        <label>Digite 5 números:</label><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="submit" value="Encontrar Maior Número">
    </form>
    <?php
}
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST['numeros'];

    // Calcula a soma
    $soma = array_sum($numeros);

    // Exibe a soma
    echo "A soma dos elementos é: " . $soma;
} else {
    ?>
    <form method="post">
        <label>Digite 5 números:</label><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="submit" value="Calcular Soma">
    </form>
    <?php
}
?>

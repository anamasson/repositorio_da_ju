<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST['numeros'];

    // Inicializa a soma
    $soma = 0;

    // Calcula a soma dos números
    for ($i = 0; $i < count($numeros); $i++) {
        $soma += $numeros[$i];
    }

    // Calcula a média
    $media = $soma / 5; // Aqui sabemos que são 5 números

    // Exibe a média
    echo "A média dos números é: " . $media;
} else {
    ?>
    <form method="post">
        <label>Digite 5 números:</label><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="submit" value="Calcular Média">
    </form>
    <?php
}
?>

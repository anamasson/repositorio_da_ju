<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os números do formulário
    $numeros = $_POST['numeros'];

    // Inicializa o menor número com o primeiro valor do array
    $menorNumero = $numeros[0];

    // Loop para encontrar o menor número
    foreach ($numeros as $numero) {
        if ($numero < $menorNumero) {
            $menorNumero = $numero;
        }
    }

    // Exibe o menor número encontrado
    echo "O menor número é: " . $menorNumero;
} else {
    ?>
    <form method="post">
        <label>Digite 5 números:</label><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="number" name="numeros[]" required><br>
        <input type="submit" value="Encontrar Menor Número">
    </form>
    <?php
}
?>

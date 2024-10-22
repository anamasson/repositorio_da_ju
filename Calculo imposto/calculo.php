<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imposto</title>
</head>
<body>
    <h1>Imposto</h1>
    <form action="imposto.php" method="post">
        <label>Digite o seu Salário:</label>
        <input type="number" id="salario" name="salario" min="1903.99"  required>
        <br><br>
           <input type="submit" name="" value="Calculo de imposto">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salario = $_POST['salario'];
        $resultado = calculoimposto($salario);
        $imposto = $resultado['imposto'];
        $aliquota = $resultado['aliquota'];
         if ($imposto === "Isento") {
            echo "<p>Você está isento de imposto de renda.</p>";
        } else {
           
            $total = $salario - $imposto;
        }
    }
    function calcularimposto ($salario) {
     $aliquota = 0;

   if ($salario <= 1903.98) {
        return ["imposto" => "Isento", "aliquota" => 0];
    } elseif ($salario >= 1903.99 && $salario <= 2826.65) {
        $aliquota = 0.075;
    } elseif ($salario >= 2826.66 && $salario <= 3751.05) {
        $aliquota = 0.15;
    } elseif ($salario >= 3751.06 && $salario < 4664.68) {
        $aliquota = 0.225;
    } else {
        $aliquota = 0.275;
    }

    $imposto = $salario * $aliquota;
    return [ "aliquota" => $aliquota];
}
   
$salario = $salario * $aliquota;
        return [ "aliquota" => $aliquota];

?>
</body>
</html>

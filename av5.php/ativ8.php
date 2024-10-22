<?php
// Dados dos funcionários
$funcionarios = [
    ["nome" => "João", "cargo" => "Desenvolvedor", "salario" => 3000],
    ["nome" => "Maria", "cargo" => "Designer", "salario" => 2800],
    ["nome" => "Carlos", "cargo" => "Gerente", "salario" => 5000],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <metacharset="UTF-8">
    <title>Tabela de Funcionários</title>
</head>
<body>
    <h1>Funcionários</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Salário</th>
        </tr>
        <?php
        for ($i = 0; $i < count($funcionarios); $i++) {
            echo "<tr>";
            echo "<td>" . $funcionarios[$i]['nome'] . "</td>";
            echo "<td>" . $funcionarios[$i]['cargo'] . "</td>";
            echo "<td>R$ " . $funcionarios[$i]['salario'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

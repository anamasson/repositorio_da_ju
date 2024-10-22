<?php
// Dados dos produtos
$produtos = [
    ['nome' => 'Filme A', 'preco' => 20.00, 'descricao' => 'Ação emocionante'],
    ['nome' => 'Filme B', 'preco' => 15.00, 'descricao' => 'Comédia divertida'],
    ['nome' => 'Filme C', 'preco' => 12.50, 'descricao' => 'Drama tocante'],
];
?>

  <!DOCTYPE html>
 <html lang="pt-BR">
 <head>
    <meta charset="UTF-8">
    <title>Produtos</title>
</head>
<body>

<h1>Lista de Produtos</h1>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
    </tr>
    <?php for ($i = 0; $i < count($produtos); $i++): ?>
        <tr>
            <td><?php echo $produtos[$i]['nome']; ?></td>
            <td>R$ <?php echo number_format($produtos[$i]['preco'], 2, ',', '.'); ?></td>
            <td><?php echo $produtos[$i]['descricao']; ?></td>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>

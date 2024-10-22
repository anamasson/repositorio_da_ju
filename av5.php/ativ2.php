<?php
// Nomes dos candidatos
$candidatos = ['Jairinho Junior', 'Rafael Oliver', 'Pablou'];

// Quantidade de votos para cada candidato
$votos = [120, 85, 45];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contagem de Votos</title>
</head>
<body>

<h1>Resultado da Votação</h1>

<table border="1">
    <tr>
        <th>Candidato</th>
        <th>Votos</th>
    </tr>
    <?php for ($i = 0; $i < count($candidatos); $i++): ?>
        <tr>
            <td><?php echo $candidatos[$i]; ?></td>
            <td><?php echo $votos[$i]; ?></td>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>

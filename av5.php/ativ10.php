<?php
// Array com os nomes das páginas
$paginas = ["Home", "Sobre", "Serviços"];
function gerarMenu($paginas) {
    echo '<ul>';
    for ($i = 0; $i < count($paginas); $i++) {
        echo '<li><a href="' . strtolower($paginas[$i]) . '.php">' . $paginas[$i] . '</a></li>';
    }
    echo '</ul>';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Menu Dinâmico</title>
</head>
<body>
    <h2>Menu de Navegação</h2>
    <?php gerarMenu($paginas); ?>
</body>
</html>

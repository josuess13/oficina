<?php

$pagina = 'home';

if (isset($_GET['i'])) {
    $pagina = addslashes($_GET['i']);
}

include 'views/menu.php';
include 'views/footer.php';

switch ($pagina) {
    case 'inicio':
        include 'views/centro.php';
        break;
    case 'produtos':
        include 'views/produtos.php';
        break;
    case 'servicos':
        include 'views/servicos.php';
        break;
    case 'vendas':
        include 'views/vendas.php';
        break;
    case 'manutencao':
        include 'views/manutencao.php';
        break;
    case 'clientes':
        include 'views/clientes.php';
        break;
    default:
        include 'views/centro.php';
        break;
}
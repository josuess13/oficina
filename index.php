<?php

$pagina = 'home';

if (isset($_GET['i'])) {
    $pagina = addslashes($_GET['i']);
}

include 'views/menu.html';
include 'views/footer.html';

switch ($pagina) {
    case 'inicio':
        include 'views/centro.html';
        break;
    
    case 'produtos':
        include 'views/produtos.html';
        break;
    default:
        include 'views/centro.html';
        break;
}
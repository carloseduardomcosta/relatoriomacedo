<?php

# Base de dados
include 'bd.php';


# Cabe
include 'header.php';

#conteudo da página
 if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'formulario';
}

switch($pagina)
{
    
    case 'formulario': include 'views/formulario.php'; break;
    case 'relatorios': include 'views/relatorios.php'; break;
    case 'graficos': include 'views/graficos.php'; break;
    
    default: include 'formulario.php'; break;
}



# Rodapé
include 'footer.php';


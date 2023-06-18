<?php
if (isset($_GET['p'])){
if($_GET['p']== 'inicio')
include('content/pages/inicio.php');

else if($_GET['p']== 'mestre')
    include('content/pages/mestre.php');

else if($_GET['p']== 'academia')
    include('content/pages/academia.php');

else if($_GET['p']== 'kempo')
    include('content/pages/modalidades/kempo.php');
    
else if($_GET['p']== 'treino-funcional')
    include('content/pages/modalidades/treino-funcional.php');
    
else if($_GET['p']== 'equipa-competicao')
    include('content/pages/equipas/equipa-competicao.php');
else if($_GET['p']== 'dragonkids')
    include('content/pages/equipas/dragonkids.php');
else if($_GET['p']== 'contacto')
    include('content/pages/contacto.php');
else
    include('content/pages/404.php');
}
else{
    include('content/pages/inicio.php');
}
?>
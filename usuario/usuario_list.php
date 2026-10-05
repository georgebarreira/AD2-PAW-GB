<?php
    include 'usuario/usuario.php';
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Lista de Usuários</title>';
    echo '</head>';
    echo '<body>';
    echo '<h1>Lista de Usuários</h1>';
    $usuarios = (new Usuario('', '', ''))->listarUsuarios();
    echo $usuarios;
   
   
   
    echo '</body>';
    echo '</html>'; 
?>
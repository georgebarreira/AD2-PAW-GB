
<?php
/* Também disponível em: https://github.com/georgebarreira/AD2-PAW-GB*/

    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Prompt Battle</title>';
    echo '</head>';
    echo '<body>';

   
    echo '<h1>Prompt Battle</h1>';
    echo '<p>Bem-vindo ao Prompt Battle!</p>';
    echo '<p>Este é um sistema de desafios de prompts, onde os usuários podem submeter suas respostas para diferentes desafios utilizando modelos de linguagem.</p>';
    echo '<button type="button" onclick="window.location.href=\'usuarios.php\'">Gerenciar Usuários</button>';
    echo '<button type="button" onclick="window.location.href=\'modelos.php\'">Gerenciar Modelos</button>';
    echo '<button type="button" onclick="window.location.href=\'desafios.php\'">Gerenciar Desafios</button>';
    echo '<button type="button" onclick="window.location.href=\'submissoes.php\'">Gerenciar Submissões</button>';
 
    echo '</body>'; 
    echo '</html>';

  ?>
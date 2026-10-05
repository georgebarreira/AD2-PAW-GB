<?php 
include '../banco/bd.php';

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Gerenciar Usuários</title>';
echo '</head>';
echo '<body>';
echo '<h1>Gerenciar Usuários</h1>';



if ($conn){
    $sql = "SELECT id, nome, nickname, email FROM usuarios";
    $resultado = $conn->query($sql);
    


    echo '<table border="1">';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Nome</th>';
    echo '<th>Nickname</th>';
    echo '<th>Email</th>';
    echo '<th colspan="2">Editar</th>';
    echo '</tr>';
    while ($row = $resultado->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["nome"] . '</td>';
        echo '<td>' . $row["nickname"] . '</td>';
        echo '<td>' . $row["email"] . '</td>';
        echo '<td><Button>Editar</Button></td>';
        echo '<td><Button>Excluir</Button></td>';
        echo '</tr>';
    }
}else{
    echo "Erro ao conectar ao banco de dados: " . mysqli_connect_error();
}


echo '</body>';
echo '</html>';
?>
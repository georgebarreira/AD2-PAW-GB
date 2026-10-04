<?php
// conecta ao banco
require_once 'bd.php'; 

// insere usuários teste
$sql = "INSERT INTO usuarios (nome, nickname, email) VALUES
            ('user1', 'user1', 'user1@example.com'),
            ('user2', 'user2', 'user2@example.com'),
            ('user3', 'user3', 'user3@example.com'),
            ('user4', 'user4', 'user4@example.com')";


if (mysqli_query($conn, $sql)) {
    echo "<br>Dados de usuários inseridos com sucesso!" . "<br>";
} else {
    echo "<br>Erro ao inserir usuários: " . mysqli_error($conn);
}
// insere modelos teste
$sql = "INSERT INTO modelos (nome, empresa, versao, status) VALUES
            ('Gemini', 'Google', '1.0', 'ativo'),
            ('Claude', 'Anthropic', '1.0', 'ativo'),
            ('Mistral', 'Mistral', '1.0', 'ativo'),
            ('LLaMA', 'Meta', '1.0', 'ativo')";

if (mysqli_query($conn, $sql)) {
    echo "<br>Dados de modelos inseridos com sucesso!" . "<br>";
} else {
    echo "<br>Erro ao inserir Modelos: " . mysqli_error($conn);
}
// insere desafios teste
$sql = "INSERT INTO desafios (titulo, descricao, categoria, data_limite, status) VALUES
            ('Desafio 1', 'Descrição do Desafio 1', 'Categoria A', '2030-01-01 12:00:00', 'aberto'),
            ('Desafio 2', 'Descrição do Desafio 2', 'Categoria B', '2028-02-01 12:00:00', 'aberto'),
            ('Desafio 3', 'Descrição do Desafio 3', 'Categoria C', '2029-03-01 12:00:00', 'aberto'),
            ('Desafio 4', 'Descrição do Desafio 4', 'Categoria D', '2027-04-01 12:00:00', 'aberto')";


if (mysqli_query($conn, $sql)) {
    echo "<br>Dados de desafios inseridos com sucesso!" . "<br>";
} else {
    echo "<br>Erro ao inserir Desafios: " . mysqli_error($conn);
}
// insere submissões teste
$sql = "INSERT INTO submissoes( usuario_id ,desafio_id , modelo_id, prompt , resposta , nota , data_submissao ) VALUES
    (1, 1, 1, 'Prompt do usuário 1 para o desafio 1', 'Resposta do modelo Gemini', 85.5, '2023-10-01 12:00:00'),
    (2, 2, 2, 'Prompt do usuário 2 para o desafio 2', 'Resposta do modelo Claude', 90.0, '2023-10-02 12:00:00'),
    (3, 3, 3, 'Prompt do usuário 3 para o desafio 3', 'Resposta do modelo Mistral', 78.0, '2023-10-03 12:00:00'),
    (4, 4, 4, 'Prompt do usuário 4 para o desafio 4', 'Resposta do modelo LLaMA', 88.5, '2023-10-04 12:00:00')";
    
if (mysqli_query($conn, $sql)) {
    echo "<br>Dados de submissões inseridos com sucesso!" . "<br>";
} else {
    echo "<br>Erro ao inserir Submissões: " . mysqli_error($conn);
}




mysqli_close($conn);

/*
 Aqui está funcionando pq lá não??

host = 'localhost';
$database = 'prompt_battle';
$user = 'root';
$password = '';
$conn = "";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
} else {
    $sql = "INSERT INTO usuarios (nome, nickname, email) VALUES
            ('user1', 'user1', 'user1@example.com'),
            ('user2', 'user2', 'user2@example.com'),
            ('user3', 'user3', 'user3@example.com'),
            ('user4', 'user4', 'user4@example.com')";
    mysqli_query($conn, $sql);
    echo "Preenchimento do banco de dados concluído.";


}
*/



?>


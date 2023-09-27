<?php
$servername = "Local instance MySQL80"; // Nome do servidor MySQL (geralmente é "localhost")
$port = "3306"; // Porta do servidor MySQL (geralmente é 3306)
$database = "cadastro"; // Nome do banco de dados
$username = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL (deixe em branco se não houver senha)

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nomeusuario = $_POST['nomeusuario'];
$senha = $_POST['senha'];
$repsenha = $_POST['repsenha'];

if ($senha != $repsenha) {
    header('Location: cadastro.html'); // Redireciona de volta para o formulário de cadastro
    exit;
}

$query = "INSERT INTO usuarios (nome, senha) VALUES ('$nomeusuario', '$senha')";

if ($conn->query($query) === TRUE) {
    header('Location: main.html'); // Redireciona para a página "main.html" após o cadastro bem-sucedido
    exit;
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>
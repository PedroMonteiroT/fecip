<?php


$servername = "localhost";
$database = "cadastro";
$username = "root";
$password = "";
//Create connection
$conn = new mysqli($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
$nomeusuario        = $_POST['nomeusuario'];
$senha              = $_POST['senha'];
$repsenha           = $_POST['repsenha'];

if ($senha != $repsenha) {
    Echo "<script>JavaScript:alert('Cadastro Negado')</script>";
    header('Location:cadastro.html');
}
$query = "insert into usuarios(nome, senha) values ('".$nomeusuario."', '".$senha."')";
mysqli_query($conn, $query);
echo "<script>javascript:alert('Cadastrado com sucesso')</script>";
header('Location:main.html');
?>
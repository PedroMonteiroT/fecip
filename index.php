<?php
//include_once('banco.php');

$servername = "cadastro";
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
    header('Location: index.php');
}
$query = "insert into usuarios(nome, senha) values ('".$nomeusuario."', '".$senha."')";
mysqli_query($conn, $query);
echo $query;
?>
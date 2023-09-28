<?php
//include_once('banco.php');
$servername = "localhost";
$database = "portalfit";
$username = "root";
$password = "";
//Create connection
$conn = new mysqli($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
$nomeusuario        = $_POST['nomeusuario'];
$senha              = $_POST['senhausuario'];
$repsenha           = $_POST['repsenha'];

if ($senha != $repsenha) {
    echo "<script>alert('Cadastro Negado')</script>";
    header('location:cadastro.html');
}
$query = "insert into usuarios(nome, senha) values ('".$nomeusuario."', '".$senha."')";
mysqli_query($conn, $query);
echo "<script>alert('Cadastrado com sucesso')</script>";
header('location:main.html');
?>
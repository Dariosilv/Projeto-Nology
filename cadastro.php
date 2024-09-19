<?php
// cadastrar.php

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "RootAdmin@24";
$dbname = "cadastro_db";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém os dados do formulário
$user = $_POST['username'];
$pass = $_POST['password'];

// Insere os dados no banco de dados
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
    // Redireciona para a página de login
    header("Location: login.html");
    exit();
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];

    $conn->query("INSERT INTO aluno (nome, sobrenome, email) VALUES ('$nome', '$sobrenome', '$email')");

    header("Location: index.php");
}
?>

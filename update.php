<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];

    $conn->query("UPDATE aluno SET nome='$nome', sobrenome='$sobrenome', email='$email' WHERE id=$id");

    header("Location: index.php");
}
?>
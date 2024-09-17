<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];

    $sql = "INSERT INTO aluno (nome, idade, email) VALUES ('$nome', $idade, '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<form method="POST" action="">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="number" name="idade"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" value="Criar">
</form>

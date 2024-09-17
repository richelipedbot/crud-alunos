<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM aluno WHERE id=$id");
$row = $result->fetch_assoc();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Alunos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<form action="update.php" method="POST" class="p-3">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= $row['nome']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?= $row['sobrenome']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $row['email']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

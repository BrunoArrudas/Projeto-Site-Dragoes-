<?php
include_once 'config/database.php';

// Consulta os usuários
$sql = "SELECT * FROM info_usuarios";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perguntas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cards.css">
    
</head>
<body>

<h1 style="text-align:center;">Se você fosse um dragão, qual seria a sua conexão com os elementos da natureza?</h1>

<div class="container">
    <?php foreach ($perguntas as $perguntas): ?>
        <div class="card">
            <img src="imagens/<?php echo htmlspecialchars($usuario['imagem']); ?>" alt="Foto de <?php echo htmlspecialchars($usuario['nome']); ?>">
            <h3><?php echo htmlspecialchars($usuario['nome']); ?></h3>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($usuario['email']); ?></p>
            <p><strong>Telefone:</strong> <?php echo htmlspecialchars($usuario['telefone']); ?></p>
            <p><strong>Nascimento:</strong> <?php echo date('d/m/Y', strtotime($usuario['data_nascimento'])); ?></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>

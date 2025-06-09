<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Seu Dragão</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body {
    background-image: url('img/bg-textura.jpg'); /* Se quiser usar uma textura */
    background-size: cover;
    background-position: center;
    color: white;
}

header {
    background-color: #000;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav a {
    color: white;
    text-decoration: none;
    margin-right: 20px;
}

.user-thumb {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.resultado-container {
    text-align: center;
    padding: 60px 20px;
}

.resultado-container h1 {
    font-size: 32px;
    margin-bottom: 30px;
}

.dragao-img {
    width: 300px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
}

.dragao-nome {
    font-size: 28px;
    color: #ff4d00;
    margin: 20px 0 10px;
}

.descricao {
    max-width: 500px;
    margin: 0 auto;
    font-size: 16px;
    line-height: 1.5;
}

footer {
    text-align: center;
    padding: 15px;
    font-size: 12px;
    background-color: #000;
    margin-top: 50px;
}

</style>
<body>

<header>
    <div class="nav">
        <a href="#">Home</a>
        <a href="#">Perfil</a>
        <img src="img/user.jpg" alt="Foto do Usuário" class="user-thumb">
    </div>
</header>

<main class="resultado-container">
    <h1>SEU RESULTADO É:</h1>
    
    <img src="img/dragao-colossus.jpg" alt="Dragão Colossus" class="dragao-img">
    
    <h2 class="dragao-nome">DRAGÃO COLOSSUS</h2>
    
    <p class="descricao">Texto sobre o dragão</p>
</main>

</body>
</html>

<?php
include_once 'footer.php';
?>

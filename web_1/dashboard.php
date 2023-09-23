<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="templates/style.css">
</head>
<body>
    <h1>Painel de Controle</h1>
    <p>Bem-vindo, <?php echo $_SESSION['username']; ?>!</p>
    <a href="index.php">Página Inicial</a>
    <a href="write.php">Criar Post</a>
    <a href="logout.php">Sair</a>
    <a href="remove_account.php">Remover Conta</a>
</body>
</html>

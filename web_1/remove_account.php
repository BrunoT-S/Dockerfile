<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_SESSION['username'];
    unlink("users/$username.txt");
    session_destroy();
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
    <h1>Remover Conta</h1>
    <p>Você tem certeza de que deseja remover sua conta?</p>
    <form method="POST" action="remove_account.php">
        <input type="submit" value="Sim, remover minha conta">
    </form>
    <a href="dashboard.php">Cancelar</a>
</body>
</html>

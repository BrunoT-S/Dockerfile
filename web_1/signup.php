<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="templates/style.css">
</head>
<body>
    <h1>Criar Conta</h1>
    <form method="POST" action="register.php">
        <label for="username">Nome de Usuário:</label>
        <input type="text" name="username" required><br>
        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Criar Conta">
    </form>
    <a href="login.php">Já tem uma conta? Faça login aqui.</a>
</body>
</html>
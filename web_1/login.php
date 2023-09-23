<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="templates/style.css">
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="authenticate.php">
        <label for="username">Nome de Usuário:</label>
        <input type="text" name="username" required><br>
        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Entrar">
    </form>
    <a href="signup.php">Não tem uma conta? Crie uma aqui.</a>
</body>
</html>

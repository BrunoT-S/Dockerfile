<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $username = $_SESSION['username']; // Obtém o nome de usuário da sessão

    // Salvar o nome de usuário junto com o post
    $postFileName = "posts/" . str_replace(' ', '_', $title) . ".txt";
    $postContent = "<p>Autor: $username</p>\n\n\n<p>$content</p>";
    
    file_put_contents($postFileName, $postContent);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="templates/style.css">
</head>
<body>
    <h1>Escrever Post</h1>
    <form method="POST" action="write.php">
        <label for="title">Título:</label>
        <input type="text" name="title" required><br>
        <label for="content">Conteúdo:</label>
        <textarea name="content" required></textarea><br>
        <input type="submit" value="Publicar">
    </form>
    <a href='index.php'>Voltar à página inicial</a>
</body>
</html>

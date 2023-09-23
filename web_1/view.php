<?php session_start();
     include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="templates/style.css">
</head>
<body>
    <?php
    if (isset($_GET['post'])) {
        $post = $_GET['post'];
        $postContent = file_get_contents("posts/$post");
        echo "<h1>" . basename($post, ".txt") . "</h1>";
        echo "<p>$postContent</p>";
    } else {
        echo "Post não encontrado.";
    }
    ?>
</body>
</html>

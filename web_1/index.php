<?php session_start();
     include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="templates/style.css">
</head>
<body>
    
    <h1>Blog</h1>
    <ul>
        <?php
        $posts = scandir("posts");
        foreach ($posts as $post) {
            if ($post != "." && $post != "..") {
                echo "<li><a href='view.php?post=$post'>" . basename($post, ".txt") . "</a></li>";
            }
        }
        ?>
    </ul>
        <div>
        <a href="write.php">Escrever Post</a>
        <!--<a href="login.php">Login</a>-->

    </div>
</body>
</html>
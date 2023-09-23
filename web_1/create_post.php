<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $postFileName = "posts/" . str_replace(' ', '_', $title) . ".txt";
    file_put_contents($postFileName, $content);
    header("Location: index.php");
}
?>

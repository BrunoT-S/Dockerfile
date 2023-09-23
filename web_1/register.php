<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    file_put_contents("users/$username.txt", $password);
    header("Location: login.php");
}
?>

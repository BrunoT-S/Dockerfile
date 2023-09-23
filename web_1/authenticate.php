<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $storedPassword = file_get_contents("users/$username.txt");

    if (password_verify($password, $storedPassword)) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Login falhou. Verifique suas credenciais.";
    }
}
?>

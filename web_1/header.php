<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="templates/style.css">
</head>
<body>
    <div class="header">
        <?php
       
        if (isset($_SESSION['username'])) {
            echo "Usuário: " . $_SESSION['username'] . " <br>";
            echo "<a href='logout.php'>Sair</a><br><br>";
        } else {
            echo "<a href='login.php'>Login</a> ";
            echo "<a href='signup.php'>Cadastro</a>";
        }
        ?>
    </div>
</body>
</html>

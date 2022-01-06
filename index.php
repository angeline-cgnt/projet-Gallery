<?php
require_once 'my-config.php';
require 'controller/controller-index.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <h1>allPIX</h1>

    <div class="formConnect">
        <form action="index.php" method="POST">
            <div>
                <label for="login">Login</label>
                <input type="text" name="login">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <input class="button" type="submit" name="connect" value="Connexion">
        </form>
    </div>

</body>

</html>
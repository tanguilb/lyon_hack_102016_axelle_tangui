<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 07/10/16
 * Time: 01:13
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>connexion pour voter</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Veuillez vous connecter pour voter</h1>

        <form action="login.php" method="post">
            <label for="login">Entrez votre nom</label>
            <input type="text" name="login" id="login">
            <input type="submit" value="Se connecter">
        </form>
    </body>
</html>

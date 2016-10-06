<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 06/10/16
 * Time: 17:46
 */
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>COncours des plus belles chaussettes</title>
            <meta charset="utf-8" name="viewport" >
            <meta name="Concours des plus belles chaussettes de la wild code school" >
            <link rel="stylesheet" src="css/style.css" >
        </head>
        <body>

            <h1>Sélectionner le fichier et nommer le :</h1>

            <form method="post" action="../src/form.php" enctype="multipart/form-data">
                <label for="picture">Photo à envoyer</label><br>
                <input type="file" name="picture" id="picture"><br>
                <label for="guest_name">Nom</label><br>
                <input type="text" name="guest_name" id="guest_name" ><br>
                <input type="submit" value="envoyer">
            </form>
        </body>
</html>

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
        <meta name="description" content="Bienvenue dans notre galerie photos pour l'élection des meilleures chaussettes de l'inauguration de la Wild Code School.">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
        <script src="https://use.fontawesome.com/d97479808e.js"></script>
        <!--Bootstrap CDN for CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--Our stylesheet-->
        <link rel="stylesheet" href="../public/css/style.css">
        <!--Our script-->
        <script src="script.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <header>
        <a href="http"><img id="logo-wcs" src="images/logo-wildcodeschool.png" alt="Logo of Wild Code School" /></a>
    </header>

    <section id="login">
        <div class="container">
            <div class="row">
                <h2>Veuillez vous connecter pour voter</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-4">
                    <form action="gallery.php" method="post">
                        <label for="login">Entrez votre nom</label>
                        <input type="text" name="login" id="login">
                        <input type="submit" value="Se connecter">
                    </form>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>

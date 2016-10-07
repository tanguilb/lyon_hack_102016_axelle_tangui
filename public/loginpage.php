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
        <title>WCS | Se connecter pour choisir vos chaussettes préférées.</title>
        <meta charset="utf-8">

        <meta name="description" content="Bienvenue dans notre galerie photos pour l'élection des meilleures chaussettes de l'inauguration de la Wild Code School.">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
        <script src="https://use.fontawesome.com/d97479808e.js"></script>
        <!--Bootstrap CDN for CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--Our stylesheet-->

        <link rel="stylesheet" href="css/style.css">
        <!--Our script-->
        <script src="script.js"></script>
    </head>

    <body>
    <header>
        <a href="http"><img id="logo-wcs" src="images/logo-wildcodeschool.png" alt="Logo of Wild Code School" /></a>
    </header>




    <body id="connect-gallery">

    <header class="container-fluid">
        <a href="http://www.wildcodeschool.fr/">
            <img id="logo-wcs" src="images/logo-wildcodeschool.png" alt="Logo of Wild Code School" />
        </a>
        <h1><span>Apprends à coder</span> <br>sans chaussures !</h1>
    </header>

    <section>
        <div class="row">
            <div class="container">
                <h2>Merci de renseigner vos <span>nom et prénom</span> pour vous connecter.</h2>
                <hr>

            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4" id="form-connect">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <form action="gallery.php" method="post">
                        <input type="text" name="login" id="login" placeholder="Votre nom et votre prénom">
                        <input type="submit" value="Se connecter" class="submit-btn">
                    </form>
                </div>
            </div>
    </section>

    </body>
</html>

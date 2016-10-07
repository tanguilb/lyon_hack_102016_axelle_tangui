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
            <title>WCS | Concours des plus belles chaussettes !</title>
            <meta charset="utf-8" name="viewport" >
            <meta name="Concours des plus belles chaussettes de la Wild Code School" >
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
            <script src="https://use.fontawesome.com/d97479808e.js"></script>
            <!--Bootstrap CDN for CSS-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <!--Our stylesheet-->
            <link rel="stylesheet" href="../public/css/style.css">
            <!--Our script-->
            <script src="script.js"></script>
        </head>
        <body id="upload-page">

        <header class="container-fluid">
            <a href="http://www.wildcodeschool.fr/">
                <img id="logo-wcs" src="images/logo-wildcodeschool.png" alt="Logo of Wild Code School" />
            </a>
            <h1><span>Apprends à coder</span> <br>sans chaussures !</h1>
        </header>

        <section id="upload-picture">
            <div class="row">
                <div class="container">
                    <h1>Sélectionnez une photographie pour participer au concours.</h1>
                    <hr>

                    <div class="col-xs-12 col-md-4 col-md-offset-4">
                        <form method="post" action="../src/form.php" enctype="multipart/form-data" id="">
                            <label for="picture">Photographie à envoyer</label><br>
                            <input type="file" name="picture" id="picture"><br>
                            <input type="text" name="guest_name" id="guest_name" placeholder="Nom et prénom"><br>
                            <input type="submit" value="envoyer">
                        </form>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>

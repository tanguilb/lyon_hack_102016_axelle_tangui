
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Galerie Photos | Election des meilleures chaussettes</title>
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

<?php include ('../src/bdd.php') ?>

    <header class="container-fluid">
            <a href="http://www.wildcodeschool.fr/">
                <img id="logo-wcs" src="images/logo-wildcodeschool.png" alt="Logo of Wild Code School" />
            </a>
            <h1><span>Apprends à coder</span> <br>sans chaussures !</h1>
    </header>

    <section id="gallery" class="container-fluid">
        <div class="row">
            <div class="container">
                <h2>Quelles sont les <span>trois paires</span> de chaussettes que vous préférez ?</h2>
                <hr>
            </div>
        </div>

            <div class="row" id="pictures-row">
                <div class="container">
                    <?php
                        $con = getConnexion();

                        $sql = "SELECT * FROM guest WHERE guest_name <> '$_POST[login]'";
                        $result = execSql($con, $sql);


                        while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];

                    echo '<div class="col-xs 12 col-md-4 socks-images"><img src="' . $row["path_picture"] . '"> 
                            <form method="post" action="addlike.php" >' ?>

                    <input type="hidden" name="id[]" value="<?php $row['id']; ?>">
                    <button type="submit" class="like"><i class="fa fa-heart" aria-hidden="true"></i></button>
                    </form>
                </div>
                <?php
                }
                ?>
                </div>
            </div>
    </section>

</body>
</html>
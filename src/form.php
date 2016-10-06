<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 06/10/16
 * Time: 21:17
 */

include 'bdd.php';



// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur

if (isset($_FILES['picture']) AND $_FILES['picture']['error'] == 0)

{

    // Testons si le fichier n'est pas trop gros

    if ($_FILES['picture']['size'] <= 2000000)

    {

        // Testons si l'extension est autorisée

        $infosfichier = pathinfo($_FILES['picture']['name']);

        $extension_upload = $infosfichier['extension'];

        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        $name = $infosfichier['filename'];
        $file = $name. '.' .$extension_upload;

        if (in_array($extension_upload, $extensions_autorisees))

        {

            // On peut valider le fichier et le stocker définitivement

            move_uploaded_file($_FILES['picture']['tmp_name'], '../public/img/' . basename($_FILES['picture']['name']));

            echo "L'envoi a bien été effectué !";

        }

    }

}
$pictureurl = '../public/img/'.$file;



$req = "INSERT INTO guest (path_picture, guest_name) VALUES ('$pictureurl', '$_POST[guest_name]')";
$result = execSql(getConnexion(), $req);

header('location: ../public/index.php');

?>



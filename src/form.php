<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 06/10/16
 * Time: 21:17
 */

include 'bdd.php';





if (isset($_FILES['picture']) AND $_FILES['picture']['error'] == 0)

{



    if ($_FILES['picture']['size'] <= 2000000)

    {



        $infosfichier = pathinfo($_FILES['picture']['name']);

        $extension_upload = $infosfichier['extension'];

        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        $name = $infosfichier['filename'];
        $file = $name. '.' .$extension_upload;

        if (in_array($extension_upload, $extensions_autorisees))

        {



            move_uploaded_file($_FILES['picture']['tmp_name'], '../public/img/' . basename($_FILES['picture']['name']));

        }

    }

}
$pictureurl = '../public/img/'.$file;

$con = getConnexion();

$req = "INSERT INTO guest (path_picture, guest_name) VALUES ('$pictureurl', '$_POST[guest_name]')";
$result = execSql($con, $req);

header('location: ../public/index.php');





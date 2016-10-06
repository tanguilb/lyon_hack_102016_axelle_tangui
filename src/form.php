<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 06/10/16
 * Time: 21:17
 */

include 'bdd.php';

$req = "INSERT INTO guest(path_picture, guest_name) VALUES ('$POST[picture], $POST[guest_name]')";

$result = execSql(getConnexion(), $req);
header('location: ../public/index.php');
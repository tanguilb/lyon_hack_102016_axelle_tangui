<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 07/10/16
 * Time: 04:56
 */

include '../src/bdd.php';

$con = getConnexion();
$req = "UPDATE guest SET guest_vote=guest_vote+1 WHERE id = '$_POST[$i]'";

$result = execSql($con, $req);

header('location: gallery.php');


<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 07/10/16
 * Time: 04:56
 */

include '../src/bdd.php';
foreach($_POST['id'] as $values){

    echo $values;
/*$con = getConnexion();


$req = 'UPDATE guest SET guest_vote=guest_vote+1 WHERE id = $values';

$result = execSql($con, $req);

header('location: gallery.php');*/

}
<?php
/**
 * Created by PhpStorm.
 * User: tangui
 * Date: 06/10/16
 * Time: 20:56
 */
function getConnexion(){
    $host = "localhost";
    $password = "azerty1234";
    $user = "root";
    $db = "test";

    $mysqli = new mysqli($host, $user, $password, $db);
    if (false === $mysqli->connect_errno) {
        echo "Failled to connect to MySql: (" . $mysqli->connect_errno . ")"  .$mysqli->connect_error ;
        die();
    }
    return $mysqli;
}

function execSql($mysqli, $sql){
    if(!$result = $mysqli->query($sql)){
        echo "failed to run query : (" . $mysqli->errno . ")" . $mysqli->error;
        die();
    }
    return $result;
}
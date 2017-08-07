<?php

session_start();

require_once 'cnx.php';

$email = utf8_decode($_POST['emailP']);
//Verification fichier

$var = "existe";
$var2 = "nonexiste";

    $reponse = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '" . $email . "'");
    $val = $bdd->query("SELECT * FROM oulib_patient WHERE emailP = '" . $email . "'");

    $isa = $reponse->rowCount();
    $rep = $val->rowCount();

    if (($isa == "0") && ($rep == "0")) {
        echo json_encode($var2);
    } else {
        echo json_encode($var);
    }

?>  
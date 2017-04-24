<?php
require_once 'cnx.php';

$id = $_GET['id'];
$status = "terminer";

$bdd->exec("UPDATE `oulib_liste_demande` SET `status` = '" . $status . "' WHERE `id`= " . $_GET['id'] . "") or die(print_r($bdd->ErrorInfo()));
if ($bdd)
    echo 'reussi';
else 
    echo 'echec';
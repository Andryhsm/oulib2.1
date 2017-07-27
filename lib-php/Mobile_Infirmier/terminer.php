<?php
    require '../cnx.php';

    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;

    $status = "terminer";

    if ($bdd->exec("UPDATE oulib_liste_demande SET status = '".$status."' WHERE id= {$id} "))
    {
        echo("Terminé avec succes !");
    }
    else 
    {
        echo("Une erreur est survenue, veuillez réessayer plus tard !");
    }
?>
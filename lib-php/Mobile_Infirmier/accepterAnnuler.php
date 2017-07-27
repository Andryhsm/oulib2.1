<?php
    require '../cnx.php';

    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;
    $status = $data->status;

    if ($bdd->exec("UPDATE oulib_liste_demande SET status = '".$status."' WHERE id= {$id} "))
    {
        if ($status == "accepter") 
        {
            echo("Demande accepté avec succès !");
        } else {
            echo("Vous venez de refuser la demande !");
        }
    }
    else 
    {
        echo("Une erreur est survenue, veuillez réessayer plus tard !");
    }
?>
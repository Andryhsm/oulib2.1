<?php
	require_once "../cnx.php";

	header("Content-Type: text/html; charset: utf-8");
    $post = json_decode(file_get_contents("php://input"));

    $email = $post->email;
    $code = $post->code;

    $req = "SELECT * FROM oulib_infirmiere WHERE emailI = '$email' AND code='$code'";

    $reponse = $bdd->query($req);
    $rep = $reponse->rowCount();

    if($rep > 0)
    {
    	echo("Identiques");
    }
     else 
     {
     	echo("non identique");
     }
/*
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $destinataire = $email;
    $code_aleatoire = rand(10000, 99999);
    $sujet = "CODE D'INSCRIPTION DE L'APPLICATION OULIB";

    $message = "<html><head><title></title></head><body><p>Voici votre code d'inscription pour l'application oulib : </p><br><p><Mot de passe : </b><strong>CODE: </strong> {$code_aleatoire}</p></body></html>";

     //Si l'image n'existe pas en le remplace
    if(mail($destinataire, $sujet, $message, $headers))
    {
        $bdd->exec("UPDATE oulib_infirmier SET code='$code_aleatoire' WHERE emailI='$email'");
        echo "Le code a été bien été renvoyé. Vérifiez votre email !";
    }else{
        echo "Une erreur est survenu lors du renvoi du code. Veuillez réessayer dans quelques instants !";
    }*/

?>
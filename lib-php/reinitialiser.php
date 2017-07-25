<?php
include_once "cnx.php";
//recup adresse mail
    if(isset($_POST['mail'])){
           $mail = $_POST['mail'];
    }
    echo $mail;

    function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    }
    echo generateRandomString(24);
    
// insertion dans la base de donnée
/*$req = $bdd->query("UPDATE oulib-patient set mdpP = " . $randomString ." WHERE emailP =" . $mail . "'");
$data = $req->fetch();*/

//envoi mail
/*$to = $mail; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $to)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
$message = "<html>
                <head></head>
                <body>
                    <b>Votre nouveau mot de passe associé est :</b><br>
                    ".$randomString."
                </body>
            </html>";
$sujet = "Mot de passe oublié";

$header = "From: \"OULIB.FR\"<no-reply-motdepasse@oulib.fr>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne;

mail($to,$sujet,$message,$header);
*/

?>
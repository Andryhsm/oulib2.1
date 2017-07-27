	
<?php
	session_start();
        
	require "../cnx.php";

	header("Content-Type: text/html; charset: utf-8");
	$post = json_decode(file_get_contents("php://input"));

    $patient = $post->patient;

   /* Rencoyer le code par email*/

	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     
   
	$email = $patient->email;
    $destinataire = $email;
    $code_aleatoire = rand(10000, 99999);
    $sujet = "Réinitialisation de votre mot de passe";

    $message = "<html><head><title></title></head><body><p>Voici votre code d'inscription pour l'application oulib : </p><br><p><Mot de passe : </b><strong>CODE: </strong> {$code_aleatoire}</p></body></html>";

 	//Si l'image n'existe pas en le remplace
  
    $bdd->exec("UPDATE FROM oulib_patient SET code='$code_aleatoire' WHERE emailP='$emailP'");

    echo "Le code a été bien renvoyer !";
    echo $patient->email;
?>
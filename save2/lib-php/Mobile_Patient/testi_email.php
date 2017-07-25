	
<?php
	session_start();
        
	require "../cnx.php";

	header("Content-Type: text/html; charset: utf-8");
	$post = json_decode(file_get_contents("php://input"));

    $patient = $post->patient;

   
	$email = $patient->email;
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $destinataire = $email;
    $code_aleatoire = rand(10000, 99999);
    $sujet = "Réinitialisation de votre mot de passe";

    $message = "<html><head><title></title></head><body><p>Pour une raison de sécurité : </p><p>Voici votre code d'inscription pour l'application oulib</p><br><p><Mot de passe : </b><strong>CODE: </strong> {$code_aleatoire}</p></body></html>";

	/*if($bdd->exec("UPDATE `oulib_infirmiere` SET `mdpI` = '".$code_aleatoire."' WHERE `emailI` = '".$email."'"))
	{
		try 
		{*/
			if(mail($destinataire, $sujet, $message, $headers))
			{
				echo("Votre mot de passe a bien été réinitialiser, vos nouveau identifiants ont été envoyé par e-mail. Veuillez donc vérifier celui-ci !");
			} else {
					//echo("Une erreur est survenu lors de la réinitialisation de votre mot de passe. Veuillez réessayer dans quelques instants !");
					echo ("Erreur d'envoie d'email ");
			}
	/*	} catch (Exception $e) {
			echo("Erreur : " .$e->getMessage());
		}*/
/*	}*/



?>
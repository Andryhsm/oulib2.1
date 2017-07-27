<?php 
	require '../cnx.php';

	$post = json_decode(file_get_contents("php://input"));
	$email = $post->email;

	$characts = 'abcdefghijklmnopqrstuvwxyz'; 	
	$characts .= '1234567890'; 	
	$characts .= '#@_-%()&';
	$code_aleatoire = '';  

	for($i=0;$i < 10; $i++) 
	{ 	
		$code_aleatoire .= $characts[ rand() % strlen($characts) ]; 
	} 

	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $destinataire = $email;

    $sujet = "Réinitialisation de votre mot de passe";
    $message = "<html><head><title></title></head><body><p>D'après votre demande de réinitialisation de votre mot de passe, un nouveau mot de passe vous a été attribué.</p><p>Il est ensuite reccomandé de modifier celui-ci une fois que vous êtes connecté pour une raison de sécurité.</p><br><p>Veuillez donc vous connecter avec ces identifiants : <br><br><b>E-mail : </b>{$email}<br><b>Mot de passe : </b>{$code_aleatoire}</p></body></html>";

	if($bdd->exec("UPDATE `oulib_patient` SET `mdpP` = '".$code_aleatoire."' WHERE `emailP` = '".$email."'"))
	{
		try 
		{
			if(mail($destinataire, $sujet, $message, $headers))
			{
				echo("Votre mot de passe a bien été réinitialiser, vos nouveau identifiants ont été envoyé par e-mail. Veuillez donc vérifier celui-ci !");
			} else {
				echo("Une erreur est survenu lors de la réinitialisation de votre mot de passe. Veuillez réessayer dans quelques instants !");
			}
		} catch (Exception $e) {
			echo("Erreur : " .$e->getMessage());
		}
	}else{
		echo ("Vous n'avez pas encore de compte !");
	}
?>
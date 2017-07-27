<?php

	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
	header("Content-Type: text/html; charset:utf-8");

	$post = json_decode(file_get_contents("php://input"));

	$email = $post->email;
	$nom = $post->nom;
	$sujetContact = $post->sujetContact;
	$sujet = "Mr/Mme " .$nom. " - ".$sujetContact." .";
	$messageContact = $post->messageContact;


	$message = "<html><head><title></title></head><body><p> {$messageContact} <br><br> {$email}</p></body></html>";

	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    //$destinataire = "andrinirina.stian@imedsoft.fr; andry.andrianaivo@imedsoft.fr; thierry.halison@medsoft-sante.fr; rado.ratrimosoa@medsoft-sante.fr; fanou.ralaivao@medsoft-sante.fr";
    $destinataire = "andrinirina.stian@gmail.com; andryhsm@gmail.com, fenoheriniainat@gmail.com";

	try 
	{
		if(mail($destinataire, $sujet, $message, $headers))
		{
			echo("Votre message a bien été transmis !<br> Nous vous contacterons dans les plus bref délais!<br> Merci de votre confiance!");
		} else {
			echo("Une erreur est survennue lors de l'envoi de votre message.<br> Veuillez réessayer dans un instant s'il vous plaît! Merci. ");
		}
	} catch (Exception $e) {
		echo("Erreur : " .$e->getMessage());
	}

?>
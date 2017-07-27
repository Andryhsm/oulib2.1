<?php
include_once "cnx.php";
//recup adresse mail
    if(isset($_POST['mail'])){
           $mail = $_POST['mail'];
    }
    //echo ('mail = '.$mail);

    function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
    return $randomString;
    }
    $randomString = generateRandomString(10);
    //echo ('mdp ='.$randomString);
    
    //verificaiton existence mail
    $requete = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = \"".$mail."\"");
    $data = $requete->fetchAll();
    $res = count($data);
    
    if ($res == 0){
	header ('Refresh:5; url= ../login.html');
	echo 'le mail :'.$mail.' n\'est associé à aucun compte, vous allez être redirigé dans 5s';
    }
    
    else{
    //envoie mail
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $destinataire = $mail;

    $sujet = "Réinitialisation de mot de passe";
    $message = "<html><head><title></title></head><body><p>D'après votre demande de réinitialisation de votre mot de passe, un nouveau mot de passe vous a été attribué.</p><p>Il est ensuite reccomandé de modifier celui-ci une fois que vous êtes connecté pour une raison de sécurité.</p><br><p>Veuillez donc vous connecter avec ces identifiants : <br><br><b>E-mail : </b>{$email}<br><b>Mot de passe : </b>{$code_aleatoire}</p></body></html>";

	if($bdd->exec("UPDATE `oulib_infirmiere` SET `mdpI` = '".$randomString."' WHERE `emailI` = '".$mail."'"))
	{
		try 
		{
			if(mail($destinataire, $sujet, $message, $headers))
			{
				echo("Votre mot de passe a bien été réinitialiser, vos nouveau identifiants ont été envoyé par e-mail. Veuillez donc vérifier celui-ci !");
			} else {
				header ('Refresh:5; url= ../login.html');
				echo("Une erreur est survenu lors de la réinitialisation de votre mot de passe. Veuillez réessayer dans quelques instants !");
			}
		} catch (Exception $e) {
			echo("Erreur : " .$e->getMessage());
		}
	}
    }


?>
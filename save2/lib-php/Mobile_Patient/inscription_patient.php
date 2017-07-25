	
<?php
	session_start();
        
	require "../cnx.php";

	header("Content-Type: text/html; charset: utf-8");
	$post = json_decode(file_get_contents("php://input"));

    $patient = $post->patient;

    /*Enregistrement du fichier image dans la repertoire*/

    $data = $post->image;
	$base_to_php = explode(',', $data);
    $data_val = base64_decode($base_to_php[1]);
   
	      
    $mdp = $patient->motdepasse;
	$conf_mdp = $patient->confmotdepasse;
	$nom =  utf8_decode($patient->nom);
	$prenom = utf8_decode($patient->prenom);
	$email = $patient->email;
	$tel = $patient->telephone;
	$rue = utf8_decode($patient->rue);
	$code_postal = $patient->code_postal;
	$ville = utf8_decode($patient->ville);
	$code_acces = $patient->codeacces;
	$etage = utf8_decode($patient->etage);
	$info_sup = utf8_decode($patient->infosup);
	$type_soin1 = utf8_decode($patient->typesoins[0]);
	$type_soin2 = utf8_decode($patient->typesoins[1]);
	$type_soin3 = utf8_decode($patient->typesoins[2]);
	$type_soin4 = utf8_decode($patient->typesoins[3]);
    
    $frequence_soin1 = $patient->type_cicatrisation;
	$frequence_soin2 = $patient->type_stomatherapie;
	$frequence_soin3 = $patient->type_perfusion;
	$frequence_soin4 = $patient->type_sondage;
	
	$par1 = $patient->nombre_cicatrisation;
	$par2 = $patient->nombre_stomatherapie;
	$par3 = $patient->nombre_perfusion;
	$par4 = $patient->nombre_sondage;		


   //Des preparation pour l'envoye des emails
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     
   
	$email = $patient->email;
    $destinataire = $email;
    $code_aleatoire = rand(10000, 99999);
    $sujet = "Réinitialisation de votre mot de passe";

    $message = "<html><head><title></title></head><body><p>Voici votre code d'inscription pour l'application oulib : </p><br><p><Mot de passe : </b><strong>CODE: </strong> {$code_aleatoire}</p></body></html>";

 	//Si l'image n'existe pas en le remplace
    if($post->image == "")
    	$photo = "avatar_patient.png";
    else{
    	$nomPhoto = "image_".$patient->nom."".$patient->prenom.".png";
    	$filepath = "../../image-person/".$nomPhoto;
		file_put_contents($filepath,$data_val);
 	    $photo = $nomPhoto;
    }

    $reponse = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '" . $email . "'");
    $val = $bdd->query("SELECT * FROM oulib_patient WHERE emailP = '" . $email . "'");

    $isa = $reponse->rowCount();
    $rep = $val->rowCount();

    if (($isa == "0") && ($rep == "0")) {
        if ($mdp == $conf_mdp) {

        	if(mail($destinataire, $sujet, $message, $headers))
			{
				$patient = $val->fetch();
            	$bdd->exec("INSERT INTO `oulib_patient` (`photo`,`nomP`,`prenomP`,`emailP`,`mdpP`,`telP`,`rueP`,`code-postalP`,`villeP`,`code-acces`,`etage`,`info-sup`,`type-soinP1`,`type-soinP2`,`type-soinP3`,`type-soinP4`,`frequence-soin1`,`frequence-soin2`,`frequence-soin3`,`frequence-soin4`,`par1`,`par2`,`par3`,`par4`,`code`) VALUES ('$photo','$nom','$prenom','$email','$mdp','$tel','$rue','$code_postal','$ville','$code_acces','$etage','$info_sup','$type_soin1','$type_soin2','$type_soin3','$type_soin4','$frequence_soin1','$frequence_soin2','$frequence_soin3','$frequence_soin4','$par1','$par2','$par3','$par4','$code_aleatoire')");
			} else {
					//echo("Une erreur est survenu lors de la réinitialisation de votre mot de passe. Veuillez réessayer dans quelques instants !");
					echo ("erreur");
			}
            
        } else
            echo "Votre mot de passe n'est pas identique !";
    } else {
        echo 'Email déjà employée !';
    }

?>
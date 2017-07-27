
<?php
	require '../cnx.php';

	header("Content-Type: text/html; charset:utf-8");

	$post = json_decode(file_get_contents("php://input"));
	$patient = $post->patient;
/*
    $mdp = $post->$mdpP);
	$conf_mdp = $post->mdpConf);*/
	$nom = utf8_decode($patient->nomP);
	$prenom = utf8_decode($patient->prenomP);
	$email = utf8_decode($patient->emailP);
	$tel = utf8_decode($patient->telP);
	$rue = utf8_decode($patient->rueP);
	$code_postal = utf8_decode($post->code_postalP);
	$ville = utf8_decode($patient->villeP);
	$code_acces = utf8_decode($post->code_acces);
	$etage = utf8_decode($patient->etage);
	$info_sup = utf8_decode($post->info_sup);
	$type_soin1 = utf8_decode($post->type_soinP1);
	$type_soin2 = utf8_decode($post->type_soinP2);
	$type_soin3 = utf8_decode($post->type_soinP3);
	$type_soin4 = utf8_decode($post->type_soinP4);
	$frequence_soin1 = utf8_decode($post->frequence_soin1);
	$frequence_soin2 = utf8_decode($post->frequence_soin2);
	$frequence_soin3 = utf8_decode($post->frequence_soin3);
	$frequence_soin4 = utf8_decode($post->frequence_soin4);
	$par1 = utf8_decode($patient->par1);
	$par2 = utf8_decode($patient->par2);
	$par3 = utf8_decode($patient->par3);
	$par4 = utf8_decode($patient->par4);
	$mdpP = $patient->mdpP;
	$confMdp = $patient->mdpConf;

	$p = false;

	if($post->modif_image == "oui"){
    	$data = $post->image;
		$base_to_php = explode(',', $data);
    	$data_val = base64_decode($base_to_php[1]);
    	$nomPhoto = "image_".$patient->nomP."".$patient->prenomP.".png";
    	$filepath = "../../image-person/".$nomPhoto;
		file_put_contents($filepath,$data_val);
 	    $photo = $nomPhoto;
    }else{
    	$photo = $patient->photo;
    }

    $req = "UPDATE `oulib_patient` SET `photo` = '" . $photo . "',`nomP` = '" . $nom . "',`prenomP` = '" . $prenom . "',`telP` = '" . $tel . "',`rueP` = '" . $rue . "',`code-postalP` = '" . $code_postal . "',`villeP` = '" . $ville . "',`code-acces` = '" . $code_acces . "',`etage` = '" . $etage . "',`info-sup` = '" . $info_sup . "',`type-soinP1` ='" . $type_soin1 . "',`type-soinP2` = '" . $type_soin2 . "',`type-soinP3` = '" . $type_soin3 . "',`type-soinP4` = '" . $type_soin4 . "',`frequence-soin1` = '" . $frequence_soin1 . "',`frequence-soin2` = '" . $frequence_soin2 . "',`frequence-soin3` = '" . $frequence_soin3 . "',`frequence-soin4` = '" . $frequence_soin4 . "',`par1` = '" . $par1 . "',`par2` = '" . $par2 . "',`par3` = '" . $par3 . "',`par4` = '" . $par4 . "',`mdpP` = '" . $mdpP . "' WHERE `emailP`= '" . $email . "'";

    if($bdd->exec($req)){
    	echo "Modification avec succes !";
    	$p = true;
    }
    if($post->modif_image == "oui"){
    	if($p == false){
    		echo "Modification d'image avec succes ! ";
	 	 }
    }else{
    	$photo = $patient->photo;
    }
	
?>
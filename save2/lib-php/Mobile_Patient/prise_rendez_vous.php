<?php
	session_start();
        
	require "../cnx.php";

	header("Content-Type: text/html; charset: utf-8");
	$post = json_decode(file_get_contents("php://input"));
	$infirmier = $post->infirmier;
	$patient = $post->patient;

	$query = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailP=\"".$patient->emailP."\" AND emailI=\"".$infirmier->emailI."\"");
	
	if($query->rowCount() == 0){
			$emailI = $infirmier->emailI;

			$date_soin1 = $post->date_soin;
			$heure_soin = $post->heure_soin;
			$commentaire = $post->commentaire;
			$emailP = $patient->emailP;
			$latLng = $infirmier->latLng;

			$nomP = $patient->nomP;
			$prenomP = $patient->prenomP;	
			$telP = $patient->telP;
			$rueP = $patient->rueP;
			$codePostalP = $post->code_postalP;
			$villeP = $patient->villeP;
			$typeSoin1 = $post->type_soinP1;
			$typeSoin2 = $post->type_soinP2;
			$typeSoin3 = $post->type_soinP3;
			$typeSoin4 = $post->type_soinP4;
			$frequenceSoin1 = $post->frequence_soin1;
			$frequenceSoin2 = $post->frequence_soin2;
			$frequenceSoin3 = $post->frequence_soin3;
			$frequenceSoin4 = $post->frequence_soin4;
			
			$photo = $patient->photo;

			$codeAccess = $post->code_acces;
			$etage = $patient->etage;
			$infoSup = $post->info_sup;


			$adresse = $rueP. ", ".$codePostalP. ", ".$villeP;


			$status = "attente";
			
			$typeSoinP = $typeSoin1;

			if($typeSoin2 != null)
				$typeSoinP = $typeSoin1. " - ". $typeSoin2;
			if($typeSoin3 != null)
				$typeSoinP = $typeSoin1. " - ". $typeSoin2 . " - ". $typeSoin3;
			if($typeSoin4 != null)
				$typeSoinP = $typeSoin1. " - ". $typeSoin2 . " - ". $typeSoin3 ." - ". $typeSoin4;
			

			if($frequenceSoin2 != null)
				$frequenceSoinP = $frequenceSoin1. " - ". $frequenceSoin2;
			if($frequenceSoin3 != null)
				$frequenceSoinP = $frequenceSoin1. " - ". $frequenceSoin2 . " - ". $frequenceSoin3;
			if($frequenceSoin4 != null)
				$frequenceSoinP = $frequenceSoin1. " - ". $frequenceSoin2 . " - ". $frequenceSoin3 ." - ". $frequenceSoin4;

			$date = "heure";
			$q = "INSERT INTO `oulib_liste_demande` (`photo`, `emailI`, `nomP`, `prenomP`, `telP`, `adresseP`, `typeSoinP`, `commentaire`, `frequenceSoin`, `status`, `emailP`, `date_soin`, `heure_soin`, `latLng`) VALUES('$photo', '$emailI', '$nomP', '$prenomP', '$telP' , '$adresse',  '$typeSoinP', '$commentaire', '$frequenceSoinP', '$status', '$emailP', '$date_soin1', '$heure_soin', '$latLng')";


			$bdd->exec($q) or die(print_r($bdd->ErrorInfo()));

			echo "Votre demande à l'infirmiere ".$infirmier->prenomI. " ".$infirmier->nomI. " a été bien envoyer.";
		}else{
			echo "Vous avez déja envoyer une demande à l'infirmiere ".$infirmier->prenomI. " ".$infirmier->nomI. ".";
		}
?>
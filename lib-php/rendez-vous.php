<?php
	session_start();
        
	require "cnx.php";

	$emailI = addslashes($_POST["emailI"]);
	$date_soin1 = ($_POST["date_soin"]);
	$heure_soin = $_POST["heure_soin"];
	$commentaire = addslashes($_POST["commentaire"]);
	$latLng = ($_POST["latLng"]) ? $_POST["latLng"] : "null";

//        echo $emailI;
	
        if ($date_soin1 == "" || $heure_soin == "" || $commentaire == ""){
            echo 'errore';
        }else{
	$emailP = $_SESSION["email"];

	$query = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailP=\"".$emailP."\" AND emailI=\"".$emailI."\"");


	if($query->rowCount() == 0){

			$nomP = $_SESSION["nomP"];
			$prenomP = $_SESSION["prenomP"];	
			$telP = $_SESSION["telP"];
			$rueP = $_SESSION["rueP"];
			$codePostalP = $_SESSION["code-postalP"];
			$villeP = $_SESSION["villeP"];
			$typeSoin1 = $_SESSION["type-soinP1"];
			$typeSoin2 = $_SESSION["type-soinP2"];
			$typeSoin3 = $_SESSION["type-soinP3"];
			$typeSoin4 = $_SESSION["type-soinP4"];
			$frequenceSoin1 = $_SESSION["frequence-soin1"];
			$frequenceSoin2 = $_SESSION["frequence-soin2"];
			$frequenceSoin3 = $_SESSION["frequence-soin3"];
			$frequenceSoin4 = $_SESSION["frequence-soin4"];
			
			$photo = $_SESSION["photo"];

			$codeAccess = $_SESSION["code-acces"];
			$etage = $_SESSION["etage"];
			$infoSup = $_SESSION["info-sup"];


			$adresse = $rueP. ", ".$codePostalP. ", ".$villeP;


			$status = "attente";

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

			//echo $q;

			$bdd->exec($q) or die(print_r($bdd->ErrorInfo()));

		echo "reussi";
	}else{
		echo "existe";
        }}
?>
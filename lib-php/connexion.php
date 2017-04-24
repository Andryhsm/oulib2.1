<?php
 session_start(); 
	
	require 'cnx.php';

	$email = $_POST['email'];
	$mdp = $_POST['mdp'];

	try 
	{
		$reponse = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '".$email."'");
		$query = $bdd->query("SELECT * FROM oulib_patient WHERE emailP = '".$email."'");

			$isa = $reponse->rowCount();
			$rep = $query->rowCount();

			if ($isa == "1") 
			{
				$val = $reponse->fetch();
				if(($val['emailI'] == $email))
				{
					if (($val['mdpI'] == $mdp)) 
					{
						$_SESSION['email'] = $email;
						$_SESSION['nomI'] = utf8_encode($val["nomI"]);
						$_SESSION['prenomI'] = utf8_encode($val["prenomI"]);
						$_SESSION['telI'] = utf8_encode($val["telI"]);
                                                $_SESSION['rueI'] = utf8_encode($val["rueI"]);
                                                $_SESSION['code-postalI'] = utf8_encode($val["code-postalI"]);
                                                $_SESSION['villeI'] = utf8_encode($val["villeI"]);
						$_SESSION['type-soinI1'] = utf8_encode($val["type-soinI1"]);
                                                $_SESSION['type-soinI2'] = utf8_encode($val["type-soinI2"]);
                                                $_SESSION['type-soinI3'] = utf8_encode($val["type-soinI3"]);
                                                $_SESSION['type-soinI4'] = utf8_encode($val["type-soinI4"]);
                                                $_SESSION['lieu-intervention'] = utf8_encode($val["lieu-intervention"]);
												$_SESSION['latLng'] = utf8_encode($val["latLng"]);
						$_SESSION['photo'] = utf8_encode($val['photo']);


						echo("Infirmière");
					} else 
					{
						echo("Mot de passe incorrect !");
					}
				}
			} else 
			{
				if($rep =="1")
				{
					$patient = $query->fetch();
					if(($patient['emailP'] == $email))
					{
						if (($patient['mdpP'] == $mdp)) 
						{
							$_SESSION['email'] = $email;
							$_SESSION['nomP'] = utf8_encode($patient['nomP']);
							$_SESSION['prenomP'] = utf8_encode($patient['prenomP']);
							$_SESSION['telP'] = utf8_encode($patient['telP']);
                                                        $_SESSION['rueP'] = utf8_encode($patient['rueP']);
                                                        $_SESSION['code-postalP'] =utf8_encode($patient['code-postalP']);
							$_SESSION['villeP'] =utf8_encode($patient['villeP']);
                                                        $_SESSION['code-acces'] =utf8_encode($patient['code-acces']);
                                                        $_SESSION['etage'] =utf8_encode($patient['etage']);
                                                        $_SESSION['info-sup'] =utf8_encode($patient['info-sup']);
							$_SESSION['type-soinP1'] =utf8_encode($patient['type-soinP1']);
                                                        $_SESSION['type-soinP2'] =utf8_encode($patient['type-soinP2']);
                                                        $_SESSION['type-soinP3'] =utf8_encode($patient['type-soinP3']);
                                                        $_SESSION['type-soinP4'] =utf8_encode($patient['type-soinP4']);
                                                        $_SESSION['frequence-soin1'] =utf8_encode($patient['frequence-soin1']);
                                                        $_SESSION['frequence-soin2'] =utf8_encode($patient['frequence-soin2']);
                                                        $_SESSION['frequence-soin3'] =utf8_encode($patient['frequence-soin3']);
                                                        $_SESSION['frequence-soin4'] =utf8_encode($patient['frequence-soin4']);
                                                        $_SESSION['photo'] =utf8_encode($patient['photo']);
//							$_SESSION['heure1'] =utf8_encode($patient['heure1'];
//                                                        $_SESSION['heure2'] =utf8_encode($patient['heure2'];
//                                                        $_SESSION['heure3'] =utf8_encode($patient['heure3'];
//                                                        $_SESSION['heure4'] =utf8_encode($patient['heure4'];

							echo("Patient");
						} else 
						{
							echo("Mot de passe incorrect !");
						}
					}
					else
					{
						echo("Cette adresse e-mail n'existe pas !");
					}
				} else {
					echo("Cette adresse e-mail n'existe pas !");
				}
			}

	}
	catch (PDOException $e) {
		die('Erreur : ' . $e->getMessage());
	}

?>
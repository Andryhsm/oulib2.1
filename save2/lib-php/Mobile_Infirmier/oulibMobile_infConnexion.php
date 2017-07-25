<?php
		
	require '../cnx.php';

	$data = json_decode(file_get_contents("php://input"));
	$email = $data->email;
	$mdp = $data->mdp;

	if(!empty($email)) 
	{
		if(!empty($mdp))
		{
			try 
			{
				$reponse = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI = '".$email."'");
				$val = $reponse->fetch();

					if($val['emailI'] == $email)
					{
						if ($val['mdpI'] == $mdp)
						{
							$message = "Infirmiere";
						} else {
							$message = "Mot de passe incorrect";
						}
					} else {
						$message = "Votre adresse email est incorrect";
					}

			} catch (PDOException $e) 
			{
				die('Erreur : ' . $e->getMessage());
			}
		} else {
			$message = "Veuillez indiquer votre mot de passe !";
		}
		
	} else {
		$message = "Veuillez indiquer votre adresse email !";
	}
	echo($message);

?>
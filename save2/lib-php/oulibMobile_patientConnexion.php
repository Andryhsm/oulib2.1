<?php
		
	require 'cnx.php';

	$data = json_decode(file_get_contents("php://input"));
	$email = $data->email;
	$mdp = $data->mdp;

	//echo($email." ".$mdp);
	try 
	{
		$reponse = $bdd->query("SELECT * FROM oulib_patient WHERE emailP = '".$email."'");
		$val = $reponse->fetch();
		if($val['emailP'] == $email)
		{
			if ($val['mdpP'] == $mdp)
			{
				echo("Patient");
			} else {
				echo("Mot de passe incorect");
			}
		} else {
			echo("Votre identifiant est incorrect");
		}
		
	} catch (PDOException $e) 
	{
		die('Erreur : ' . $e->getMessage());
	}
?>
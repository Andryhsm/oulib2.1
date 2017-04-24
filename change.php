<?php
	require 'lib-php/cnx.php';

	$status = ($_POST['status']);
	$id = ($_POST['id']);

	$sql = "UPDATE oulib_liste_demande SET status = '".$status."' WHERE id = '".$id."'";
	try 
	{
		if($bdd->query($sql))
		{
			echo("Succes");
		} else {
			print_r($bdd->ErrorInfo());
		}
	} catch (PDOException $e) 
	{
		die("Erreur " .$e->getMessage());
	}


?>
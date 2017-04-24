<?php
	try
	{
	    $bdd = new PDO('mysql:host=imedsoftciplan.mysql.db;dbname=imedsoftciplan;', 'imedsoftciplan', 'PufmY5M9gXGn');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' .$e->getMessage());
	}
?>
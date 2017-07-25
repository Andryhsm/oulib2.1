<?php
	try
	{
	    $bdd = new PDO('mysql:host=imedsoftciplan.mysql.db;dbname=imedsoftciplan;', 'imedsoftciplan', 'QUwH43i9vP3k');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' .$e->getMessage());
	}
?>
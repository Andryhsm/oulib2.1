<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
	try
	{
		$bdd = new PDO('mysql:host=imedsoftcibast.mysql.db;dbname=imedsoftcibast', 'imedsoftcibast', '1groupeDrn');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>
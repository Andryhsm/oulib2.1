<?php
try
{
	$bdd = new PDO("mysql:host=localhost;dbname=imedsoftcibast", "root", "root");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
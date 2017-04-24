<?php
try
{
	$bdd = new PDO("mysql:host=localhost;dbname=ouinflib", "root", "");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
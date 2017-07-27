<?php
	session_start();
        
	require "../cnx.php";

	header("Content-Type: text/html; charset: utf-8");
	$post = json_decode(file_get_contents("php://input"));
	
	$query = $bdd->query("DELETE FROM oulib_liste_demande WHERE emailP=\"".$post->emailP."\" AND emailI=\"".$post->emailI."\"");
	
	echo "Votre demande avec l'infirmiere ".$post->prenomI." ".$post->nomI." a été bien annuler";	
?>
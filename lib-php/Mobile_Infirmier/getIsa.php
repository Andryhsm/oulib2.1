<?php
	require '../cnx.php';

	header("Content-Type: text/html; charset:utf-8");

	$post = json_decode(file_get_contents("php://input"));
	$email = $post->email;

	$req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '" . $email . "' AND actu = 'nouveau'");
	$rep = $req->rowCount();
	$json = json_encode($rep);
	echo $json;
?>
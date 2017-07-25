<?php
	require '../cnx.php';

	header("Content-Type: text/html; charset:utf-8");

	$post = json_decode(file_get_contents("php://input"));
	$emailI = $post->emailI;
	$emailP = $post->emailP;
	$status = $post->status;

	$req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '" . $emailI . "' AND emailP = '" . $emailP . "' AND  status = '" . $status . "'");

	$data = $req->fetch();

	echo utf8_encode(json_encode($data));
	
?>
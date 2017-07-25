<?php
	require '../cnx.php';

	header("Content-Type: text/html; charset:utf-8");

	$post = json_decode(file_get_contents("php://input"));
	$email = $post->email;
	$status = $post->status;	

	$req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailP = '" . $email . "' AND status = '".$status."'");

	while($data = $req->fetch(PDO::FETCH_OBJ))
	{

		foreach ($data as $key => $value) {
			$donnee[$key] = utf8_encode($value);
		}
		$datas[] = $donnee;
	}	

	$json = json_encode($datas);
	echo $json;
?>
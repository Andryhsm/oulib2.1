<?php
	require '../cnx.php';

	header("Content-Type: text/html; charset:utf-8");

	$post = json_decode(file_get_contents("php://input"));
	$email = $post->email;

	$date = Date('Y-m-d');

	$mois = substr($date, -5, 2);

	$annee = substr($date, 0, 4);

	$jour = "01";

	if($mois == "01")
	{
		$moismoins1 = "12";
		$annee = $annee - 1;
		$dateMoinsUnMois = $jour."-".$moismoins1."-".$annee;
	} elseif (($mois>01) && ($mois<10)) 
	{
		$moismoins1 = "0";
		$moismoins1 .= $mois - 1;
		$dateMoinsUnMois = $jour."-".$moismoins1."-".$annee;
	} else {
		$moismoins1 = $mois - 1;
		$dateMoinsUnMois = $jour."-".$moismoins1."-".$annee;
	}

	$req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '".$email."' AND status = 'terminer'");

	while($data = $req->fetch(PDO::FETCH_OBJ))
	{
		foreach ($data as $key => $value) {
			$donnee[$key] = utf8_encode($value);
		}
		$datas[] = $donnee;
	}	

	$json = json_encode($datas);
	echo($json);
?>
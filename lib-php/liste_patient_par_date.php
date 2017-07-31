<?php
	
	require 'cnx.php';

	$emailI = $_POST['emailI'];
	$date_soin = $_POST["date_soin"];


	$reponse = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI='".$emailI."' AND date_soin='".$date_soin."'");
	
	$donnees = array();
	$donnee = array();
	$datas = array();
	
	while($data = $reponse->fetch(PDO::FETCH_OBJ))
	{
		foreach ($data as $key => $value) {
			$donnee[$key] = utf8_encode($value);
		}
			$datas[] = json_encode($donnee);
	}	
		

		$json = json_encode($datas);
		echo $json;

?>
<?php
		
		require_once 'cnx.php';
		
		$d = array('solofo' => array('koto' => "liva" ));
		
		header("Content-Type: text/html; charset:utf-8");

		$donnees = array();
		$donnee = array();
		$datas = array();
		
		$reponse = $bdd->query("SELECT * FROM oulib_infirmiere");
	
		while($data = $reponse->fetch(PDO::FETCH_OBJ))
		{

			foreach ($data as $key => $value) {
				$donnee[$key] = utf8_encode($value);
			}
			$datas[] = json_encode($donnee);

		}	
		

		$json = json_encode($datas);

		$json = str_replace("code-postalI", "code_postalI", $json);
		$json = str_replace("type-soinI1", "type_soinI1", $json);
		$json = str_replace("type-soinI2", "type_soinI2", $json);
		$json = str_replace("type-soinI3", "type_soinI3", $json);
		$json = str_replace("type-soinI4", "type_soinI4", $json);
		$json = str_replace("lieu-intervention", "lieu_intervention", $json);
		echo $json;
		
?>	
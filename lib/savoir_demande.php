<?php
	
		require '../cnx.php';

		$emailP = $_GET["emailP"];
		$query = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailP=\""+$emailP+"\"");
		if($query){
			echo "inexiste";
		}else{
			echo "existe";
		}

?>
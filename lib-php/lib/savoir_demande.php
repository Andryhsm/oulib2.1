<?php
	
		require '../cnx.php';


		$emailP = $_GET["emailP"];
		$emailI = $_GET["emailI"];

		$query = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailP='".$emailP."' AND emailI='".$emailI."'");
		
		if($query->fetch()){
			echo "existe";
		}else{
			echo "inexiste";
		}
?>
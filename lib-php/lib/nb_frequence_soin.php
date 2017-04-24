<?php
	require "../cnx.php";

	$emailP = $_GET["emailP"];
	$emailI = $_GET["emailI"];
	$infirmier = array();
	$patient = array();
	$query = $bdd->query("SELECT * FROM oulib_patient WHERE emailP='".$emailP."'");
	$query_inf = $bdd->query("SELECT * FROM oulib_infirmiere WHERE emailI='".$emailI."'") or die(print_r($bdd->errorInfo()));

	foreach ($query as $row) {
		$patient = $row;
	}


	foreach ($query_inf as $row) {
		$infirmier = $row;
	}



	if($patient["frequence-soin1"] != null){

		if($infirmier["type-soinI1"] != null){
			echo "<label for='ts1'>".$infirmier["type-soinI1"]."</label>";
			echo "<input type='checkbox' name='ts1'/>";
		}
		if($infirmier["type-soinI2"] != null){
			echo "<label for='ts2'>".$infirmier["type-soinI2"]."</label>";
			echo "<input type='checkbox' name='ts2'/>";
		}
		if($infirmier["type-soinI3"] != null){
			echo "<label for='ts3'>".$infirmier["type-soinI3"]."</label>";
			echo "<input type='checkbox' name='ts3'/>";
		}
		if($infirmier["type-soinI4"] != null){
			echo "<label for='ts4'>".$infirmier["type-soinI4"]."</label>";
			echo "<input type='checkbox' name='ts4'/>";
		}

		if($infirmier["type-soinI1"] != null){		
			if($patient["frequence-soin1"] != null)
				$fs1 = (int) $patient["frequence-soin1"];
			echo "<h3>Soin ".$infirmier["type-soinI1"]."</h3>";		
			for ($i=0; $i < $fs1 ; $i++) { 
				echo "<div id='1'><p><strong>Heure de soin : </strong>&nbsp;&nbsp;&nbsp;<input id='heure_soin' type='text' placeholder='Heure de soin'/></p>";
				echo "<p><strong>Date : </strong><input type='date' id='date_soin' placeholder=\"Date d\'intervention\"/></p></div>";
			}				
		}else{
			echo "<h4>Ca ne correspond pas à aucun type de votre soin</h4>";
		}

		if($infirmier["type-soinI2"] != null){			
			if($patient["frequence-soin2"] != null)
				$fs2 = (int) $patient["frequence-soin2"];
			echo "<h3>Soin ".$infirmier["type-soinI2"]."</h3>";		
			for ($i=0; $i < $fs2 ; $i++) { 
				echo "<div id='2'><p><strong>Heure de soin : </strong>&nbsp;&nbsp;&nbsp;<input id='heure_soin' type='text' placeholder='Heure de soin'/></p>";
				echo "<p><strong>Date : </strong><input type='date' id='date_soin' placeholder=\"Date d\'intervention\"/></p></div>";
			}				
		}else{
			echo "<h4>Ca ne correspond pas à aucun type de votre soin</h4>";
		}

		if($infirmier["type-soinI3"] != null){			
			if($patient["frequence-soin3"] != null)
				$fs3 = (int) $patient["frequence-soin3"];
			echo "<h3>Soin ".$infirmier["type-soinI3"]."</h3>";
			for ($i=0; $i < $fs3 ; $i++) { 
				echo "<div id='3'><p><strong>Heure de soin : </strong>&nbsp;&nbsp;&nbsp;<input id='heure_soin' type='text' placeholder='Heure de soin'/></p>";
				echo "<p><strong>Date : </strong><input type='date' id='date_soin' placeholder=\"Date d\'intervention\"/></p></div>";
			}	
		}else{
			echo "<h4>Ca ne correspond pas à aucun type de votre soin</h4>";
		}

		if($infirmier["type-soinI4"] != null){
			if($patient["frequence-soin4"] != null)
				$fs4 = (int) $patient["frequence-soin4"];
			echo "<h3>Soin ".$infirmier["type-soinI4"]."</h3>";
			for ($i=0; $i < $fs4 ; $i++) { 
				echo "<div id='4'><p><strong>Heure de soin : </strong>&nbsp;&nbsp;&nbsp;<input id='heure_soin' type='text' placeholder='Heure de soin'/></p>";
				echo "<p><strong>Date : </strong><input type='date' id='date_soin' placeholder=\"Date d\'intervention\"/></p></div>";
			}				
		}else{
			echo "<h4>Ca ne correspond pas à aucun type de votre soin</h4>";
		}

	}
	
?>


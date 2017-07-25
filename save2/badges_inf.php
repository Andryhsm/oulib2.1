<?php
	require 'lib-php/cnx.php';

	$mail = ($_POST['email']);

	$req = "SELECT * FROM oulib_liste_demande WHERE emailI ='".$mail."' AND (status = 'attente' OR status = 'annuler')";
	$enr = $bdd->query($req);
	$numEnr = $enr->rowCount();
	$data = $enr->fetch();
	if ($numEnr > 0) 
	{
		echo("Liste <span class='badge active'>".$numEnr."</span>");
	} else {

		echo("Liste");
	}
?>
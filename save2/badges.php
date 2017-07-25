<?php
	require 'lib-php/cnx.php';

	$status = "lu";
	$mail = ($_POST['email']);

	$req = "SELECT * FROM oulib_liste_demande WHERE emailP ='".$mail."' AND (status = 'accepter' OR status = 'refuser')";
	$enr = $bdd->query($req);
	$numEnr = $enr->rowCount();
	$data = $enr->fetch();

	// NOVAINA HO TABLEAU DE BORD LE NOTIFICATION TETO
	if ($numEnr > 0) 
	{
		echo("Tableau de bord <span class='badge badge-primary'>".$numEnr."</span>");
	} else {

		echo("Tableau de bord");
	}
?>

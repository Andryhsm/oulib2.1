<?php
	require 'lib-php/cnx.php';

	$mail = ($_POST['email']);

	$req = "SELECT * FROM oulib_liste_demande WHERE emailP ='".$mail."' AND status = 'attente'";
	$enr = $bdd->query($req);
	$numEnr = $enr->rowCount();

	if($numEnr != 0)
	{
		while($data = $enr->fetch()) 
		{
			$name = $bdd->query("SELECT nomI, prenomI FROM oulib_infirmiere WHERE emailI = '".$data['emailI']."'");
			while($valny = $name->fetch()) 
			{
				echo("
					<div class='panel panel-primary Tableau de bord'>
					  <div class='panel-heading'>
					    <h4 class='panel-title'><span class='glyphicon glyphicon-pause'></span>&nbsp;&nbsp;Demande en attente</h4>
					  </div>
					  <div class='panel-body'>
							Votre demande envoyée à l'infirmière  <b><i>".utf8_encode($valny['nomI'])." ".utf8_encode($valny['prenomI'])."</i></b> est en attente de validation
					    	<br>
					    		<input type='hidden' class='{$data['id']}' value='{$data['status']}'>
					    	<div class='pull-right'>
					    		<a type='button' class='btn btn-default' id='{$data['id']}' onClick='showId({$data['id']});'>Annuler &nbsp;&nbsp;<span class='glyphicon glyphicon-off'></span>
					    		</a>
					    	</div>
					  </div>
					</div>");
			}
		}
	}
?>
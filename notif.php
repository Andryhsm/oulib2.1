<?php
	require 'lib-php/cnx.php';

	$mail = ($_POST['email']);

	$req = "SELECT * FROM oulib_liste_demande WHERE emailP ='".$mail."' AND (status = 'accepter' OR status = 'refuser')";
	$enr = $bdd->query($req);
	$numEnr = $enr->rowCount();

	if($numEnr != 0)
	{
		while($data = $enr->fetch()) 
		{
			$name = $bdd->query("SELECT nomI, prenomI FROM oulib_infirmiere WHERE emailI = '".$data['emailI']."'");
			while($valny = $name->fetch()) 
			{
				if ($data['status'] == "refuser") 
				{
					echo("
						<div class='panel panel-danger Tableau de bord'>
						  <div class='panel-heading'>
						    <h4 class='panel-title'><span class='glyphicon glyphicon-remove-sign'></span>&nbsp;&nbsp;Réponse à votre demande de soin</h4>
						  </div>
						  <div class='panel-body'>
						    	Votre demande a été annulée par l'infirmière  <b><i>".utf8_encode($valny['nomI'])." ".utf8_encode($valny['prenomI'])."</i></b>
						    	<br>
						    		<input type='hidden' class='{$data['id']}' value='{$data['status']}'>
						    	<div class='pull-right'>
						    		<a type='button' class='btn btn-default' id='{$data['id']}' onClick='showId({$data['id']});'>Vue &nbsp;&nbsp;<span class='glyphicon glyphicon-eye-open'></span>
						    		</a>
						    	</div>
						  </div>
						</div>");
				} elseif ($data['status'] == "accepter") 
				{
					echo("
						<div class='panel panel-success Tableau de bord'>
						  <div class='panel-heading'>
						    <h4 class='panel-title'><span class='glyphicon glyphicon-ok-sign'></span>&nbsp;&nbsp;Réponse à votre demande de soin</h4>
						  </div>
						  <div class='panel-body'>
								Votre demande vient d'être accéptée par l'infirmière  <b><i>".utf8_encode($valny['nomI'])." ".utf8_encode($valny['prenomI'])."</i></b>
						    	<br>
						    		<input type='hidden' class='{$data['id']}' value='{$data['status']}'>
						    	<div class='pull-right'>
						    		<a type='button' class='btn btn-default' id='{$data['id']}' onClick='showId({$data['id']});'>Vue &nbsp;&nbsp;<span class='glyphicon glyphicon-eye-open'></span>
						    		</a>
						    	</div>
						  </div>
						</div>");
				}
			}


		}
	}
?>
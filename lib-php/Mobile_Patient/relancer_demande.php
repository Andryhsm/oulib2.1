<?php     
	require "../cnx.php";

	header("Content-Type: text/html; charset: utf-8");
	$post = json_decode(file_get_contents("php://input"));
	$emailP = $post->emailP;
	$emailI = $post->emailI;
	$q = "UPDATE oulib_liste_demande SET status='attente' WHERE emailP='".$emailP."' AND emailI='".$emailI."' AND status='refuser'";

    if($bdd->exec($q)){
    	echo "Votre demande est bien relancer";
    }else{
    	echo "Erreur lors du lancement du demande email : ".$q;
    }

	
?>
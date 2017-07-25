<?php
	session_start();
        
	require "../cnx.php";

	header("Content-Type: text/html; charset: utf-8");
	$post = json_decode(file_get_contents("php://input"));
	$emailP = $post->emailP;
    $status = $post->status;

    if($bdd->exec("UPDATE oulib_liste_demande SET actu='ancien' WHERE emailP='".$emailP."' AND status='".$status."'")){
    	echo "effectuer";
    }else{
    	echo "non effectuer";
    }

	
?>
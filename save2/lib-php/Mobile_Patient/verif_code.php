<?php
	session_start();
        
	require "../cnx.php";

	header("Content-Type: text/html; charset: utf-8");
	$post = json_decode(file_get_contents("php://input"));

    $code = $post->code;
    $email = $post->patient->email;

   	$q = $bdd->query("SELECT * FROM oulib_patient WHERE emailP='".$email."' AND code='".$code."'");

    /*Enregistrement du fichier image dans la repertoire*/
    
    if($q->rowCount() == 1){
    	echo "redirection";
   	}else{
    	echo "pascode";
    }
?>
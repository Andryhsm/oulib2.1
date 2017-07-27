
<?php
	require '../cnx.php';

	header("Content-Type: text/html; charset:utf-8");

	$post = json_decode(file_get_contents("php://input"));
	$patient = $post->patient;

	echo "lfkdlmkfldkflkdlfkldkfldfd";
	?>